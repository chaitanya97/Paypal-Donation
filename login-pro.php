<?php session_start(); ?>
<?php
//Get database credentials
require 'connect.php';

if(isset($_POST['submit']))
{
// username and password sent from form 
$usermail=$_POST['user']; 
$password=$_POST['pwd']; 

$sql="SELECT * FROM registration WHERE email='$usermail' and password='$password'";
$result=mysql_query($sql);


if(mysql_num_rows($result) > 0){

$row = mysql_fetch_array($result);

$_SESSION['user']= $_POST['user'] ;

header("location:index.php");
}
else {

header("location:login-invalid.php");
}
}

?>