<?php require('../bootstrap.php');

$productId = $_GET['product_id'];



$product = Product::getProduct($productId);

Cart::add($product);

header('Location: /panier/cart.php');
exit;
