<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo for Admin &amp; Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
   body
  {
    background-color: #ccc;
  }
    .login-form
    {
          background-color: #fff;
          height:360px;
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
</head>
<body>

<br><br><br><br><br><br><br><br>



<div class="container">    
  <div class="row">
    
    <div class="col-md-4 col-md-offset-4  col-xs-11 login-form">
  <h2 align="center">Registration form</h2><br>

  <form class="" method="post" action="registration-pro.php">
   <div class="form-group">
     
   
        <input type="text" class="form-control"  placeholder="Enter Name" name="name" required>
      
    </div>
    <div class="form-group">
     
   
        <input type="email" class="form-control"  placeholder="Enter Email ID" name="email" required>
      
    </div>
    <div class="form-group">
          
        <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd" required>
      
    </div>
   
    <div class="form-group">
          
        <input type="password" class="form-control" id="cnpwd" placeholder="Re-enter Password" name="cnpwd" required>
      
    </div>
   
   
      
        <button type="submit" class="btn btn-danger btn-block" name="submit">Register</button>
  
  </form>
    </div>
   
  </div>
</div><br>



</body>
</html>