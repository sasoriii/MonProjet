<?php
require(__DIR__ . '/../bootstrap.php');

$n = 10 ;

$pseudo = getRandomPseudo($n);
$mail = getRandomMail($n). "@gmail.com";
$mdp = getRandomMDP($n);

createUser($pseudo, $mail, $mdp);

$result = getUser($pseudo, $mail, $mdp);

if ($result !== false) {
    throw new Exception("error");
}
