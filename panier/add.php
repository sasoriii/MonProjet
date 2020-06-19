<?php require('../bootstrap.php');

$productId = $_GET['product_id'];

addToCart($productId);

header('Location: /panier/cart.php');
exit;
