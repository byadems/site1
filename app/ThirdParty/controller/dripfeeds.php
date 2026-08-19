<?php

$title .= $languageArray["dripfeed.title"];
$orderModel = model('orders');


    $status_list = ["all", "active", "completed", "canceled"];
    $search_statu = route(2);
    if (!route(2)):
        $route[1] = "all";
    endif;
    if (!in_array($search_statu, $status_list)):
        $route[1] = "all";
    endif;
    if (route(3)):
        $page = route(3);
    else:
        $page = 1;
    endif;
    if (route(2) != "all"):
        $search = "&& dripfeed_status='" . route(2) . "'";
        
    $orderModel->where('dripfeed_status',route(2) );
    else:
        $search = "";
    endif;
if (!empty($_GET["search"])):
    $ss = htmlspecialchars($_GET["search"]);
    $search.= " && ( order_url LIKE '%" . $ss . "%' || order_id LIKE '%" . $ss . "%' ) ";
    
    $orderModel->groupStart()->like('order_url', $ss)->orLike('order_id',$ss)->groupEnd();
endif;
$c_id = $user["client_id"];
$to = 25;
$count = $orderModel->where('client_id', $c_id)->where('dripfeed', 2)->where('subscriptions_type', 1)->countAllResults();
    if (!route(2)):
        $route[1] = "all";
    endif;
    if (!in_array($search_statu, $status_list)):
        $route[1] = "all";
    endif;
    if (route(3)):
        $page = route(3);
    else:
        $page = 1;
    endif;
    if (route(2) != "all"):
        $search = "&& dripfeed_status='" . route(2) . "'";
        
    $orderModel->where('dripfeed_status',route(2) );
    else:
        $search = "";
    endif;
if (!empty($_GET["search"])):
    $ss = htmlspecialchars($_GET["search"]);
    $search.= " && ( order_url LIKE '%" . $ss . "%' || order_id LIKE '%" . $ss . "%' ) ";
    
    $orderModel->groupStart()->like('order_url', $ss)->orLike('order_id',$ss)->groupEnd();
endif;
    $pageCount = ceil($count / $to);
    if ($page > $pageCount):
        $page = 1;
    endif;
    $where = ($page * $to) - $to;
    $paginationArr = ["count" => $pageCount, "current" => $page, "next" => $page + 1, "previous" => $page - 1];

$orders = $orderModel
    ->select('services.*,orders.*')
    ->join('services','services.service_id = orders.service_id')
    ->where('orders.client_id', $user["client_id"])->where('orders.dripfeed', 2)->where('orders.subscriptions_type', 1)->orderBy('orders.order_id', 'DESC')->findAll($to, $where);

    $ordersList = [];
    foreach ($orders as $order) {
        $o["id"] = $order["order_id"];
        $o["date"] = $order["order_create"];
        $o["runs"] = $order["dripfeed_runs"];
        $o["link"] = $order["order_url"];
        $o["total_charges"] = $order["dripfeed_totalcharges"];
        $o["delivery"] = $order["dripfeed_delivery"];
        $o["total_quantity"] = $order["dripfeed_totalquantity"];
        $o["service"] = $order["service_name"];
        $o["quantity"] = $order["order_quantity"];
        $o["status"] = $order["dripfeed_status"];
        $o["interval"] = $order["dripfeed_interval"];
        array_push($ordersList, $o);
    }
    