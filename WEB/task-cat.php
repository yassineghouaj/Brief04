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
            
                 <div class="action-buttons">
                     <button id="add-cat">Add<i class="fa fa-plus-circle" aria-hidden="true"></i></button>
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
                    <th>Product-count</th>
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
                         <input class="cat_name" type="text" placeholder="category name">
                        
                     </div>
                     <div class="row">
                         <input class="product_count" type="text" placeholder="this takes a 0  as its default value !">
                        
                     </div>
                     
                     <div class="row">
                     <button id="insert-cat">Add<i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                     </div>
                     
                 </div>
                 <span class="close">X</span>
            </div>
       </div>
    
      
    </div>
    <script src="js/addCateg.js"></script>
    



    
</body>
</html>