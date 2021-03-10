<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"  rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <title>HardComp</title>
</head>
<body>
   <div class="main-container">
       <div class="side-bar">
           <div class="profile">
                <img src="img/bussiness-man.svg" alt="user-profile-img">
                <h3>StoreKeeper</h3>
           </div>
            <div class="side-menu">
                <ul>
                    <li ><a href="index.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i><span>Profile</span></li></a>
                    <li><a href="dashboard.php"><i class="fa fa-line-chart fa-2x" aria-hidden="true"></i><span>Dashboard</span></li></a>
                    <li class="active"><a href="tasks.php"><i class="fa fa-tasks fa-2x" aria-hidden="true"></i><span>Tasks</span></li></a>
                    <li><a href="#"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i><span>Logout</span></li></a>
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
                     <button>Add<i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                 </div>
                 <div class="search-input1" action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
               
               </div>
               <div class="table1">
               <table>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Price</th> 
                    <th>Action</th> 
                    </tr>
                    <tr>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td><i class="fa fa-trash-o delete" aria-hidden="true"></i><i class="fa fa-pencil edi" aria-hidden="true"></i></td>
                    </tr>
                  
                
                   
                    
                 </table>
               </div>
           
           </div>

       </div>
      
    </div>


    
</body>
</html>