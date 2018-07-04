<?php
   $path = "admin/images/profilechaitanyasurabhi7@gmail.com.jpg";
   if(!unlink($path))
   {
       echo "error";
   }
   else {
       header("Location:hel.php?deletesuccess");
   }

?>