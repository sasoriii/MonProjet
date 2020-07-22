<?php
$testing = false;

require('../bootstrap.php');

$config = Config::getInstance();

$name = $config->get('db_name');
$username = $config->get('db_username');
$password = $config->get('db_password');

pre($name);
