<?php
$cart = Cart::getCart();

$email = "testcrevvvvvvvvvvvateorder" ;

$orderId = createOrder($cart, $email);

$isOrderCreated = isOrderCreated($email);

if (!empty($isOrderCreated)){
    throw new Exception("error");
}