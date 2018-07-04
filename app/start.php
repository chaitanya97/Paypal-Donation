<?php
  require 'vendor/autoload.php';
  define('SITE_URL' ,'https://www.cmssystem.ml/donation.php');

  $paypal = new \PayPal\Rest\ApiContext(new \PayPal\Auth\OAuthTokenCredential('AWGxP2LuiTR1CfoWfE7nHlO5bPOvbYRJjolOZcYajbZJ3OVt-hbEGd0qkhcIAQLUBZREC7LPvLb2o4Yq',
  
  'EHx_aF6rn0oEt8TK9Xo8B-q5zgcpgXMlNKC_6PDRkSWlf6C2_V70tnG_CVRdugbmzHzFyOpQVpfGGT5K')
  
);
 
?>