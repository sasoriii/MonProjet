<?php
$config = Config::getInstance();

$test_key = $config->get('test_key');

if ($test_key != 'toto'){
    throw new \Exception("test error - incorrect name");
}

