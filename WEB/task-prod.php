<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"  rel="stylesheet"  type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>HardComp</title>
</head>
<body>
   <div class="main-container">
       <div class="side-bar">
           <div class="profile">
                <img src="img/bussiness-man.svg" alt="user-profile-img">
                <h3 id="sise_name">StoreKeeper</h3>
           </div>
            <div class="side-menu">
                <ul>
                    <li ><a href="index.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i><span>Profile</span></li></a>
                    <li><a href="dashboard.php"><i class="fa fa-line-chart fa-2x" aria-hidden="true"></i><span>Dashboard</span></li></a>
                    <li class="active"><a href="tasks.php"><i class="fa fa-list fa-2x" aria-hidden="true"></i><span>Tasks</span></li></a>
                    <li><a href="login.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i><span>Logout</span></li></a>
                </ul>
            </div>
           
       </div>
       <div class="content-container">
           <div class="categ-edit">
               <div class="cat-actions">
                 <!-- <div class="actions-title">
                     <h1>Manage Product</h1>
                 </div> -->
                 <div class="action-buttons">
                     <button id="add-product">Add<i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                 </div>
                 <div class="search-input1" action="">
                        <input type="text" placeholder="Search.." name="search">
                       
                    </div>
               
               </div>
               <div class="table1">
               <table>
                   <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th> 
                    <th>Action</th> 
                    </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    
                  
                
                    
                 </table>
               </div>
           
           </div>

       </div>
       <div class="pop-up">
            <div class="overlew"></div>
            <div class="main-frame">
                 <div class="product-inputs">
                     <div class="row">
                         <input class="product-name" type="text" placeholder="product name">
                        <select name="" class="cat-name">
                            <option value="0">Select categorie:</option>
                        </select>
                     </div>
                     <div class="row">
                         <input  class="price" type="text" placeholder="price">
                         <input class="quantity" type="text" placeholder="quantity">
                     </div>
                     <div class="row">
                         <textarea class="description" placeholder="description"></textarea>
                     </div>
                     <div class="row">
                     <button id="insert-product">Add<i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                     </div>
                     
                 </div>
                 <span class="close">X</span>
            </div>
       </div>
      
    
  
    </div>

    <script src="js/addProduct.js"></script>
   

    
</body>
</html>