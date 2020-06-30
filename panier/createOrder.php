<?php require('../bootstrap.php');

$cart = getCart();
pre($cart);
$email = $_POST['email'];

$orderId = createOrder($cart, $email);

resetCard();

header("Location: /panier/purchaseOrder.php?id=$orderId") ;