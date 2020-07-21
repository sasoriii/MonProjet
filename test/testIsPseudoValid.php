<?php
$pseudo = "";

$result = isPseudoValid($pseudo);


if ($result !== false) {
    throw new Exception("error");
}

$pseudo = "aa";

$result = isPseudoValid($pseudo);

if ($result !== true) {
    throw new Exception("error");
}

$pseudo = "totototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototototo";

$result = isPseudoValid($pseudo);

if ($result !== false) {
    throw new Exception("error");
}
