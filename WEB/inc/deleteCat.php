<?php

include 'config.php';



$id_delete = json_decode(file_get_contents("php://input"));

function delete($id){
    global $conn;
    $res=$conn->query("DELETE FROM  category WHERE categ_id='$id';");
    if($res){
      return true;
    }else{
        return false;
        }
};

print_r(json_encode(delete($id_delete->id)));


?>
