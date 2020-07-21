<?php
require('../bootstrap.php');


if (!empty($_GET['id'])){
    $orderId = $_GET['id'];
    $orders = Order::getOrder($orderId);

    if (empty($orders)){
        throw new Exception("error");
    }
    $list = [];

    $list[] = $orders->toArray();

    echo json_encode($list, JSON_PRETTY_PRINT);
}

else {
    $orders = Order::getOrders();

    $list = [];

    foreach ($orders as $order) {
        $list[] = $order->toArray();
    }


    echo json_encode($list, JSON_PRETTY_PRINT);
}


