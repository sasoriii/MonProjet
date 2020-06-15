<?php require('../bootstrap.php');

$cart = getCart();

$email = $_POST['email'];

$orderId = createOrder($cart, $email);

resetCard();

header("Location: /panier/bonCommande.php?id=$orderId") ;