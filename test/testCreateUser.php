<?php
require(__DIR__ . '/../bootstrap.php');

$pseudo = "zhhhhhhhhhhhhhhhhhhhh";
$mail = "zhhhhhhhhhhhhhhhhhh@gmail.com";
$motdepasse = "zhhhhhhhhhhhhhhh";

//createUser($pseudo, $mail, $mdp);

$result = getUser($pseudo, $mail, $motdepasse);

if ($result !== false) {
    throw new Exception("error");
}