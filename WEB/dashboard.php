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
                <h3 id="sise_name">StoreKeeper</h3>
           </div>
            <div class="side-menu">
                <ul>
                    <li ><a href="index.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i><span>Profile</span></li></a>
                    <li class="active"><a href="dashboard.php"><i class="fa fa-line-chart fa-2x" aria-hidden="true"></i><span>Dashboard</span></li></a>
                    <li><a href="tasks.php"><i class="fa fa-list fa-2x" aria-hidden="true"></i><span>Tasks</span></li></a>
                    <li><a href="login.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i><span>Logout</span></li></a>
                </ul>
            </div>
           
       </div>

       <div class="content-container">
            <div class="dashboard-content">
                <div class="card">
                   <h1>30</h1>
                   <h4>Graphic cards</h4>
                </div>
                

            </div>

            <div class="table-dashboard">
                <div class="search">

                    <select class=" cat-name">
                        <option value="0">Select categorie:</option>
                    </select>
                    <div class="search-input" action="">
                        <input type="text" placeholder="Search.." name="search">
                       
                    </div>

                </div>
                <div class="table-product">
                     <table>
 
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        
                        </tr>

                       
                        
                        </tr>
                                        
                     </table>
                </div>

            </div>
       </div>


      
      
    </div>

   
    <script src="js/dashboard.js"></script>
    
</body>
</html>