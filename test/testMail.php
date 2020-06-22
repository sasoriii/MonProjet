<?php
require(__DIR__ . '/../bootstrap.php');

$mail= "jeremy@gmail.com";

$result = isEmailAvailable($mail);

if ($result !== false) {
    throw new Exception("error");
}

$mail= " ";

$result = isEmailAvailable($mail);

if ($result !== false) {
    throw new Exception("error");
}