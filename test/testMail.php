<?php
$mail= "test@gmail.com";

$result = isEmailAvailable($mail);

if ($result !== false) {
    throw new Exception("error");
}

$mail= " ";

$result = isEmailAvailable($mail);

if ($result !== true) {
    throw new Exception("error");
}
