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
                    <li class="active"><a href="index.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i><span>Profile</span></li></a>
                    <li><a href="dashboard.php"><i class="fa fa-line-chart fa-2x" aria-hidden="true"></i><span>Dashboard</span></li></a>
                    <li><a href="tasks.php"><i class="fa fa-list fa-2x" aria-hidden="true"></i></i><span>Tasks</span></li></a>
                    <li><a href="login.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i><span>Logout</span></li></a>
                </ul>
            </div>
           
       </div>
       <div class="content-container">
           <div class="content">
               <div class="profile-info">
                   <div class="first-row">
                      <div class="first-column">
                        
                            <label for="">Password</label>
                            <input type="text">
                         
                           
                      </div>
                      <div class="second-column">
                             <label for="">Email</label>
                            <input type="text">

                      </div>
                   </div>
                   <div class="second-row">
                            <div class="first-column">
                                    <label for="">Firstname</label>
                                    <input type="text">
                            </div>
                            <div class="second-column">
                                    <label for="">Lastname</label>
                                    <input type="text">

                            </div>
                      
                   </div>
                   <div class="third-row">
                            <div class="first-column">
                                    <label for="">Phone</label>
                                    <input type="text">
                            </div>
                            <div class="second-column">
                                    <label for="">Age</label>
                                    <input type="text">

                            </div>
                      
                   </div>
                   <div class="forth-row">
                            <div class="column">
                                    <label for="">Adresse</label>
                                    <input type="text">
                            </div>
                   </div>
                    

               </div>

           </div>
    
       </div>

   </div>
   

   <script src="js/index.js"></script>
    
</body>
</html>