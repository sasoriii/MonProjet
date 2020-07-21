<?php
$testing = '';
require('../bootstrap.php');

//session_start();

$emailConnect = htmlspecialchars($_POST['emailConnect']);
$passwordConnect = $_POST['passwordConnect'];

if (! isset($_POST['formConnexion'])) {
    throw new Exception("missing form");
}

if (empty($_POST['emailConnect']) ) {
    throw new Exception("pas de mail");
}

if (empty($_POST['passwordConnect']) ) {
    throw new Exception("pas de mdp");
}

if ( ! login($emailConnect, $passwordConnect)) {
    throw new Exception("Login ou mot de passe incorrect");
}

header("Location: profil.php?id=" . getUserId());
exit();
