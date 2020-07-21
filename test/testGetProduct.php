<?php
$productId = 2;

$result = Product::getProduct($productId);

if ($result->id !== "2") {
    throw new Exception("error");
}

if ($result->name !== "Cabrinha drifter 12m2 2020") {
    throw new Exception("error");
}

if ($result->price !== "950.00") {
    throw new Exception("error");
}

if ($result->description !== "freeride") {
    throw new Exception("error");
}

if ($result->quantity !== "49") {
    throw new Exception("error");
}

if ($result->img !== "drifter.png") {
    throw new Exception("error");
}
