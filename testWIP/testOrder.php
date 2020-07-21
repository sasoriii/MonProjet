<?php
$testing = 'testing';
require('../bootstrap.php');

addToCart(1);
addToCart(3);
addToCart(2);

$cart = getCart();
pre($cart);

$email = 'montest';

$orderId = createOrder($cart, $email);







