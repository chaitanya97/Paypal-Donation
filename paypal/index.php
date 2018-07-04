
<?php
session_start();
if(isset($_SESSION['user']))
{
echo " ";
}
else {
  header("Location:../login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
   
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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
 .login-form
    {
          background-color: #fff;
          height:300px;
              box-shadow: 8px 4px 8px rgba(0,0,0,0.1),0 6px 16px 0 rgba(0,0,0,0.1);
              


    }
.login-form h3
{
   text-align: center;
}
.form-control
{
  height:40px;
}
a
{
  text-decoration: none;
  cursor: pointer;
}
button
{
  height:45px;
}

@media (max-width: 768px) {
  .login-form
  {
    margin-left: 13px;
  }
  
}
</style>
<body>




<br><br><br><br>


 <div class ="container">
   <div class ="row">
   <br>
     <div class = "col-md-5 login-form">
        <br><br><br>
   <form class="" method="post" action="checkout.php" >
   <div class="form-group">
          
        <input type="text" class="form-control" id="product" placeholder="Enter Product" name="product" required>
      
    </div>
   
    
    <div class="form-group">
          
        <input type="text" class="form-control" id="donation" placeholder="Enter Price" name="price" required>
      
    </div>
   
      
        <button type="submit" class="btn btn-danger btn-block" name="submit">Submit</button>
        <br>
        <h4>You will redirected to paypal</h4>
  
  </form>
 
    
    
    
    
    
     



        </div>
   </div> 
 </div>      
     
</body>
</html>




