<?php
require(__DIR__ . '/../bootstrap.php');

$pseudo = "";

$result = isPseudoValid($pseudo);

if ($result !== false) {
    throw new Exception("error");
}

$pseudo = "toto";

$result = isPseudoValid($pseudo);

if ($result !== true) {
    throw new Exception("error");
}

$pseudo = "totototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototo";

$result = isPseudoValid($pseudo);

if ($result !== false) {
    throw new Exception("error");
}

