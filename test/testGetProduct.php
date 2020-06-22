<?php
require(__DIR__ . '/../bootstrap.php');

$productId = 2;

$result = getProduct($productId);

if ($result["product_id"] !== "2") {
    throw new Exception("error");
}

if ($result["product_name"] !== "Cabrinha drifter 12m2 2020") {
    throw new Exception("error");
}

if ($result["product_price"] !== "950.00") {
    throw new Exception("error");
}

if ($result["product_description"] !== "Aile pour le freeride") {
    throw new Exception("error");
}

if ($result["product_quantite"] !== "49") {
    throw new Exception("error");
}

if ($result["product_img"] !== "drifter.png") {
    throw new Exception("error");
}
