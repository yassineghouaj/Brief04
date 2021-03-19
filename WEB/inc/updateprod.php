<?php

include 'config.php';


$data = json_decode(file_get_contents("php://input"));
// $store_keeper =read_login($data->email,$data->password);

function updatecat($id,$name,$price,$quantity,$des){
    global $conn;
    $res=$conn->query("UPDATE product SET prod_name='$name',price='$price',quatity='$quantity',prod_desc='$des' WHERE product_id='$id';");
    if($res){
      return true;
    }
    else{
        return false;
        } 

}

print_r(json_encode(updatecat($data->id,$data->name,$data->price,$data->qunt,$data->desc)));




?>