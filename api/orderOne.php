<?php

require('../bootstrap.php');
$orderId = $_GET['id'];
$type = $_GET['type'];

$order = getOrderWithLines($orderId);



echo json_encode($order);


