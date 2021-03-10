<?php

include 'config.php';

include 'read.php';
session_start();

$data = json_decode(file_get_contents("php://input"));
$store_keeper =read_login($data->email,$data->password);

print_r(json_encode($store_keeper));




?>
