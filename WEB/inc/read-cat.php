<?php

include 'config.php';

include 'read.php';
// session_start();

$product_insert = json_decode(file_get_contents("php://input"));




print_r(json_encode(get_cat_name()));

?>