<?php
$testing = '';
require('../bootstrap.php');

$pseudo = htmlspecialchars($_POST['pseudo']);
$email = htmlspecialchars($_POST['email']);
$email2 = htmlspecialchars($_POST['email2']);
$password = sha1($_POST['password']);
$password2 = sha1($_POST['password2']);

if ( ! isset($_POST['formInscription'])){
    throw new Exception("missing form");
}

if ( ! isPseudoValid($_POST['pseudo'])){
    throw new Exception("Pseudo invalid");
}

if (empty($_POST['email'])){
    throw new Exception("email vide");
}
if (! isEmailAvailable($_POST['email'])) {
    throw new Exception("email invalid");
}

if (empty($_POST['email2'])){
    throw new Exception("email 2 vide");
}
if (! isEmailAvailable($_POST['email2'])){
    throw new Exception("email2 invalid");
}

if (($_POST['email']) != ($_POST['email2'])){
    throw new Exception("email diff de mail2");
}

if ( empty($_POST['password'])){
    throw new Exception("mdp vide");
}

if ( empty($_POST['password2'])){
    throw new Exception("mdp vide2");
}

if (($_POST['password']) != ($_POST['password2'])){
    throw new Exception("mdp diff mdp 2");
}

createUser($pseudo, $email, $password);

header("Location: ../?controller=connection");