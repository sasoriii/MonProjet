<?php
require('../bootstrap.php');

if ($orderId = $_GET['id']){
    $order = getOrderWithLine($orderId);

    echo json_encode($order);
}

else {
    $order = getOrdersWithLines();

    echo json_encode($order);
}


