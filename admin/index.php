<?php
session_start();
if(isset($_SESSION['admin']))
echo "";
else
header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo for Admin &amp; Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel ="stylesheet" href ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
 
  .navbar {
  background-color: #2c3e50;
}
.navbar .navbar-brand {
  color:white;
}
.navbar .navbar-brand:hover,
.navbar .navbar-brand:focus {
  color: white;
}

.navbar .navbar-nav .nav-link:not(.disabled):hover,
.navbar .navbar-nav .nav-link:not(.disabled):focus {
  color: white;
}
.navbar .navbar-nav .dropdown-menu {
  background-color: #2c3e50;
  border-color: #2ecc71;
}
.navbar .navbar-nav .dropdown-menu .dropdown-item {
  color:white;
}
.navbar .navbar-nav .dropdown-menu .dropdown-item:hover,
.navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
.navbar .navbar-nav .dropdown-menu .dropdown-item.active {
  color: #ecdbff;
  background-color: #2ecc71;
}
.navbar .navbar-nav .dropdown-menu  {
  border-top-color: #2ecc71;
}
.navbar .navbar-nav .nav-item.active .nav-link,
.navbar .navbar-nav .nav-item.active .nav-link:hover,
.navbar .navbar-nav .nav-item.active .nav-link:focus,
.navbar .navbar-nav .nav-item.show .nav-link,
.navbar .navbar-nav .nav-item.show .nav-link:hover,
.navbar .navbar-nav .nav-item.show .nav-link:focus {
  color:white;
  background-color: #2ecc71;
 
}

.navbar .navbar-nav .nav-item .nav-link:hover,
.navbar .navbar-nav .nav-item .nav-link:focus 
{
  color: white;
  background-color: #2ecc71;
}
.navbar .navbar-nav .nav-item .nav-link
{
  color: white;
  font-size: 12px;
  letter-spacing: 1px;
  font-family: sans-serif;;
}

.navbar-toggle
  {
    
    
    border:2px solid #2ecc71;
    box-shadow: 5px 3px -1px #ccc;
      }

  
  .icon-bar
  {
    background-color:white;
  }
}
.navbar .navbar-collapse,
.navbar .navbar-form {
  border:0;
}
.navbar .navbar-link {
  color: #ecf0f1;
}
.navbar .navbar-link:hover {
  color: #ecdbff;
}
.navbarbtn
{
 font-size: 12px;
 font-weight:bold;
 font-family: sans-serif;
 letter-spacing: 1px;
 text-align: center; 
 border-radius:1px;
 color: white;
 border:2px solid white;
}
.navbarbtn:hover
{
  background-color: #2ecc71;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
  color: #ecf0f1;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
  color: #ecdbff;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
  color: #ecdbff;
  background-color: #2ecc71;
}
@media (max-width: 575px) {
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #ecf0f1;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #ecdbff;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #ecdbff;
    background-color: #2ecc71;
  }
}

@media (max-width: 767px) {
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #ecf0f1;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #ecdbff;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #ecdbff;
    background-color: #2ecc71;
  }
}

@media (max-width: 991px) {
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #ecf0f1;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #ecdbff;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #ecdbff;
    background-color: #2ecc71;
  }
}

@media (max-width: 1199px) {
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #ecf0f1;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #ecdbff;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #ecdbff;
    background-color: #2ecc71;
  }
}
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    
    .footer
{
  position: fixed;
  bottom: 0;
  background-color: #2980b9;
  width: 100%;
  color: white;
  font-size: 15px;
}
  </style>
</head>
<body>



 <div class="container-fluid ">
    <nav class="navbar sticky-top navbar-fixed-top">
  
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" style="color:white;" href="index.php"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
  
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
  
        </div>
  
      
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
          <ul class="nav navbar-nav navbar-right ">
            <li class=" nav-item">
  
  
              <a href="index.php" class="nav-link active">
                     <i class="fa fa-fw fa-dashboard"></i>
                Dashboard </a>
            </li>
             <li class=" nav-item">
  
  
              <a href="users.php" class="nav-link active">
                     <i class=""></i>
                Users </a>
            </li>
        
          
        
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
              Logout</a>
            </li>
         
          </ul>
  
  
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>


<br><br><br><br>
<div class="container">    
  <div class="row">
    <div class="col-sm-2">
      
    </div>
    <div class="col-sm-8" align="center"> 
       <h1>Welcome to Admin Home Page</h1>
    </div>
    <div class="col-sm-2"> 
      
    </div>
  </div>
</div><br>



</body>
</html>
