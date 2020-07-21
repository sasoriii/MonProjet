<?php
$testing = '';
$_SESSION = array();

session_destroy();

header("Location: connection.php");
