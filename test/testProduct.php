<?php

$product = Product::getProduct(1);

if ($product->name != "Cabrinha FX 10m2 2020") {
    throw new \Exception("test error - incorrect name");
}
