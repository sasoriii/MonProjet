<?php require('../bootstrap.php');

$product = getProduct(1);

if ($product['product_name'] != "Cabrinha FX 10m2 2020") {
    throw new \Exception("test error - incorrect name");
}
