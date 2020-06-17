<?php require('../bootstrap.php');
session_destroy();
session_start();
$mailConnect = htmlspecialchars($_POST['mailConnect']);
$mdpConnect = $_POST['mdpConnect'];

if (! isset($_POST['formConnexion'])) {
    throw new Exception("missing form");
}

if (empty($_POST['mailConnect']) ) {
    throw new Exception("pas de mail");
}

if (empty($_POST['mdpConnect']) ) {
    throw new Exception("pas de mdp");
}

if ( ! login($mailConnect, $mdpConnect)) {
    throw new Exception("Login ou mot de passe incorrect");
}

header("Location: profil.php?id=" . getUserId());

