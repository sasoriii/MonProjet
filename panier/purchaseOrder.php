<?php
$testing = '';
require('../bootstrap.php');
$pdo = Database::getInstance();
$orderId = $_GET['id'];

view('purchaseOrder_view.php', ['orderId'=>$orderId]);


