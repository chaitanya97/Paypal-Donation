<?php
session_start();
include_once 'connect.php';
$usermail = $_SESSION['user'];
$post = $_POST['post'];
if(isset($_POST['submit']))
{
  $file = $_FILES['file'];

  $filename = $_FILES['file']['name'];
  $fileTmoName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  $fileExt = explode('.', $filename);
  $fileActExt = strtolower(end($fileExt));

  $allowed = array('jpg','jpeg','png');

  if(in_array($fileActExt,$allowed))
  {
           if($fileError  == 0)
           {
                   if($fileSize <  10000000)
                   {
                     
                                    $fileNameNew = "profile".$usermail.".".$fileActExt;
                        $fileDestination = 'admin/images/'.$fileNameNew;
                        move_uploaded_file($fileTmoName, $fileDestination);
                        $sql =   "UPDATE profil set statu  = 1 where useremail = '$usermail' ";
                        $qwert = "UPDATE profil set post = '$post' where useremail = '$usermail' ";
                        $result = mysql_query($sql);
                        $result = mysql_query($qwert);
                        header("Location:index.php?upload=success");
                   
                   
                  }
                   else
                   {
                    echo "file too big";
                   }
           }
           else
           {
              echo "error in uploading file";
           }
  }
  else
  {
    echo "You cannot upload files of this type";
  }

}

?>
