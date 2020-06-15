<?php require('../bootstrap.php');

$product = getProduct(1);

pre($product);

$product = getProduct(50, true);

var_dump($product);