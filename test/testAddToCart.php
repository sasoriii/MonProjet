<?php
require(__DIR__ . '/../bootstrap.php');

addToCart(1);
addToCart(3);
addToCart(1);
addToCart(50);

pre($_SESSION);
