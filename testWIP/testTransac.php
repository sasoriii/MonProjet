<?php
$testing = 'testing';
require(__DIR__ . '/../bootstrap.php');

try
{
    $pdo = Database::getInstance();
}

catch (Exception $e){
    die("impossible de se co ". $e->getMessage());
}

try {
    $pdo->beginTransaction();
    $pdo->exec("insert into users (name) values ('tractbbbbbbbbbbbbionn') ");
    //$pdo->exec("select * from users LOCK IN SHARE MODE;");
   //sleep(30);
    $pdo->commit();
}

catch (Exception $e){
    $pdo->rollBack();
    echo "failed". $e->getMessage();
}

