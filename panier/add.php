<?php
require('../bootstrap.php');

$cart = Cart::getInstance();

$productId = $_GET['product_id'];

$product = Product::getProduct($productId);

$cart->add($product);

if (isset($_SESSION['id'])){
    header('Location: /panier/cart.php');
}
else{
    header('Location: /profile/connection.php');
}
exit;
