<?php require('../bootstrap.php');

$productId = $_GET['product_id'];

$cart = new Cart();

$cart->add($productId);

header('Location: /panier/cart.php');
exit;
