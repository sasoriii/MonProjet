<?php
require('../bootstrap.php');

$pdo = getConnection();
$id = $_GET['id'];
$userInfo = getProfile($id);

view('profile_view.php', ['userinfo' => $userInfo]);
