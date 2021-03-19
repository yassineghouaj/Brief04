<?php

include 'config.php';


// function read_keeper($id) {
//         global $conn;
//         $result= $conn->query("SELECT * FROM storkeeper where keeper_id='$id'");
//         $row = mysqli_fetch_all($result, MYSQLI_ASSOC);      
//         return $row;    
//   }



function read_login($email,$pass){
    global $conn;
    
    $result= $conn->query("SELECT * FROM storkeeper WHERE email='$email'");
    $count = mysqli_num_rows($result); 
    
    if($count == 1){

            $result2= $conn->query("SELECT * FROM storkeeper WHERE email='$email'");
            $row = mysqli_fetch_assoc($result2);
           
            
            if(password_verify($pass,$row["pas"])){

      
                $_SESSION["pass"]="*******************";
                $_SESSION["email"]=$row["email"];
                $_SESSION["first"]=$row["first_name"];
                $_SESSION["last"]=$row["last_name"];
                $_SESSION["phone"]=$row["phone"];
                $_SESSION["age"]=$row["age"];
                $_SESSION["adresse"]=$row["adresse"];
                return true;


             }else{
                 return  false;
             }    
          }    
      }

function read_categ(){
    global $conn;
    $result= $conn->query("SELECT * FROM category");
    $data=array();
    while($row = mysqli_fetch_object($result)){
          $data[]=$row;

    }
    return $data;
}


function get_cat_name(){
    global $conn;
    $result= $conn->query("SELECT categ_id,catg_name FROM category");
    $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $row;

}

function read_product(){
    global $conn;
    $result= $conn->query("SELECT * FROM `product` JOIN category ON product.categ_id = category.categ_id");
    
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $row;

}

        
?>