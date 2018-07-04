                                <?php

   if(isset($_POST['submit']))
   {
       $mail = $_POST['mail'];
       
      mysql_query("DELETE post from profil where useremail = '$mail'");
      header("Location:users.php?$mail");
      exit();
       
   
   }
?>
    