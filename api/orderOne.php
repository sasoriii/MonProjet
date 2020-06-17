<?php
require('../bootstrap.php');
$orderId = $_GET['id'];

$order = getOrderWithLine($orderId);

echo json_encode($order);
