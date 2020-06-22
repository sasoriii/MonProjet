<?php
require(__DIR__ . '/../bootstrap.php');

$id = 27 ;

$result = getProfile($id);
pre($result["pseudo"]);
if ($result['pseudo'] !== "z" ) {
    throw new Exception("error");
}

if ($result['motdepasse'] !== "z" ) {
    throw new Exception("error");
}
if ($result['mail'] !== "z@gmail.com" ) {
    throw new Exception("error");
}
