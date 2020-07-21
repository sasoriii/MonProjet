<?php
$id = 5 ;

$result = getProfile($id);

if ($result['pseudo'] !== "test" ) {
    throw new Exception("error");
}

if ($result['email'] !== "test@gmail.com" ) {
    throw new Exception("error");
}

?>