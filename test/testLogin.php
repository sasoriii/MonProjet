<?php
require(__DIR__ . '/../bootstrap.php');

$email = "zkkl@gmail.com";
$password = "zkl";

$result = login($email, $password);

if ($result !== true ) {
    throw new Exception("error");
}
