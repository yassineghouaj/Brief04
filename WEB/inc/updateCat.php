<?php

include 'config.php';


$data = json_decode(file_get_contents("php://input"));
// $store_keeper =read_login($data->email,$data->password);

function updatecat($id,$name){
    global $conn;
    $res=$conn->query("UPDATE category SET catg_name='$name' WHERE categ_id='$id';");
    if($res){
      return true;
    }
    else{
        return false;
        }

}

print_r(json_encode(updatecat($data->id,$data->name)));




?>
