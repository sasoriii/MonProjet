<?php
$testing = '';
require('../bootstrap.php');

$cart = Cart::getCart();

$email = $_POST['email'];

$orderId = createOrder($cart, $email);

header("Location: /panier/purchaseOrder.php?id=$orderId") ;