<?php session_start(); ?>
<?php
//Get database credentials
require 'connect.php';



$user     =   $_POST['user']; 
$password =   $_POST['pwd']; 

$sql="SELECT * FROM admin WHERE user ='$user' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


if($count == 1){

$row = mysql_fetch_array($result);

$_SESSION['admin']= $_POST['user'] ;

header("location:index.php");
}
else {

header("location:login-invalid.php?login==failure");
}

?>