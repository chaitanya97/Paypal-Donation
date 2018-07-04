<?php
session_start();
if(isset($_SESSION['user']))
{
echo " ";
}
else {
  header("Location:login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<style>
  .navbar {
  background-color:#34495e;

}



.navbar .navbar-nav .nav-link:not(.disabled):hover,
.navbar .navbar-nav .nav-link:not(.disabled):focus {
  color: white;
}



.navbar .navbar-nav .nav-item.active .nav-link,
.navbar .navbar-nav .nav-item.active .nav-link:hover,
.navbar .navbar-nav .nav-item.active .nav-link:focus,
.navbar .navbar-nav .nav-item.show .nav-link,
.navbar .navbar-nav .nav-item.show .nav-link:hover,
.navbar .navbar-nav .nav-item.show .nav-link:focus {
  color:white;
background-color:#4C4A48; 

 
}

.navbar .navbar-nav .nav-item .nav-link:hover,
.navbar .navbar-nav .nav-item .nav-link:focus 
{
  color: white;
background-color:#4C4A48; 

}
.navbar .navbar-nav .nav-item .nav-link
{
  color: white;
  font-size: 14px;
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
.fa
{
  color: #8e44ad;
}
.glyphicon
{
  color: #8e44ad;
}
.main-color
{

  color: white;
  background-color:#2980b9 !important;
  border-color: #c0392b !important;
}
 .panel-group
 {
      
   box-shadow: 8px 4px 8px rgba(0,0,0,0.1),0 6px 16px 0 rgba(0,0,0,0.1);
 }
.thumbnail
{  


   box-shadow: 8px 4px 8px rgba(0,0,0,0.1),0 6px 16px 0 rgba(0,0,0,0.1);
       border:none;
 
}
.description
{
    padding-top:15px;
    padding-left:15px;
    box-shadow: 8px 4px 8px rgba(0,0,0,0.1),0 6px 16px 0 rgba(0,0,0,0.1);
    height:50px;
}
</style>
<body>


<div class="container-fluid header">
        <nav class="navbar sticky-top navbar-fixed-top">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" style="color:white;" href="index.php"></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       
        <span class="icon-bar" ></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>o
   
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav navbar-right ">
        <li class=" nav-item">
      

        <a href="index.php" class="nav-link active">  <i class="fa fa-fw fa-dashboard"></i>
DASHBOARD </a></li>
     <li class="nav-item"><a href="paypal/index.php" class="nav-link" >  <i class="fa fa-sign-out" aria-hidden="true"></i>Paypal</a></li>
      
           <li class="nav-item"><a href="logout.php" class="nav-link" >  <i class="fa fa-sign-out" aria-hidden="true"></i>
LOGOUT</a></li>
      </ul>
     
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav></div>

<br><br><br><br>


 <div class ="container">
      <div class ="row">
        <div class ="col-md-5 col-md-offset-3">

       <form method="POST" action="upload.php" enctype="multipart/form-data">
        <textarea type ="text" name ="post" class ="form-control" placeholder ="write something here" height ="50"></textarea>
  <input type="file" name="file">
 
  <button type="submit" name="submit" class="btn btn-danger">Upload</button>
</form>

   
                                                            </div>
    </div>
    </div>
  <?php 
//Get database credentials
require 'connect.php';
   
   if(isset($_SESSION['user'])) 
    { 
      $usermail=$_SESSION['user']; 

    } 
    else
      {
            $usermail=""; 

       }
   
   $sql="SELECT * FROM registration WHERE email='$usermail'";
     $result=mysql_query($sql);
     $count=mysql_num_rows($result);
     // If result matched $myusername and $mypassword, table row must be 1 row

     if($count  ==  1)
     {
   
           while ($row = mysql_fetch_assoc($result))
             {
                  $sqlimg = "SELECT * from profil where useremail = '$usermail' ";
                  $resultimg = mysql_query($sqlimg);
                   $rowimg = mysql_fetch_assoc($resultimg);
                      
          
          
                 

   
      
  ?>
      <div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
          <?php
   echo "<div class ='thumbnail'>";

               if($rowimg['statu'] == 0 )
               {
                   echo "<img src = 'admin/images/profiledefaultimg.png' width = '450' height = '450'>";
                   
               }
               if($rowimg['statu'] == 1)
               {
              
 echo "<img src = 'admin/images/profile".$usermail. ".jpg?'".mt_rand()." width= '450' height = '450'>";
               }
              
echo "<div class = 'description'>";
  
      echo $rowimg['post'];

      echo "</div>";
      echo "</div>";

  
  
              }


              } 
          
     


    else
    {
        echo "";
    }

      ?>


      </div>
      </div>
      </div>

     
</body>
</html>




R8VV8VZQM43H6