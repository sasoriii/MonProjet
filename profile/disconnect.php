<?php
$testing = '';
require('../bootstrap.php');

session_destroy();

header("Location: connection.php");

exit();
