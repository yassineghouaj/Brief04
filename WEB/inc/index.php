<?php

include 'config.php';

include 'read.php';
session_start();


$array = array("pass"=>$_SESSION["pass"],
"email"=>$_SESSION["email"],
"first"=>$_SESSION["first"],
"last"=>$_SESSION["last"],
"phone"=>$_SESSION["phone"],
"age"=>$_SESSION["age"],
"adresse"=>$_SESSION["adresse"]);

print_r(json_encode($array));




?>
