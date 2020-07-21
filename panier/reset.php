<?php
$testing = '';
require('../bootstrap.php');

session_destroy();

header('Location:'.$_SERVER['HTTP_REFERER']);
exit;
