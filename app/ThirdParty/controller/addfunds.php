<?php

use Omnipay\Omnipay;
$title .= $languageArray["addfunds.title"];

// set your currency here
/*
if( !isset($_SESSION["neira_userlogin"] ) || (isset($_SESSION["neira_userlogin"] ) && $_SESSION["neira_userlogin"] != 1)  || $user["client_type"] == 1  ){
  Header("Location:".base_url());
  exit();
}

if($_SESSION["neira_userlogin"] == 1 ):
    if($settings["sms_verify"] == 2 && $user["sms_verify"] != 2){
        header("Location:".base_url('verify/sms'));
    }
    if($settings["mail_verify"] == 2 && $user["mail_verify"] != 2 ){
        header("Location:".base_url('verify/mail'));
    }
    endif;
*/
if ($settings["sms_verify"] == 2 && $user["sms_verify"] != 2) {
    header("Location:" . base_url('verify/sms'));
}
if ($settings["mail_verify"] == 2 && $user["mail_verify"] != 2) {
    header("Location:" . base_url('verify/mail'));
}
$methodList = $conn->prepare("SELECT * FROM payment_methods WHERE method_type=:type && id!=:id ORDER BY method_line ");
$methodList->execute(array("type" => 2, "id" => 7));
$methodList = $methodList->fetchAll(PDO::FETCH_ASSOC);
$paymentsList = $conn->prepare("SELECT * FROM payment_methods WHERE method_type=:type && id!=:id ORDER BY method_line ASC ");
$paymentsList->execute(array("type" => 2, "id" => 7));
$paymentsList = $paymentsList->fetchAll(PDO::FETCH_ASSOC);


foreach ($paymentsList as $index => $payment) {
    $extra = json_decode($payment["method_extras"], true);
    $methodList[$index]["method_name"] = $extra["name"];
    $methodList[$index]["content"] = isset($extra["content"]) ? $extra["content"] : '';
    $methodList[$index]["id"] = $payment["id"];
}

$bankPayment = $conn->prepare("SELECT * FROM payment_methods WHERE id=:id ");
$bankPayment->execute(array("id" => 7));
$bankPayment = $bankPayment->fetch(PDO::FETCH_ASSOC);

$bankList = $conn->prepare("SELECT * FROM bank_accounts");
$bankList->execute(array());
$bankList = $bankList->fetchAll(PDO::FETCH_ASSOC);

if ($_POST && isset($_POST["payment_bank"])) :

    foreach ($_POST as $key => $value) :
        $_SESSION["data"][$key] = $value;
    endforeach;

    $bank = htmlentities($_POST["payment_bank"]);
    $amount = htmlentities($_POST["payment_bank_amount"]);
    $gonderen = htmlentities($_POST["payment_gonderen"]);
    $method_id = 7;
    $extras = json_encode($_POST);

    if (open_bankpayment($user["client_id"]) == 2) {
        unset($_SESSION["data"]);
        $error = 1;
        $errorText = $languageArray["error.addfunds.bank.limit"];
    } elseif (empty($bank)) {
        $error = 1;
        $errorText = $languageArray["error.addfunds.bank.account"];
    } elseif (!is_numeric($amount)) {
        $error = 1;
        $errorText = $languageArray["error.addfunds.bank.amount"];
    } elseif (empty($gonderen)) {
        $error = 1;
        $errorText = $languageArray["error.addfunds.bank.sender"];
    } else {

        $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_method=:method, payment_create_date=:date, payment_ip=:ip, payment_extra=:extras, payment_bank=:bank ");
        $insert->execute(array("c_id" => $user["client_id"], "amount" => $amount, "method" => $method_id, "date" => date("Y.m.d H:i:s"), "ip" => GetIP(), "extras" => $extras, "bank" => $bank));
        if ($insert) {
            unset($_SESSION["data"]);
            $success = 1;
            $successText = $languageArray["error.addfunds.bank.success"];
            if ($settings["alert_newbankpayment"] == 2) :
                if ($settings["alert_type"] == 3) : $sendmail = 1;
                    $sendsms = 1;
                elseif ($settings["alert_type"] == 2) : $sendmail = 1;
                    $sendsms = 0;
                elseif ($settings["alert_type"] == 1) : $sendmail = 0;
                    $sendsms = 1;
                endif;
                if ($sendsms) :
                    SMSUser($settings["admin_telephone"], "Websitenizde #" . $conn->lastInsertId() . " idli yeni bir ödeme talebi mevcut.");
                endif;
                if ($sendmail) :
                    sendMail(["subject" => "Yeni ödeme talebi mevcut.", "body" => "Websitenizde #" . $conn->lastInsertId() . " idli yeni bir ödeme talebi mevcut.", "mail" => $settings["admin_mail"]]);
                endif;
            endif;
        } else {
            $error = 1;
            $errorText = $languageArray["error.addfunds.bank.fail"];
        }
    }

elseif ($_POST && isset($_POST["payment_type"])) :

    foreach ($_POST as $key => $value) :
        $_SESSION["data"][$key] = $value;
    endforeach;


    if (!$user["first_name"]) :
        $user["first_name"] = "Ad Soyad";
    endif;

    if (!$user["telephone"]) :
        $user["telephone"] = "05555555555";
    endif;

    $method_id = $_POST["payment_type"];
    $amount = htmlentities($_POST["payment_amount"]);
    $amount = str_replace(',', '.', $amount); // Virgüllü girişi noktaya çevir
    $extras = json_encode($_POST);
    $method = $conn->prepare("SELECT * FROM payment_methods WHERE id=:id ");
    $method->execute(array("id" => $method_id));
    $method = $method->fetch(PDO::FETCH_ASSOC);
    $extra = json_decode($method["method_extras"], true);
    $paymentCode = time() . '_' . $user['client_id'] . '_' . random_int(1000, 9999);
    $amount = floatval($amount);
    $fee_rate = floatval(str_replace(',', '.', $extra['fee'] ?? 0));
    $amount_fee = round($amount + ($amount * $fee_rate / 100), 2); // Komisyonlu tutar (yuvarlanmış)

    if (empty($method_id)) {
        $error = 1;
        $errorText = $languageArray["error.addfunds.online.method"];
    } elseif (!is_numeric($amount)) {
        $error = 1;
        $errorText = $languageArray["error.addfunds.online.amount"];
    } elseif ($amount < $method["method_min"]) {
        $error = 1;
        $errorText = str_replace("{min}", $method["method_min"], $languageArray["error.addfunds.online.min"]);
    } elseif ($amount > $method["method_max"] && $method["method_max"] != 0) {
        $error = 1;
        $errorText = str_replace("{max}", $method["method_max"], $languageArray["error.addfunds.online.max"]);
    } else {
        if ($method_id == 2) :
            $merchant_id = $extra["merchant_id"];
            $merchant_key = $extra["merchant_key"];
            $merchant_salt = $extra["merchant_salt"];
            $email = $user["email"];
            $payment_amount = $amount_fee * 100;
            $merchant_oid = $paymentCode;
            $user_name = $user["first_name"];
            $user_address = "Belirtilmemiş";
            $user_phone = $user["telephone"];
            $payment_type = "eft";
            $user_ip = GetIP();
            $timeout_limit = "360";
            $debug_on = 1;
            $test_mode = 0;
            $no_installment = 0;
            $max_installment = 0;
            $hash_str = $merchant_id . $user_ip . $merchant_oid . $email . $payment_amount . $payment_type . $test_mode;
            $paytr_token = base64_encode(hash_hmac('sha256', $hash_str . $merchant_salt, $merchant_key, true));
            $post_vals = array(
                'merchant_id' => $merchant_id,
                'user_ip' => $user_ip,
                'merchant_oid' => $merchant_oid,
                'email' => $email,
                'payment_amount' => $payment_amount,
                'payment_type' => $payment_type,
                'paytr_token' => $paytr_token,
                'debug_on' => $debug_on,
                'timeout_limit' => $timeout_limit,
                'test_mode' => $test_mode,
                'ref_id' => "d490b3df19ed19ee4f07e013c9ec71f816499651055ae98e8bbe5c1a12ff8688"
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.paytr.com/odeme/api/get-token");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_vals);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            $result = @curl_exec($ch);
            if (curl_errno($ch))
                die("PAYTR IFRAME connection error. err:" . curl_error($ch));
            curl_close($ch);
            $result = json_decode($result, 1);

            if ($result['status'] == 'success') :
                unset($_SESSION["data"]);
                $token = $result['token'];
                $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
                $insert->execute(array("c_id" => $user["client_id"], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));
                $success = 1;
                $successText = $languageArray["error.addfunds.online.success"];
                $payment_url = "https://www.paytr.com/odeme/api/" . $token;
                $_POST = $result;
            else :
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"];
            endif;
        elseif ($method_id == 1) :
            $merchant_id = $extra["merchant_id"];
            $merchant_key = $extra["merchant_key"];
            $merchant_salt = $extra["merchant_salt"];
            $email = $user["email"];
            $payment_amount = $amount_fee * 100;
            $merchant_oid = $paymentCode;
            $user_name = $user["first_name"];
            $user_address = "Belirtilmemiş";
            $user_phone = $user["telephone"];
            $currency = "TL";
            $merchant_ok_url = base_url();
            $merchant_fail_url = base_url();
            $user_basket = base64_encode(json_encode(array(array($amount . " " . $currency . " Bakiye", $amount_fee, 1))));
            $user_ip = GetIP();
            $timeout_limit = "360";
            $debug_on = 1;
            $test_mode = 0;
            $no_installment = 0;
            $max_installment = 0;
            $hash_str = $merchant_id . $user_ip . $merchant_oid . $email . $payment_amount . $user_basket . $no_installment . $max_installment . $currency . $test_mode;
            $paytr_token = base64_encode(hash_hmac('sha256', $hash_str . $merchant_salt, $merchant_key, true));
            $post_vals = array(
                'merchant_id' => $merchant_id,
                'user_ip' => $user_ip,
                'merchant_oid' => $merchant_oid,
                'email' => $email,
                'payment_amount' => $payment_amount,
                'paytr_token' => $paytr_token,
                'user_basket' => $user_basket,
                'debug_on' => $debug_on,
                'no_installment' => $no_installment,
                'max_installment' => $max_installment,
                'user_name' => $user_name,
                'user_address' => $user_address,
                'user_phone' => $user_phone,
                'merchant_ok_url' => $merchant_ok_url,
                'merchant_fail_url' => $merchant_fail_url,
                'timeout_limit' => $timeout_limit,
                'currency' => $currency,
                'test_mode' => $test_mode,
                'ref_id' => "d490b3df19ed19ee4f07e013c9ec71f816499651055ae98e8bbe5c1a12ff8688"
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.paytr.com/odeme/api/get-token");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_vals);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            $result = @curl_exec($ch);
            if (curl_errno($ch))
                die("PAYTR IFRAME connection error. err:" . curl_error($ch));
            curl_close($ch);
            $result = json_decode($result, 1);

            if ($result['status'] == 'success') :
                unset($_SESSION["data"]);
                $token = $result['token'];
                $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
                $insert->execute(array("c_id" => $user["client_id"], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));
                $success = 1;
                $successText = $languageArray["error.addfunds.online.success"];
                $payment_url = "https://www.paytr.com/odeme/guvenli/" . $token;
            else :
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"] . " - " . $result['reason'];
            endif;
        elseif ($method_id == 3) :

            $payment_types = "";
            foreach ($extra["payment_type"] as $i => $v) {
                $payment_types .= $v . ",";
            }
            $payment_types = substr($payment_types, 0, -1);
            $hashOlustur = base64_encode(hash_hmac('sha256', $user["email"] . "|" . $user["email"] . "|" . $user['client_id'] . $extra['apiKey'], $extra['apiSecret'], true));
            $postData = array(
                'apiKey' => $extra['apiKey'],
                'hash' => $hashOlustur,
                'returnData' => $user["email"],
                'userEmail' => $user["email"],
                'userIPAddress' => GetIP(),
                'userID' => $user["client_id"],
                'proApi' => TRUE,
                'productData' => [
                    "name" => $amount . " TL Tutarında Bakiye (" . $paymentCode . ")",
                    "amount" => $amount_fee * 100,
                    "extraData" => $paymentCode,
                    "paymentChannel" => $payment_types, // 1 Mobil Ödeme, 2 Kredi Kartı,3 Banka Havale/Eft/Atm,4 Türk Telekom Ödeme (TTNET),5 Mikrocard,6 CashU
                    "commissionType" => $extra["commissionType"] // 1 seçilirse komisyonu bizden al, 2 olursa komisyonu müşteri ödesin
                ]
            );
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://api.paywant.com/gateway.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => http_build_query($postData),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            if (!$err) :
                $jsonDecode = json_decode($response, false);
                $jsonDecode->Message = str_replace("https://", "", str_replace("http://", "", $jsonDecode->Message));
                $jsonDecode->Message = "https://" . $jsonDecode->Message;
                if ($jsonDecode->Status == 100) :
                    unset($_SESSION["data"]);
                    $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
                    $insert->execute(array("c_id" => $user["client_id"], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));
                    $success = 1;
                    $successText = $languageArray["error.addfunds.online.success"];
                    $payment_url = $jsonDecode->Message;
                else :
                    //echo $response; // Dönen hatanın ne olduğunu bastır
                    $error = 1;
                    $errorText = $languageArray["error.addfunds.online.fail"];
                endif;
            else :
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"];
            endif;
        elseif ($method_id == 4) :
            // ─── Shopier REST API v1 — Dinamik Ürün Oluşturma ─────────────────
            $rawApiKey = $extra['apiKey'] ?? '';
            // apiKey alanı doğrudan Bearer Token; eski "key|||token" formatı için geriye dönük uyumluluk
            if (strpos($rawApiKey, '|||') !== false) {
                $shopier_token = explode('|||', $rawApiKey)[1] ?? null;
            } else {
                $shopier_token = $rawApiKey ?: null;
            }

            if (!$shopier_token) {
                $error = 1;
                $errorText = 'Shopier API Token sistemde tanımlı değil! Lütfen Admin Paneli > Ödeme Yöntemleri > Shopier bölümünden Bearer Token ekleyiniz.';
            } else {
                // Processing fee ekle
                $final_price = $amount_fee;
                if (isset($extra['processing_fee']) && $extra['processing_fee'] == '1') {
                    $final_price += 0.49;
                }
                $final_price = round($final_price, 2);

                $site_name     = $settings['site_name'] ?? 'Panel';
                $product_title = $site_name . ' - ' . $amount . ' TL Bakiye Yükleme (Sipariş: ' . $paymentCode . ')';
                $product_desc  = '♻️ Bakiye Yenileme (Müşteri: ' . $user['username'] . ')';

                // Ürün görseli URL'si — Shopier "media is required" zorunluluğu için
                $site_url_base = rtrim($settings['site_url'] ?? ('https://' . ($_SERVER['HTTP_HOST'] ?? 'merkezbayim.com')), '/');
                $product_image_url = $site_url_base . '/image/shopier-product.png';

                $postData = [
                    'title'         => $product_title,
                    'priceData'     => ['price' => $final_price, 'currency' => 'TRY'],
                    'type'          => 'digital',
                    'stockQuantity' => 1,
                    'inventory'     => ['tracking' => true, 'quantity' => 1],
                    'shippingPayer' => 'sellerPays',
                    'description'   => $product_desc,
                    'media'         => [
                        [
                            'type'      => 'image',
                            'placement' => 1,
                            'url'       => $product_image_url,
                        ]
                    ],
                ];

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://api.shopier.com/v1/products');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
                curl_setopt($ch, CURLOPT_TIMEOUT, 20);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Authorization: Bearer ' . $shopier_token,
                    'Content-Type: application/json',
                    'Accept: application/json',
                ]);
                $response = curl_exec($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                $responseData = json_decode($response, true);

                if ($httpCode >= 200 && $httpCode < 300 && isset($responseData['url'])) {
                    // Başarılı: ürün oluşturuldu
                    $productUrl         = $responseData['url'];
                    $created_product_id = $responseData['id'] ?? '';

                    // payment_extra = Shopier Product ID (webhook eşleştirmesi için)
                    // payment_delivery = 1 (webhook bu kaydı bekler)
                    $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip, payment_extra=:extra, payment_delivery=1");
                    $insert->execute([
                        'c_id'   => $user['client_id'],
                        'amount' => $amount,
                        'code'   => $paymentCode,
                        'method' => $method_id,
                        'mode'   => 'Otomatik',
                        'date'   => date('Y.m.d H:i:s'),
                        'ip'     => GetIP(),
                        'extra'  => $created_product_id,
                    ]);

                    $success     = 1;
                    $successText = $languageArray["error.addfunds.online.success"];
                    $payment_url = $productUrl;
                    unset($_SESSION["data"]);

                } elseif (isset($responseData['data']['productUrl'])) {
                    // Alternatif yanıt formatı
                    $productUrl         = $responseData['data']['productUrl'];
                    $created_product_id = $responseData['data']['id'] ?? '';

                    $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip, payment_extra=:extra, payment_delivery=1");
                    $insert->execute([
                        'c_id'   => $user['client_id'],
                        'amount' => $amount,
                        'code'   => $paymentCode,
                        'method' => $method_id,
                        'mode'   => 'Otomatik',
                        'date'   => date('Y.m.d H:i:s'),
                        'ip'     => GetIP(),
                        'extra'  => $created_product_id,
                    ]);

                    $success     = 1;
                    $successText = $languageArray["error.addfunds.online.success"];
                    $payment_url = $productUrl;
                    unset($_SESSION["data"]);

                } else {
                    $error   = 1;
                    $err_msg = $responseData['message'] ?? ('Shopier API Bağlantı Hatası (HTTP ' . $httpCode . ')');
                    $errorText = 'Shopier ürünü oluşturulamadı: ' . $err_msg;
                }
            }
        elseif ($method_id == 5) :
            $shoplemo = new \Shoplemo\Config();
            $shoplemo->setAPIKey($extra["apiKey"]);
            $shoplemo->setSecretKey($extra["apiSecret"]);
            $shoplemo->setServiceBaseUrl('https://payment.shoplemo.com');

            $request = new \Shoplemo\Paywith\CreditCard($shoplemo);
            $request->setUserEmail($user["email"]);
            $request->setCustomParams(json_encode(['payment_code' => $paymentCode, 'client_id' => $user["client_id"]]));

            $basket = new \Shoplemo\Model\Basket;
            $basket->setTotalPrice($amount_fee * 100);
            $item1 = new \Shoplemo\Model\BasketItem;
            $item1->setName($amount . ' TL Bakiye Ekleme');
            $item1->setPrice($amount_fee * 100);
            $item1->setType(\Shoplemo\Model\BasketItem::DIGITAL);
            $item1->setQuantity(1);
            $basket->addItem($item1);

            $request->setBasket($basket);

            $request->setRedirectUrl(base_url());

            if ($request->execute()) {
                $responseShoplemo = json_decode($request->getResponse(), true);
                $responseShoplemoUrl = $responseShoplemo["url"];

                $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
                $insert->execute(array("c_id" => $user['client_id'], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));
                $success = 1;
                $successText = $languageArray["error.addfunds.online.success"];
                $payment_url = $responseShoplemoUrl;
                unset($_SESSION["data"]);
            } else {
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"];
            }

        elseif ($method_id == 6) :
            // Create a new API wrapper instance
            $cps_api = new CoinpaymentsAPI($extra["coinpayments_private_key"], $extra["coinpayments_public_key"], 'json');

            // This would be the price for the product or service that you're selling
            $cp_amount = str_replace(',', '.', $amount_fee);

            // The currency for the amount above (original price)
            $currency1 = $settings['site_currency'];

            // Litecoin Testnet is a no value currency for testing
            // The currency the buyer will be sending equal to amount of $currency1
            $currency2 = $extra["coinpayments_currency"];

            // Enter buyer email below
            $buyer_email = $user["email"];

            // Set a custom address to send the funds to.
            // Will override the settings on the Coin Acceptance Settings page
            $address = '';

            // Enter a buyer name for later reference
            $buyer_name = 'No Name';

            // Enter additional transaction details
            $item_name = 'Add Balance';
            $item_number = $cp_amount;
            $custom = 'Express order';
            $invoice = 'addbalancetosmm001';
            $ipn_url = base_url('payment/coinpayments');

            // Make call to API to create the transaction
            try {
                $transaction_response = $cps_api->CreateComplexTransaction($cp_amount, $currency1, $currency2, $buyer_email, $address, $buyer_name, $item_name, $item_number, $invoice, $custom, $ipn_url);
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
                exit();
            }

            if ($transaction_response['error'] == 'ok') :
                unset($_SESSION["data"]);
                $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip, payment_extra=:extra");
                $insert->execute(array("c_id" => $user['client_id'], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP(), "extra" => $transaction_response['result']['txn_id']));
                $success = 1;
                $successText = $languageArray["error.addfunds.online.success"];
                $payment_url = $transaction_response['result']['checkout_url'];
            else :
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"];
            endif;

        elseif ($method_id == 9) :
            require_once(APPPATH . "ThirdParty/2checkout/2checkout-php/lib/Twocheckout.php");
            Twocheckout::privateKey($extra['private_key']);
            Twocheckout::sellerId($extra['seller_id']);

            // If you want to turn off SSL verification (Please don't do this in your production environment)
            Twocheckout::verifySSL(false);  // this is set to true by default

            // To use your sandbox account set sandbox to true
            Twocheckout::sandbox(false);

            // All methods return an Array by default or you can set the format to 'json' to get a JSON response.
            Twocheckout::format('json');

            $icid = md5(rand(1, 999999));
            $getcur = $extra['currency'];
            $lastcur = 1;
            $tc_amount = str_replace(',', '.', $amount_fee);
            $params = array(
                'sid' => $icid,
                'mode' => '2CO',
                'li_0_name' => 'Add Balance',
                'li_0_price' => number_format($tc_amount * $lastcur, 2, '.', '')
            );

            unset($_SESSION["data"]);
            $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip, payment_extra=:extra");
            $insert->execute(array("c_id" => $user['client_id'], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP(), "extra" => $icid));
            $success = 1;
            $successText = $languageArray["error.addfunds.online.success"];
            Twocheckout_Charge::form($params, 'auto');


        elseif ($method_id == 12) :
            require_once(APPPATH . "ThirdParty/paytm/encdec_paytm.php");

            $checkSum = "";
            $paramList = array();

            $icid = md5(rand(1, 999999));
            $getcur = $extra['currency'];
            $lastcur = 1;
            $ptm_amount = str_replace(',', '.', $amount_fee);

            $paramList["MID"] = $extra['merchant_mid'];
            $paramList["ORDER_ID"] = $icid;
            $paramList["CUST_ID"] = $user['client_id'];
            $paramList["EMAIL"] = $user['email'];
            $paramList["INDUSTRY_TYPE_ID"] = "Retail";
            $paramList["CHANNEL_ID"] = "WEB";
            $paramList["TXN_AMOUNT"] = number_format($ptm_amount * $lastcur, 2, '.', '');
            $paramList["WEBSITE"] = $extra['merchant_website'];
            $paramList["CALLBACK_URL"] = base_url('payment/paytm');

            $checkSum = getChecksumFromArray($paramList, $extra['merchant_key']);

            unset($_SESSION["data"]);
            $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip, payment_extra=:extra");
            $insert->execute(array("c_id" => $user['client_id'], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP(), "extra" => $icid));
            $success = 1;
            $successText = $languageArray["error.addfunds.online.success"];

            echo '<form method="post" action="https://securegw.paytm.in/theia/processTransaction" name="f1">
                    <table border="1">
                        <tbody>';
            foreach ($paramList as $name => $value) {
                echo '<input type="hidden" name="' . $name . '" value="' . $value . '">';
            }
            echo '<input type="hidden" name="CHECKSUMHASH" value="' . $checkSum . '">
                        </tbody>
                    </table>
                    <script type="text/javascript">
                        document.f1.submit();
                    </script>
                </form>';

        elseif ($method_id == 13) :


            $weepay['Auth'] = array(
                'bayiId' => $extra["bayi_id"],
                'apiKey' => $extra["api_key"],
                'secretKey' => $extra["secret_key"]
            );

            $weepay['Data'] = array(
                'paidPrice' => $amount_fee,
                'orderId' => $paymentCode,
                'locale' => "tr",
                'ipAddress' => GetIP(),
                'callBackUrl' => base_url("payment/weepay?token=" . $paymentCode),
                'outSourceId' => $paymentCode,
                'description' => "Bakiye yükleme",
                'currency' => $extra["currency"]
            );
            $weepay["Customer"] = array(
                'customerId' => $user["client_id"],
                'customerName' => $user["username"],
                'customerSurname' => $user["username"],
                'gsmNumber' => $user["telephone"],
                'email' => $user["email"],
                'identityNumber' => "11111111111",
                'city' => "Istanbul",
                'country' => 'Türkiye'
            );
            $weepay['BillingAddress'] = array(
                'contactName' => "SMMPanel",
                'address' => '123 sokak Istanbul bahçelievler',
                'city' => "Istanbul",
                'country' => 'Türkiye'
            );

            $weepay["Products"][1] = array(
                'productId' => "123123",
                'name' => 'bakiye',
                'productPrice' => $amount_fee,
                'itemType' => 'VIRTUAL'
            );

            $data = json_encode($weepay);


            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.weepay.co/Payment/PaymentCreate");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            $result = @curl_exec($ch);
            $responseWeepay = json_decode($result);
            curl_close($ch);

            if ($responseWeepay->errorCode !== 999) {
                $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
                $insert->execute(array("c_id" => $user['client_id'], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));
                unset($_SESSION["data"]);
                echo $responseWeepay->CheckoutFormData;

                if (weepayMobile()) {
                    echo '<meta name="viewport" content="width=device-width, initial-scale=1">
                        <div id="weePay-checkout-form" class="responsive"></div>';
                    die;
                } else {
                    echo '<div id="weePay-checkout-form" class="popup"></div>';
                }
                echo '<div id="weePay-checkout-form" class="popup"></div>';
            } else {
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"];
            }


        elseif ($method_id == 14) :

            $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, papara_amount=:p_amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
            $insert->execute(array("c_id" => $user['client_id'], "amount" => $amount, "p_amount" => $amount_fee, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));

            $response = base_url("payment/papara");

            $_SESSION["totoken"] = $paymentCode;

            if ($insert) :
                $success = 1;
                $successText = $languageArray["error.addfunds.online.success"];
                $payment_url = $response;
                unset($_SESSION["data"]);
            else :
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"];
            endif;

        elseif ($method_id == 15) :

            $id = $user["client_id"];
            $mail = $user["email"];

            $data = [];
            $data['apiSecret'] = $extra["apiSecret"];
            $data['hash'] = hash("sha256", $extra["appid"]. "|" .$extra["email"]. "|" .$extra["otherCode"]);
            $ch = curl_init("https://service.payizone.com/token");

$payload = json_encode( array( 
    "app_id"=> $extra["appid"], 
    "app_secret" => $extra["apiSecret"]
    ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$result = curl_exec($ch);

$result = json_decode($result);
curl_close($ch);


$authorization = "Authorization: Bearer ".$result->token;
$ch = curl_init("https://service.payizone.com/getPos");
$payload = json_encode( array( "card_number"=> $_POST['card_number'], "amount" => $amount_fee ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', $authorization));
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result);
            $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
            $insert->execute(array("c_id" => $user["client_id"], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));
            $sonid = $conn->lastInsertId();



$ch = curl_init("https://service.payizone.com/pay3D");
$payload = json_encode( array( 
    "card_holder"=> $_POST['cardname'],
"card_number" => $_POST['card_number'],
"exp_month" => $_POST['ccmonth'], 
"exp_year" => $_POST['ccyear'], 
"cvv" => $_POST['cvv'], 
'card_holder' => $_POST['name'],
"amount" => $amount_fee, 
"payment_token" => $result->payToken,
"redirect_url" => base_url("payment/payizone"),
"other_code" => $paymentCode, 
"note" => "") );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result);
if(isset($result->redirectUrl)){
echo '<script>setInterval(function(){window.location="' . $result->redirectUrl . '"},500)</script>';
exit();
}else{
                $error = 1;
                $errorText = $result->message;
};
        elseif ($method_id == 16) :


            $m_url = "https://payeer.com/merchant/";
            $m_shop = $extra["mshop"];
            $m_orderid = $paymentCode;
            $m_amount = number_format($amount_fee, 2, '.', '');
            $m_curr = $extra["currency"];
            $m_desc = base64_encode($user["email"]);
            $m_key = $extra["mkey"];
            $m_lang = $extra["lang"];

            $arHash = array(
                $m_shop,
                $m_orderid,
                $m_amount,
                $m_curr,
                $m_desc,
                $m_key
            );
            $sign = strtoupper(hash('sha256', implode(':', $arHash)));

            $code = '<form id = "form_payment_payeer" name="form_payment_payeer" method="GET" action="' . $m_url . '">
                <input type="hidden" name="m_shop" value="' . $m_shop . '">
                <input type="hidden" name="m_orderid" value="' . $m_orderid . '">
                <input type="hidden" name="m_amount" value="' . $m_amount . '">
                <input type="hidden" name="m_curr" value="' . $m_curr . '">
                <input type="hidden" name="m_desc" value="' . $m_desc . '">
                <input type="hidden" name="m_sign" value="' . $sign . '">
                <input type="hidden" name="lang" value="' . $m_lang . '">
                <input type="submit" name="m_process" value="Submit"  hidden/></form>
                
                <script type="text/javascript">
                                document.form_payment_payeer.submit();
                </script>
                ';
            echo $code;

            $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
            $insert->execute(array("c_id" => $user["client_id"], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));


            if ($insert) :
                $success = 1;
                $successText = $languageArray["error.addfunds.online.success"];
            else :
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"];
            endif;
        //payhesap
        elseif ($method_id == 17) :
            $posts = [
                "hash" => $extra["apiKey"], // Mağaza API Hash
                "order_id" => $paymentCode, // Kendi yazılımınızdaki sipariş numarası
                "callback_url" => base_url("payment/payhesap"), //İşlem durumu hakkında bilgiler ve Payhesap üzerinden ödeme sorgulama aşaması
                "amount" => $amount_fee, // İşlem tutarı
                "currency" => $extra["currency"], // İşlem tutarı
                "installment" => "1", // Taksit sayısı
                "success_url" => base_url("addfunds"), //Ödeme başarılı ise sayfa buraya yönlencek
                "fail_url" => base_url("addfunds"),  //Ödeme başarısız ise sayfa buraya yönlencek
                "name" => $user["client_id"], // Ödeme yapan müşteri bilgisi
                "email" => $user["email"], // Ödeme yapan müşteri bilgisi
                "phone" => $user["telephone"], // Ödeme yapan müşteri bilgisi
                "city" => "İstanbul", // Ödeme yapan müşteri bilgisi
                "state" => "Şişli", // Ödeme yapan müşteri bilgisi
                "address" => "adres", // Ödeme yapan müşteri bilgisi
                "ip" => GetIP()
            ];


            $encode = json_encode($posts, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

            $ch = curl_init('https://www.payhesap.com/api/iframe/pay');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $encode);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                [
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($encode)
                ]
            );
            $result = curl_exec($ch);

            $decode = json_decode($result, true);
            if (isset($decode['data']['token'])) {
                $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
                $insert->execute(array("c_id" => $user['client_id'], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));
                unset($_SESSION["data"]);
?>
                <script src="https://www.payhesap.com/iframe/iframeResizer.min.js"></script>
                <iframe src="https://payhesap.com/api/iframe/<?= $decode['data']['token']; ?>" id="payhesapiframe" frameborder="0" scrolling="yes" height="100%" width="100%" frameborder="0" style="width: 100%;"></iframe>
                <script>
                    iFrameResize({}, '#payhesapiframe');
                </script>
<?php
                exit();
                echo '<div id="weePay-checkout-form" class="popup"></div>';
            } else {
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"];
            }
        elseif ($method_id == 19) :
            $gateway = Omnipay::create('PayPal_Rest');
            $gateway->setClientId($extra["client"]);
            $gateway->setSecret($extra["secret"]);
            $gateway->setTestMode(false); //set it to 'false' when go live
            try {
                $response = $gateway->purchase(array(
                    'amount' => $amount_fee,
                    'currency' => $extra["charge"],
                    'returnUrl' => base_url("payment/paypal"),
                    'cancelUrl' => base_url("payment/paypal"),
                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    echo $response->getMessage();
                }
            } catch(Exception $e) {
                echo $e->getMessage();
            }
        elseif($method_id == 21):
           // Convert product price to cent 
           require_once(APPPATH . 'ThirdParty/stripe/init.php');
    $stripeAmount = round($amount_fee*100, 2); 
    $productName = $user["username"]." - Balance";
    $productID = rand(999,99999)."1597231";
    $currency = $extra["currency"];
    // Create new Checkout Session for the order 
    \Stripe\Stripe::setApiKey($extra["secret"]); 
    try { 
        $checkout_session = \Stripe\Checkout\Session::create([ 
            'line_items' => [
                
                [ 
              'price_data' => [ 
                    'product_data' => [ 
                        'name' => base_url(), 
                        'metadata' => [ 
                            'pro_id' => $paymentCode 
                        ],
                        'description' => base_url()
                    ], 
                    'unit_amount' => $stripeAmount, 
                    'currency' => $currency, 
                ], 
                'quantity' => 1, 
            ]], 
            'mode' => 'payment', 
            'success_url' => base_url("payment/stripe").'?session_id={CHECKOUT_SESSION_ID}', 
            'cancel_url' => base_url("addfunds"), 
        ]); 
    } catch(Exception $e) {  
        $api_error = $e->getMessage();  
    } 
     
    if(empty($api_error) && $checkout_session){ 
        $response = array( 
            'status' => 1, 
            'message' => 'Checkout Session created successfully!', 
            'sessionId' => $checkout_session->id 
        ); 
    }else{ 
        $response = array( 
            'status' => 0, 
            'error' => array( 
                'message' => 'Checkout Session creation failed! '.$api_error    
            ) 
        ); 
    } 

 
// Return response  
$insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
                $insert->execute(array("c_id" => $user['client_id'], "amount" => $amount, "code" => $response['sessionId'], "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));
 echo "
 <script src='https://js.stripe.com/v3/'></script>
 <script>
const stripe = Stripe('".$extra["publish"]."');
    stripe.redirectToCheckout({
                sessionId: '".$response['sessionId']."',
            }).then(handleResult);
</script>
 ";
        exit();
        elseif ($method_id == 18) :

            $code = '<form id="perfectm" name="perfectm" action="https://perfectmoney.is/api/step1.asp" method="post">
                <input type="hidden" name="SUGGESTED_MEMO" value="Thanks for order!">
                <input type="hidden" name="PAYMENT_ID" value="' . $paymentCode . '" />
                <input type="hidden" name="PAYMENT_AMOUNT" value="' . $amount_fee . '" />
                <input type="hidden" name="PAYEE_ACCOUNT" value="' . $extra["aid"] . '" />
                <input type="hidden" name="PAYMENT_UNITS" value="' . $extra["current"] . '" />
                <input type="hidden" name="PAYEE_NAME" value="' . $settings["site_name"] . '" />
                <input type="hidden" name="PAYMENT_URL" value="' . base_url("payment/perfectmoney?id=" . $paymentCode) . '" />
                <input type="hidden" name="PAYMENT_URL_METHOD" value="LINK" />
                <input type="hidden" name="NOPAYMENT_URL" value="' . base_url("payment/perfectmoney?id=" . $paymentCode) . '" />
                <input type="hidden" name="NOPAYMENT_URL_METHOD" value="LINK" />
                <input type="hidden" name="STATUS_URL" value="' . base_url("payment/perfectmoney?id=" . $paymentCode) . '" />
                <input type="submit" value="Submit" hidden />
                <script type="text/javascript">
                                    document.perfectm.submit();
                    </script>
                </form>';

            echo $code;


            $insert = $conn->prepare("INSERT INTO payments SET client_id=:c_id, payment_amount=:amount, payment_privatecode=:code, payment_method=:method, payment_mode=:mode, payment_create_date=:date, payment_ip=:ip ");
            $insert->execute(array("c_id" => $user["client_id"], "amount" => $amount, "code" => $paymentCode, "method" => $method_id, "mode" => "Otomatik", "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));


            if ($insert) :
                $success = 1;
                $successText = $languageArray["error.addfunds.online.success"];
            else :
                $error = 1;
                $errorText = $languageArray["error.addfunds.online.fail"];
            endif;
        endif;
    }

endif;

if (isset($payment_url)) :
    echo '<script>setInterval(function(){window.location="' . $payment_url . '"},2000)</script>';
endif;
