<?php
$testing = 'testing';
require(__DIR__ . '/../bootstrap.php');

try
{

    $pdo = new PDO('mysql:host=localhost;dbname=holywind_db_test;charset=utf8', 'holywindtest', 'holywindmdp');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "connect";
}

catch (Exception $e){
    die("impossible de se co ". $e->getMessage());
}

try {
    $pdo->beginTransaction();
    $pdo->exec("insert into users (name) values ('transgggggggactionn')");
    //$pdo->exec("select * from users");
}

catch (Exception $e){
    $pdo->rollBack();
    echo "failed". $e->getMessage();
}

