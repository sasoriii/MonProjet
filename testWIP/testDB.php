<?php
$pdo = Database::getInstance();

foreach ($pdo->query('SELECT id, pseudo FROM `user`') as $membre)
{
    echo '<pre>', print_r($membre) ,'</pre>';
}
