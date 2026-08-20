<?php
/**
 * Shopier REST API v1 — Webhook Handler
 * URL: https://merkezbayim.com/shopier-notify.php
 *
 * ÇALIŞMA MANTIĞI:
 *  Shopier, order.created eventinde JSON body + HTTP header gönderir.
 *  Body içindeki lineItems[0].productId → payments.payment_extra (Product ID) ile eşleştirilir.
 *
 * GÜVENLİK ÖNLEMLERİ:
 *  1. Shopier-Signature (HS256/HMAC-SHA256) doğrulaması
 *  2. Shopier-Webhook-Id ile replay attack koruması
 *  3. Sadece POST + order.created event işlenir
 *  4. Atomik UPDATE (payment_delivery=1 → 2 kontrolü, race condition koruması)
 *  5. SQL Injection koruması (PDO prepared statements)
 *  6. Product silme transaction DIŞINDA yapılır (kilit süresini kısaltır)
 *  7. display_errors = 0 (hata sızdırılmaz)
 *
 * GERİYE DÖNÜK UYUMLULUK:
 *  Eski OSB formatı ($_POST["res"] + $_POST["hash"]) hâlâ desteklenir.
 */

ini_set('display_errors', 0);
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die("Method Not Allowed");
}

if (!defined('DBHOSTS')) {
    require_once __DIR__ . '/Glycon.php';
}

// ─── Log Sistemi ─────────────────────────────────────────────────────────────
$logDir  = __DIR__ . '/logs';
$logFile = $logDir . '/shopier_webhook.log';

if (!is_dir($logDir)) {
    $created = @mkdir($logDir, 0755, true);
    if ($created) {
        $htaccessPath = $logDir . '/.htaccess';
        if (!file_exists($htaccessPath)) {
            @file_put_contents($htaccessPath, "Order allow,deny\nDeny from all\n");
        }
    }
}

if (!is_writable($logDir) && is_dir($logDir)) {
    $logDir  = sys_get_temp_dir();
    $logFile = $logDir . '/shopier_webhook_' . md5(__DIR__) . '.log';
} elseif (!is_dir($logDir)) {
    $logDir  = sys_get_temp_dir();
    $logFile = $logDir . '/shopier_webhook_' . md5(__DIR__) . '.log';
}

if (file_exists($logFile) && filesize($logFile) > 5 * 1024 * 1024) {
    @rename($logFile, $logFile . '.' . date('Ymd_His') . '.bak');
}

function shopierLog(string $msg) {
    global $logFile;
    $line = '[' . date('Y-m-d H:i:s') . '] ' . $msg . "\n";
    $result = @file_put_contents($logFile, $line, FILE_APPEND | LOCK_EX);
    if ($result === false) error_log('[SHOPIER-WEBHOOK] ' . $msg);
}

shopierLog('=== YENİ İSTEK ===');
shopierLog('IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'bilinmiyor'));

// OSB format tespiti: eski (res+hash) ve modern (platform_order_id+random_nr)
$isLegacyOSB = isset($_POST['res']) && isset($_POST['hash']);
$isModernOSB = !$isLegacyOSB && isset($_POST['platform_order_id']) && isset($_POST['random_nr']);
$isOSB       = $isLegacyOSB || $isModernOSB;
$rawBody     = file_get_contents('php://input');
// REST API v1 webhook: JSON body + Shopier-Signature HTTP header
$_hdrAll = function_exists('getallheaders') ? getallheaders() : [];
$_shopierSigH = '';
foreach ($_hdrAll as $_hk => $_hv) { if (strtolower($_hk) === 'shopier-signature') { $_shopierSigH = $_hv; break; } }
$isRESTv1 = !$isOSB && !empty($rawBody) && !empty($_shopierSigH);

shopierLog('Format: ' . ($isModernOSB ? 'Modern OSB' : ($isLegacyOSB ? 'Eski OSB' : ($isRESTv1 ? 'REST API v1 Webhook' : 'BİLİNMİYOR'))));

// ─── DB ──────────────────────────────────────────────────────────────────────
try {
    $conn = new PDO('mysql:host=' . DBHOSTS . ';dbname=' . DBNAMES . ';charset=utf8mb4;', DBUSERS, DBPASSS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    shopierLog('DB HATASI: ' . $e->getMessage());
    http_response_code(200);
    die('ok');
}

$methodQ = $conn->prepare("SELECT * FROM payment_methods WHERE method_get='shopier'");
$methodQ->execute();
$method = $methodQ->fetch(PDO::FETCH_ASSOC);
if (!$method) { shopierLog('HATA: Shopier metodu bulunamadı.'); http_response_code(200); die('ok'); }

$extras   = json_decode($method['method_extras'], true);
$methodId = $method['id'];

$settingsQ = $conn->prepare("SELECT * FROM settings WHERE id=1 LIMIT 1");
$settingsQ->execute();
$settings = $settingsQ->fetch(PDO::FETCH_ASSOC);

$rawApiKey    = $extras['apiKey'] ?? '';
$apiKeyParts  = explode('|||', $rawApiKey);
$apiKey       = $apiKeyParts[0] ?? $rawApiKey; // Eski OSB apiKey (veya ||| yoksa kendisi)
$shopierToken = $apiKeyParts[1] ?? $rawApiKey; // REST API Bearer Token
$apiSecret    = $extras['apiSecret'] ?? '';    // Eski OSB apiSecret
$webhookToken = $extras['webhookToken'] ?? $extras['apiSecret'] ?? ''; // REST API Webhook Token

// ═══════════════════════════════════════════════════════════════════════════════
// YOL A: REST API v1
// ═══════════════════════════════════════════════════════════════════════════════
if ($isRESTv1) {
    $allHeaders  = function_exists('getallheaders') ? getallheaders() : [];
    $normalizedH = [];
    foreach ($allHeaders as $k => $v) $normalizedH[strtolower($k)] = $v;

    $shopierEvent     = $normalizedH['shopier-event']      ?? '';
    $shopierWebhookId = $normalizedH['shopier-webhook-id'] ?? '';
    $shopierSig       = $normalizedH['shopier-signature']  ?? '';

    shopierLog("REST v1 | Event: $shopierEvent | WebhookId: $shopierWebhookId");

    if (!empty($webhookToken)) {
        $expectedSig = hash_hmac('sha256', $rawBody, $webhookToken);
        if (!hash_equals($expectedSig, $shopierSig)) {
            shopierLog("HATA: Signature doğrulaması başarısız.");
            http_response_code(403); die('invalid signature');
        }
        shopierLog('Signature doğrulaması başarılı.');
    } else {
        shopierLog('UYARI: webhookToken tanımlı değil — imza doğrulaması atlandı.');
    }

    if ($shopierEvent !== 'order.created') {
        shopierLog("Event '$shopierEvent' işlenmedi."); http_response_code(200); die('ok');
    }

    $order = json_decode($rawBody, true);
    if (!$order || !isset($order['id'])) {
        shopierLog('HATA: JSON parse başarısız.'); http_response_code(200); die('ok');
    }

    $shopierOrderId   = $order['id'];
    $shopierProductId = $order['lineItems'][0]['productId'] ?? null;
    $shopierPrice     = floatval($order['totals']['total']  ?? 0);
    $buyerEmail       = $order['shippingInfo']['email']     ?? null;
    $buyerPhone       = $order['shippingInfo']['phone']     ?? null;
    $paymentStatus    = $order['paymentStatus']             ?? '';

    shopierLog("Order: $shopierOrderId | Product: $shopierProductId | Tutar: $shopierPrice | Status: $paymentStatus");

    if ($paymentStatus !== 'paid') {
        shopierLog("ATLANDI: status='$paymentStatus'"); http_response_code(200); die('ok');
    }

    if (!empty($shopierWebhookId)) {
        try {
            $rQ = $conn->prepare("SELECT payment_id FROM payments WHERE payment_shopier_webhook_id=:wid LIMIT 1");
            $rQ->execute(['wid' => $shopierWebhookId]);
            if ($rQ->fetchColumn()) {
                shopierLog("Replay Engellendi! WebhookId: $shopierWebhookId"); http_response_code(200); die('ok');
            }
        } catch (PDOException $e) { shopierLog('UYARI: webhook_id sütunu yok, replay kontrolü atlandı.'); }
    }

    $payment = null;

    if ($shopierProductId) {
        $pQ = $conn->prepare("SELECT p.*, c.balance AS c_balance FROM payments p INNER JOIN clients c ON c.client_id=p.client_id WHERE p.payment_extra=:pid AND p.payment_method=:m AND p.payment_delivery=1 LIMIT 1");
        $pQ->execute(['pid' => $shopierProductId, 'm' => $methodId]);
        $payment = $pQ->fetch(PDO::FETCH_ASSOC);
        if ($payment) shopierLog("Product ID eşleşti. payment_id=" . $payment['payment_id']);
    }

    if (!$payment && $buyerEmail) {
        $uQ = $conn->prepare("SELECT * FROM clients WHERE email=:e LIMIT 1");
        $uQ->execute(['e' => $buyerEmail]);
        $user = $uQ->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $payment = findMatch($conn, $user['client_id'], $methodId, $shopierPrice, $extras);
            if ($payment) shopierLog("E-posta fallback eşleşti. payment_id=" . $payment['payment_id']);
        }
    }

    if (!$payment && $buyerPhone) {
        $clean = preg_replace('/[^0-9]/', '', $buyerPhone);
        if (substr($clean,0,2)==='90') $clean=substr($clean,2);
        elseif (substr($clean,0,1)==='0') $clean=substr($clean,1);
        $phones = [$clean, '0'.$clean, '90'.$clean, '+90'.$clean, $buyerPhone];
        $ph = implode(',', array_fill(0, count($phones), '?'));
        $uQ = $conn->prepare("SELECT * FROM clients WHERE telephone IN ($ph) LIMIT 1");
        $uQ->execute($phones);
        $user = $uQ->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $payment = findMatch($conn, $user['client_id'], $methodId, $shopierPrice, $extras);
            if ($payment) shopierLog("Telefon fallback eşleşti. payment_id=" . $payment['payment_id']);
        }
    }

    if (!$payment) { shopierLog('SONUÇ: Eşleşme bulunamadı.'); http_response_code(200); die('ok'); }

    $result = processV1($conn, $payment, $method, $methodId, $shopierOrderId, $shopierWebhookId, $shopierProductId, $settings);
    shopierLog($result && $result !== 'already_processed' ? "SONUÇ: Başarılı. Miktar: $result TL" : 'SONUÇ: ' . ($result === 'already_processed' ? 'Zaten işlenmiş.' : 'Başarısız.'));
    shopierLog('===================');
    http_response_code(200); echo 'ok'; die();
}

// ═══════════════════════════════════════════════════════════════════════════════
// YOL B: Modern OSB (platform_order_id + random_nr formatı)
// ═══════════════════════════════════════════════════════════════════════════════
if ($isModernOSB) {
    shopierLog('Modern OSB formatı işleniyor.');

    $osbOrderId    = $_POST['platform_order_id'] ?? '';
    $osbStatus     = (int)($_POST['status']            ?? 0);
    $osbRandomNr   = $_POST['random_nr']         ?? '';
    $osbTotalValue = $_POST['total_order_value']  ?? '';
    $osbCurrency   = $_POST['currency']           ?? '';
    $osbSignature  = base64_decode($_POST['signature'] ?? '');
    $buyerEmail    = trim($_POST['buyer_email']   ?? '');
    $buyerPhone    = trim($_POST['buyer_phone']   ?? '');
    $shopierPrice  = floatval(str_replace(',', '.', $osbTotalValue));

    shopierLog("OSB | Order: $osbOrderId | Status: $osbStatus | Email: $buyerEmail | Tutar: $shopierPrice");

    // İmza doğrulama: HMAC-SHA256(random_nr + order_id + total + currency, apiSecret)
    $osbSecret = $extras['apiSecret'] ?? '';
    if (!empty($osbSecret)) {
        $sigData  = $osbRandomNr . $osbOrderId . $osbTotalValue . $osbCurrency;
        $expected = hash_hmac('SHA256', $sigData, $osbSecret, true);
        if (!hash_equals($expected, $osbSignature)) {
            shopierLog('HATA: OSB imza doğrulaması başarısız.');
            http_response_code(200); die('ok');
        }
        shopierLog('OSB imza doğrulaması başarılı.');
    } else {
        shopierLog('UYARI: apiSecret tanımlı değil — imza doğrulaması atlandı.');
    }

    if ($osbStatus != 1) {
        shopierLog("OSB status=$osbStatus (ödeme başarısız). Atlanıyor.");
        http_response_code(200); die('ok');
    }

    $processed = false;

    // Yöntem 1: Shopier API ile product ID'yi al → payment_extra ile eşleştir
    if ($shopierToken && $osbOrderId) {
        $ch = curl_init("https://api.shopier.com/v1/orders/$osbOrderId");
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER     => ["Authorization: Bearer $shopierToken", "Accept: application/json"],
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_SSL_VERIFYPEER => true,
        ]);
        $apiResp = curl_exec($ch);
        $apiCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        shopierLog("Shopier API sipariş sorgusu: HTTP $apiCode");
        if ($apiCode === 200 && $apiResp) {
            $orderData = json_decode($apiResp, true);
            $productId = $orderData['lineItems'][0]['productId'] ?? null;
            shopierLog("API'den product ID: $productId");
            if ($productId) {
                $pQ = $conn->prepare("SELECT p.*, c.balance AS c_balance FROM payments p INNER JOIN clients c ON c.client_id=p.client_id WHERE p.payment_extra=:pid AND p.payment_method=:m AND p.payment_delivery=1 LIMIT 1");
                $pQ->execute(['pid' => $productId, 'm' => $methodId]);
                $pay = $pQ->fetch(PDO::FETCH_ASSOC);
                if ($pay) {
                    $r = processV1($conn, $pay, $method, $methodId, $osbOrderId, '', $productId, $settings);
                    $processed = ($r && $r !== 'already_processed');
                    shopierLog($processed ? "API+Product ID başarılı: $r TL" : 'Product ID işlenemedi.');
                }
            }
        }
    }

    // Yöntem 2: Email fallback
    if (!$processed && $buyerEmail) {
        $uQ = $conn->prepare("SELECT * FROM clients WHERE email=:e LIMIT 1");
        $uQ->execute(['e' => $buyerEmail]);
        $user = $uQ->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $pay = findMatch($conn, $user['client_id'], $methodId, $shopierPrice, $extras);
            if ($pay) {
                $r = processLegacy($conn, $pay, $user, $method, $methodId, $osbOrderId, $settings);
                $processed = ($r && $r !== 'already_processed');
                shopierLog($processed ? "Email fallback başarılı: $r TL" : 'Email fallback başarısız.');
            }
        }
    }

    // Yöntem 3: Telefon fallback
    if (!$processed && $buyerPhone) {
        $clean = preg_replace('/[^0-9]/', '', $buyerPhone);
        if (substr($clean,0,2)==='90') $clean=substr($clean,2);
        elseif (substr($clean,0,1)==='0') $clean=substr($clean,1);
        $phones = [$clean, '0'.$clean, '90'.$clean, '+90'.$clean, $buyerPhone];
        $ph = implode(',', array_fill(0, count($phones), '?'));
        $uQ = $conn->prepare("SELECT * FROM clients WHERE telephone IN ($ph) LIMIT 1");
        $uQ->execute($phones);
        $user = $uQ->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $pay = findMatch($conn, $user['client_id'], $methodId, $shopierPrice, $extras);
            if ($pay) {
                $r = processLegacy($conn, $pay, $user, $method, $methodId, $osbOrderId, $settings);
                $processed = ($r && $r !== 'already_processed');
                shopierLog($processed ? "Telefon fallback başarılı: $r TL" : 'Telefon fallback başarısız.');
            }
        }
    }

    shopierLog($processed ? 'SONUÇ: Modern OSB başarılı.' : 'SONUÇ: Modern OSB eşleştirilemedi.');
    shopierLog('===================');
    http_response_code(200); echo 'ok'; die();
}

// ═══════════════════════════════════════════════════════════════════════════════
// YOL C: Eski OSB
// ═══════════════════════════════════════════════════════════════════════════════
if ($isOSB) {
    shopierLog('Eski OSB formatı.');

    $hash = hash_hmac('sha256', $_POST['res'] . $apiKey, $apiSecret, false);
    if (!hash_equals($hash, $_POST['hash'])) {
        shopierLog("HATA: OSB Hash başarısız."); http_response_code(403); die('invalid signature');
    }
    shopierLog('OSB Hash başarılı.');

    $arr = json_decode(base64_decode($_POST['res']), true);
    if (!$arr) { shopierLog('HATA: OSB decode başarısız.'); echo 'success'; die(); }
    if (isset($arr['istest']) && $arr['istest'] == 1) { shopierLog('TEST — atlanıyor.'); echo 'success'; die(); }

    $order_id   = $arr['orderid'] ?? null;
    $buyerEmail = $arr['email']   ?? null;
    $buyerPhone = $arr['phone']   ?? null;
    $shopierPrice = floatval($arr['price'] ?? 0);
    $productId_osb = $arr['productid'] ?? null;

    shopierLog("OSB | Order: $order_id | Product: $productId_osb | Email: $buyerEmail | Tutar: $shopierPrice");

    if ($productId_osb) {
        $rQ = $conn->prepare("SELECT payment_id FROM payments WHERE payment_extra=:pid AND payment_status=3 LIMIT 1");
        $rQ->execute(['pid' => $productId_osb]);
        if ($rQ->fetchColumn()) { shopierLog("Replay! Product: $productId_osb"); echo 'success'; die(); }
    }

    $processed = false;

    // Product ID eşleştirme
    if ($productId_osb) {
        $pQ = $conn->prepare("SELECT p.*, c.balance AS c_balance FROM payments p INNER JOIN clients c ON c.client_id=p.client_id WHERE p.payment_extra=:pid AND p.payment_method=:m AND p.payment_delivery=1 LIMIT 1");
        $pQ->execute(['pid' => $productId_osb, 'm' => $methodId]);
        $pay = $pQ->fetch(PDO::FETCH_ASSOC);
        if ($pay) {
            $r = processLegacy($conn, $pay, [], $method, $methodId, $order_id, $settings);
            $processed = ($r && $r !== 'already_processed');
            shopierLog($processed ? "Product ID başarılı: $r" : "Product ID: işlem yapılamadı.");
        }
    }

    // privatecode eşleştirme
    if (!$processed && $order_id) {
        $pQ = $conn->prepare("SELECT p.*, c.balance AS c_balance FROM payments p INNER JOIN clients c ON c.client_id=p.client_id WHERE p.payment_privatecode=:c AND p.payment_method=:m AND p.payment_delivery=1 AND p.payment_status=1 LIMIT 1");
        $pQ->execute(['c' => $order_id, 'm' => $methodId]);
        $pay = $pQ->fetch(PDO::FETCH_ASSOC);
        if ($pay) {
            $r = processLegacy($conn, $pay, [], $method, $methodId, $order_id, $settings);
            $processed = ($r && $r !== 'already_processed');
            if ($processed) shopierLog("Privatecode başarılı: $r");
        }
    }

    // E-posta fallback
    if (!$processed && $buyerEmail) {
        $uQ = $conn->prepare("SELECT * FROM clients WHERE email=:e LIMIT 1");
        $uQ->execute(['e' => $buyerEmail]);
        $user = $uQ->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $pay = findMatch($conn, $user['client_id'], $methodId, $shopierPrice, $extras);
            if ($pay) {
                $r = processLegacy($conn, $pay, $user, $method, $methodId, $order_id, $settings);
                $processed = ($r && $r !== 'already_processed');
                if ($processed) shopierLog("E-posta başarılı: $r");
            }
        }
    }

    // Telefon fallback
    if (!$processed && $buyerPhone) {
        $clean = preg_replace('/[^0-9]/', '', $buyerPhone);
        if (substr($clean,0,2)==='90') $clean=substr($clean,2);
        elseif (substr($clean,0,1)==='0') $clean=substr($clean,1);
        $phones = [$clean, '0'.$clean, '90'.$clean, '+90'.$clean, $buyerPhone];
        $ph = implode(',', array_fill(0, count($phones), '?'));
        $uQ = $conn->prepare("SELECT * FROM clients WHERE telephone IN ($ph) LIMIT 1");
        $uQ->execute($phones);
        $user = $uQ->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $pay = findMatch($conn, $user['client_id'], $methodId, $shopierPrice, $extras);
            if ($pay) {
                $r = processLegacy($conn, $pay, $user, $method, $methodId, $order_id, $settings);
                $processed = ($r && $r !== 'already_processed');
                if ($processed) shopierLog("Telefon başarılı: $r");
            }
        }
    }

    shopierLog($processed ? 'SONUÇ: OSB başarılı.' : 'SONUÇ: OSB eşleştirilemedi.');
    shopierLog('===================');
    echo 'success'; die();
}

shopierLog('HATA: Tanınmayan format.'); http_response_code(400); die('bad request');

// ═══════════════════════════════════════════════════════════════════════════════
// FONKSİYONLAR
// ═══════════════════════════════════════════════════════════════════════════════

function findMatch(PDO $conn, int $cid, int $mid, float $price, array $extras): ?array {
    $q = $conn->prepare("SELECT * FROM payments WHERE client_id=:c AND payment_method=:m AND payment_status=1 AND payment_delivery=1 ORDER BY payment_id DESC");
    $q->execute(['c' => $cid, 'm' => $mid]);
    $rows = $q->fetchAll(PDO::FETCH_ASSOC);
    $fee = floatval(str_replace(',', '.', $extras['fee'] ?? '0'));
    $pf  = (isset($extras['processing_fee']) && $extras['processing_fee'] == '1') ? 0.49 : 0;
    foreach ($rows as $p) {
        $exp = round($p['payment_amount'] + ($p['payment_amount'] * $fee / 100) + $pf, 2);
        if (abs($exp - $price) <= 0.50) return $p;
    }
    return null;
}

function processV1(PDO $conn, array $pay, array $method, int $mid, string $orderId, string $webhookId, ?string $productId, array $settings) {
    if ($pay['payment_delivery'] != 1 || $pay['payment_status'] == 3) return 'already_processed';

    $extras = json_decode($method['method_extras'], true);
    $token  = (explode('|||', $extras['apiKey'] ?? ''))[1] ?? null;

    $bQ = $conn->prepare("SELECT * FROM payments_bonus WHERE bonus_method=:m AND bonus_from<=:f ORDER BY bonus_from DESC LIMIT 1");
    $bQ->execute(['m' => $mid, 'f' => $pay['payment_amount']]);
    $bonus = $bQ->fetch(PDO::FETCH_ASSOC);

    $base  = (float)$pay['payment_amount'];
    $bVal  = $bonus ? round($base * $bonus['bonus_amount'] / 100, 2) : 0.0;
    $total = $base + $bVal;
    $cid   = $pay['client_id'];

    $conn->beginTransaction();
    $balQ = $conn->prepare("SELECT balance FROM clients WHERE client_id=:id FOR UPDATE");
    $balQ->execute(['id' => $cid]);
    $curBal = floatval($balQ->fetchColumn());

    $uQ = $conn->prepare("UPDATE payments SET client_balance=:b, payment_status=3, payment_delivery=2, payment_extra=:e, payment_update_date=:d WHERE payment_id=:id AND payment_delivery=1");
    $uQ->execute(['b' => $curBal, 'e' => 'shopier_order:' . $orderId, 'd' => date('Y-m-d H:i:s'), 'id' => $pay['payment_id']]);
    if ($uQ->rowCount() === 0) { $conn->rollBack(); return 'already_processed'; }

    if (!empty($webhookId)) {
        try { $conn->prepare("UPDATE payments SET payment_shopier_webhook_id=:w WHERE payment_id=:id")->execute(['w'=>$webhookId,'id'=>$pay['payment_id']]); }
        catch (PDOException $e) {}
    }

    $conn->prepare("UPDATE clients SET balance=:b WHERE client_id=:id")->execute(['b' => $curBal + $base, 'id' => $cid]);

    $act = $bonus
        ? $method['method_name'] . ' ile %' . $bonus['bonus_amount'] . ' bonus dahil ' . number_format($total,2,'.','') . ' TL bakiye yüklendi'
        : $method['method_name'] . ' ile ' . number_format($base,2,'.','') . ' TL bakiye yüklendi';
    $conn->prepare("INSERT INTO client_report SET client_id=:c, action=:a, report_ip=:ip, report_date=:d")
         ->execute(['c'=>$cid,'a'=>$act,'ip'=>$_SERVER['REMOTE_ADDR']??'0.0.0.0','d'=>date('Y-m-d H:i:s')]);

    $conn->commit();
    doReferral($conn, $pay, $total, $settings);
    if ($bonus && $bVal > 0) doBonus($conn, $cid, $bVal, $bonus['bonus_amount']);
    if ($productId && $token) delProduct($productId, $token);
    return $total;
}

function processLegacy(PDO $conn, array $pay, array $user, array $method, int $mid, ?string $orderId, array $settings) {
    if ($pay['payment_delivery'] != 1 || $pay['payment_status'] == 3) return 'already_processed';

    $extras = json_decode($method['method_extras'], true);
    $token  = (explode('|||', $extras['apiKey'] ?? ''))[1] ?? null;

    $bQ = $conn->prepare("SELECT * FROM payments_bonus WHERE bonus_method=:m AND bonus_from<=:f ORDER BY bonus_from DESC LIMIT 1");
    $bQ->execute(['m' => $mid, 'f' => $pay['payment_amount']]);
    $bonus = $bQ->fetch(PDO::FETCH_ASSOC);

    $base  = (float)$pay['payment_amount'];
    $bVal  = $bonus ? round($base * $bonus['bonus_amount'] / 100, 2) : 0.0;
    $total = $base + $bVal;
    $cid   = !empty($user['client_id']) ? $user['client_id'] : $pay['client_id'];

    $conn->beginTransaction();
    $balQ = $conn->prepare("SELECT balance FROM clients WHERE client_id=:id FOR UPDATE");
    $balQ->execute(['id' => $cid]);
    $curBal = floatval($balQ->fetchColumn());

    $delProd = null;
    if (!empty($pay['payment_extra']) && substr($pay['payment_extra'],0,14) !== 'shopier_order:') $delProd = $pay['payment_extra'];

    $uQ = $conn->prepare("UPDATE payments SET client_balance=:b, payment_status=3, payment_delivery=2, payment_extra=:e, payment_update_date=:d WHERE payment_id=:id AND payment_delivery=1");
    $uQ->execute(['b' => $curBal, 'e' => 'shopier_order:' . $orderId, 'd' => date('Y-m-d H:i:s'), 'id' => $pay['payment_id']]);
    if ($uQ->rowCount() === 0) { $conn->rollBack(); return 'already_processed'; }

    $conn->prepare("UPDATE clients SET balance=:b WHERE client_id=:id")->execute(['b' => $curBal + $base, 'id' => $cid]);

    $act = $bonus
        ? $method['method_name'] . ' ile %' . $bonus['bonus_amount'] . ' bonus dahil ' . number_format($total,2,'.','') . ' TL bakiye yüklendi'
        : $method['method_name'] . ' ile ' . number_format($base,2,'.','') . ' TL bakiye yüklendi';
    $conn->prepare("INSERT INTO client_report SET client_id=:c, action=:a, report_ip=:ip, report_date=:d")
         ->execute(['c'=>$cid,'a'=>$act,'ip'=>$_SERVER['REMOTE_ADDR']??'0.0.0.0','d'=>date('Y-m-d H:i:s')]);

    $conn->commit();
    if ($delProd && $token) delProduct($delProd, $token);
    doReferral($conn, $pay, $total, $settings);
    if ($bonus && $bVal > 0) doBonus($conn, $cid, $bVal, $bonus['bonus_amount']);
    return $total;
}

function doReferral(PDO $conn, array $pay, float $total, array $settings) {
    try {
        if (($settings['referral'] ?? 0) != 2) return;
        $cid = $pay['client_id'];
        $ok = 0;
        if (($settings['ref_type'] ?? 0) == 0) $ok = 1;
        else { $r=$conn->prepare("SELECT COUNT(*) FROM payments WHERE payment_status=3 AND client_id=:c"); $r->execute(['c'=>$cid]); if($r->fetchColumn()<=1) $ok=1; }
        if ($ok) {
            $c=$conn->prepare("SELECT * FROM clients WHERE client_id=:c LIMIT 1"); $c->execute(['c'=>$cid]); $cc=$c->fetch(PDO::FETCH_ASSOC);
            if ($cc && !empty($cc['referral'])) {
                $rid=$cc['referral']; $o=$total*floatval($settings['ref_bonus']??0)/100;
                if ($o>0) {
                    $conn->prepare("INSERT INTO referral (client_id,refferal,action,register_date) VALUES(:c,:r,:a,1)")->execute(['c'=>$rid,'r'=>$cid,'a'=>$o]);
                    $conn->prepare("UPDATE clients SET balance=balance+:b,refchar=refchar+:r WHERE client_id=:c")->execute(['b'=>$o,'r'=>$o,'c'=>$rid]);
                    shopierLog("Referral: $o TL → #$rid");
                }
            }
        }
    } catch (Exception $e) { shopierLog('Referral hatası: '.$e->getMessage()); }
}

function doBonus(PDO $conn, int $cid, float $amt, float $pct) {
    try {
        $conn->prepare("UPDATE clients SET balance=balance+:b WHERE client_id=:c")->execute(['b'=>$amt,'c'=>$cid]);
        $conn->prepare("INSERT INTO client_report SET client_id=:c,action=:a,report_ip=:ip,report_date=:d")
             ->execute(['c'=>$cid,'a'=>'Ödeme bonusu: %'.$pct.' ('.number_format($amt,2,'.','').' TL)','ip'=>$_SERVER['REMOTE_ADDR']??'0.0.0.0','d'=>date('Y-m-d H:i:s')]);
        shopierLog("Bonus: $amt TL → #$cid");
    } catch (Exception $e) { shopierLog('Bonus hatası: '.$e->getMessage()); }
}

function delProduct(string $pid, string $token) {
    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.shopier.com/v1/products/' . $pid);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_TIMEOUT, 8);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer '.$token, 'Accept: application/json']);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        shopierLog("Ürün silme: $pid → HTTP $code");
    } catch (Exception $e) { shopierLog("Ürün silme hatası: ".$e->getMessage()); }
}
