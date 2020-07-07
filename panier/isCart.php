<?php
require('../bootstrap.php');

if (isset($_SESSION['id'])){
    header('Location: /panier/cart.php');
}
else{
    header('Location: /shop/product.php');
}
exit;
