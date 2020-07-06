<?php require('../bootstrap.php');

$cart = Cart::getCart();
pre($cart);
$email = $_POST['email'];

$orderId = createOrder($cart, $email);



header("Location: /panier/purchaseOrder.php?id=$orderId") ;