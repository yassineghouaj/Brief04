<?php

include 'config.php';



$id_delete = json_decode(file_get_contents("php://input"));

function delete($id,$cat_id){
    global $conn;
    $res=$conn->query("DELETE FROM  product WHERE product_id='$id';");
    $query2= "UPDATE category SET product_count = product_count-1 WHERE categ_id ='$cat_id';";
    $res=$conn->query($query2);
   
    if($res){
      return true;
    }else{
        return false;
        }
};

print_r(json_encode(delete($id_delete->id_value,$id_delete->cat_id)));


?>
