<?php
require('bootstrap.php');

// http://monprojet.local/index.php?controller=cart
// http://monprojet.local/index.php -> home

if (empty($_REQUEST['controller'])) {
    $controllerName = 'home';
} else {
    $controllerName = $_REQUEST['controller'];
}


$mapping = [
    'home' => 'HomeController',
    'panier' => 'CartController',
    'produit' => 'ProductController',
    'connection' => 'ConnectionController',
    'formulaire' => 'FormController',
    'inscription' => 'InscriptionController',
    'commandes' => 'OrdersController',
    'commandes_par_utilisateur' => 'OrdersByUserController',
    'profil' => 'ProfileController',
    'bon_de_commande' => 'PurchaseOrderController'
];
$controllerClassName = $mapping[$controllerName];

$controller = new $controllerClassName();
$controller->index();
