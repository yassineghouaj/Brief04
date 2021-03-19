<?php

include 'config.php';

// include 'read.php';
// session_start();

$catg_insert = json_decode(file_get_contents("php://input"));

function add_cat($cat_name,$product_count){
    global $conn;
    $res=$conn->query("INSERT INTO category(catg_name,product_count) VALUES ('$cat_name','$product_count');");
    if($res){
      return true;
    }else{
        return false;
        }
};

print_r(json_encode(add_cat($catg_insert->name,$catg_insert->count)));


?>
