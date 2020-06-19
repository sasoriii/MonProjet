<?php
require(__DIR__ . '/../bootstrap.php');

$x = 10;
$y = 15;

$sum = sum($x, $y);

if ($sum != 25) {
    throw new Exception("error");
}
