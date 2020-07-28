<?php
$testing = '';
require('../bootstrap.php');

if (isset($_SESSION['id'])){
    header("Location: ../?controller=profil&id=" . getUserId());
}
else{
    header('Location: ../?controller=connection');
}
exit;