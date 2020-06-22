<?php
require(__DIR__ . '/../bootstrap.php');

$result = getShop();
$resultZero = $result[0];
$resultOne = $result[1];
$resultTwo = $result[2];

if ($resultZero["product_id"] !== "1") {
    throw new Exception("error");
}

if ($resultZero["product_name"] !== "Cabrinha FX 10m2 2020        ") {
    throw new Exception("error");
}

if ($resultZero["product_price"] !== "900.00") {
    throw new Exception("error");
}

if ($resultZero["product_description"] !== "Aile pour le freestyle") {
    throw new Exception("error");
}

if ($resultZero["product_quantite"] !== "50") {
    throw new Exception("error");
}

if ($resultZero["product_img"] !== "fx.png") {
    throw new Exception("error");
}


if ($resultOne["product_id"] !== "2") {
    throw new Exception("error");
}

if ($resultOne["product_name"] !== "Cabrinha drifter 12m2 2020") {
    throw new Exception("error");
}

if ($resultOne["product_price"] !== "950.00") {
    throw new Exception("error");
}

if ($resultOne["product_description"] !== "Aile pour le freeride") {
    throw new Exception("error");
}

if ($resultOne["product_quantite"] !== "49") {
    throw new Exception("error");
}

if ($resultOne["product_img"] !== "drifter.png") {
    throw new Exception("error");
}

if ($resultTwo["product_id"] !== "3") {
    throw new Exception("error");
}

if ($resultTwo["product_name"] !== "Cabrinha moto 11m2 2020") {
    throw new Exception("error");
}

if ($resultTwo["product_price"] !== "850.00") {
    throw new Exception("error");
}

if ($resultTwo["product_description"] !== "Aile pour debutant") {
    throw new Exception("error");
}

if ($resultTwo["product_quantite"] !== "42") {
    throw new Exception("error");
}

if ($resultTwo["product_img"] !== "moto.png") {
    throw new Exception("error");
}
