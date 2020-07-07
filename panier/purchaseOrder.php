<?php
require('../bootstrap.php');

$orderId = $_GET['id'];

view('purchaseOrder_view.php', ['orderId'=>$orderId]);


