<?php require('../functions.php');
session_destroy();
session_start();
$mailconnect = htmlspecialchars($_POST['mailconnect']);
$mdpconnect = $_POST['mdpconnect'];

if(! isset($_POST['formconnexion']))
{
    throw new Exception("missing form");
}

if(empty($_POST['mailconnect']) )
{
    throw new Exception("pas de mail");
}

if(empty($_POST['mdpconnect']) )
{
    throw new Exception("pas de mdp");
}

if ( ! login($mailconnect, $mdpconnect)) {
    throw new Exception("Login ou mot de passe incorrect");
}

header("Location: profil.php?id=" . getUserId());

