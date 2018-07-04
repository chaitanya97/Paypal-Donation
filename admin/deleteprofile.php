<?php
 session_start();
 require 'connect.php';
 $sessionid = $_POST['delete'];
 //echo $sessionid;
 $filename = "images/profile".$sessionid."*";
 //print_r($filename);
 $fileinfo = glob($filename);

$fileext = explode("." , $fileinfo[0]);
$fileactualext = $fileext[2];
print_r($fileext);
$file = "images/profile".$sessionid.".".$fileactualext;
 if(!unlink($file))
   {
       echo "error";
   }
   else {
     echo "success";
   }

//print_r($filetext);
 //print_r($fileinfo);



 $sql = "UPDATE profil SET statu = 0 where useremail = '$sessionid' " ;
 $my = "UPDATE profil SET post = NULL where useremail = '$sessionid' ";
 mysql_query($sql);
 mysql_query($my);
  header("Location:users.php?delete==success");

?>