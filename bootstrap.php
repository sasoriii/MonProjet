<?php
define('ENV', $testing ? 'testing' : 'prod');

require __DIR__ . '/vendor/autoload.php';
require 'functions.php';
require __DIR__ . '/model/Order.php';
require __DIR__ . '/model/OrderLine.php';
require __DIR__ . '/model/Product.php';
require __DIR__ . '/model/Cart.php';
require __DIR__ . '/model/CartLine.php';
require __DIR__ . '/src/Database.php';
require __DIR__ . '/model/Report.php';
require __DIR__ . '/src/Config.php';

session_start();

