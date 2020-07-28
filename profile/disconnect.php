<?php
$testing = '';
require('../bootstrap.php');

session_destroy();

header("Location: ../?controller=connection");

exit();
