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
                    <li><a href="index.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i><span>Profile</span></li></a>
                    <li><a href="dashboard.php"><i class="fa fa-line-chart fa-2x" aria-hidden="true"></i><span>Dashboard</span></li></a>
                    <li class="active"><a href="tasks.php"><i class="fa fa-list fa-2x" aria-hidden="true"></i><span>Tasks</span></li></a>
                    <li><a href="login.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i><span>Logout</span></li></a>
                </ul>
            </div>
           
       </div>
       <div class="content-container">
          <div class="tasks-chois">
          <div class="category">
              <div class="img-bg-cat"></div>
              <a href="task-cat.php"><div class="cat-title"><h1>Category</h1></div></a>

          </div>
          <div class="product">
               <div class="img-bg-prod"></div>
              <a href="task-prod.php"><div class="prod-title"><h1>Product</h1></div></a>  

          </div>
          
          </div>

       </div>
      
    </div>
  

    
</body>
</html>