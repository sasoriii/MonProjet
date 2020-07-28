<?php
define('ENV', ! empty($testing) ? 'testing' : 'prod');

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
require __DIR__ . '/controllers/HomeController.php';
require __DIR__ . '/controllers/ProductController.php';
require __DIR__ . '/controllers/CartController.php';
require __DIR__ . '/controllers/ConnectionController.php';
require __DIR__ . '/controllers/FormController.php';
require __DIR__ . '/controllers/InscriptionController.php';
require __DIR__ . '/controllers/OrdersController.php';
require __DIR__ . '/controllers/OrdersByUserController.php';
require __DIR__ . '/controllers/ProfileController.php';
require __DIR__ . '/controllers/PurchaseOrderController.php';

session_start();

