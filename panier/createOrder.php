<?php
$testing = '';
require('../bootstrap.php');

$cart = Cart::getCart();

$email = $_POST['email'];

$orderId = createOrder($cart, $email);

header("Location: ../?controller=bon_de_commande&id=$orderId") ;