<?php
require('../bootstrap.php');

$productId = $_GET['product_id'];

$product = Product::getProduct($productId);

Cart::add($product);

if (isset($_SESSION['id'])){
    header('Location: /panier/cart.php');
}
else{
    header('Location: /profile/connection.php');
}
exit;
