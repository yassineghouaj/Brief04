<?php

include 'config.php';

// include 'read.php';
// session_start();

$pi = json_decode(file_get_contents("php://input"));

function add_product($name,$cat_id,$price,$qunt,$desc){
    global $conn;
    $query = "INSERT INTO product (prod_name, categ_id, price, quatity, prod_desc) VALUES ('$name', $cat_id, $price, $qunt, '$desc');";
    $res=$conn->query($query);
    $query2= "UPDATE category SET product_count = product_count+1 WHERE categ_id =$cat_id;";
    $res=$conn->query($query2);
    if($res){
      return true;
    }else{
        return false;
    }
};



print_r(json_encode(add_product($pi->name,$pi->category,$pi->price,$pi->quant,$pi->desc)));

