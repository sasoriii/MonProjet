<?php
$testing = 'testing';
require('../bootstrap.php');

$orderId = 1;
$lines = getLines($orderId);

var_dump($lines);
