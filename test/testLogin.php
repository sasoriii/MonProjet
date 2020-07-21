<?php
$email = "test@gmail.com";
$password = "test";

$result = login($email, $password);

if ($result !== true ) {
    throw new Exception("error");
}
