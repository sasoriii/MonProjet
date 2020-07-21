<?php
$testing = 'testing';
require(__DIR__ . '/bootstrap.php');

$pdo = Database::getInstance();

$files = array_diff(scandir(__DIR__ . '/test/'), array('..', '.'));

$report = [];
$report = new Report();

foreach ($files as $file) {

    try {
        $pdo->beginTransaction();
        require(__DIR__ . '/test/'.$file);
        $pdo->commit();
    } catch (Exception $e){
        $pdo->rollBack();
        $report->add(['file'=>$file,'error'=>$e]);
        $report->print($report);
    }
}
?>