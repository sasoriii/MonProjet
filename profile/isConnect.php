<?php
$testing = '';
require('../bootstrap.php');

if (isset($_SESSION['id'])){
    header("Location: ../profile/profil.php?id=" . getUserId());
}
else{
    header('Location: ../profile/connection.php');
}
exit;