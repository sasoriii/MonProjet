<?php
$cart = Cart::getInstance();

$productId = 2;

$product = Product::getProduct($productId);

$cart->add($product);

if (!isset($_SESSION['cart']['2'])){
    throw new Exception("error");
}


