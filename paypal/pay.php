<?php
  
 

  use PayPal\Api\Payment;
  use PayPal\Api\PaymentExecution;
   require 'app/start.php';

  if(!isset($_GET['success'] ,$_GET['paymentId'] , $_GET['PayerID']) )

  {

    die();
  }

  if((bool)$_GET['success'] === false)
  {
      die();
  }
  $paymentId = $_GET['paymentId'];
  $payerId = $_GET['PayerID'];

  echo $paymentId;
   $payment  = Payment::get($paymentId , $paypal);
   $execute = new PaymentExecution();
   $execute->setPayerId($PayerId);

   try
   {
        $result = $payment->execute($execute,$paypal);
   }
   catch(Exeception $e)

   {
    $data = json_decode($e->getData());
    var_dump($data);
    echo $data->message;
    die();
   }

   echo 'Payment Made!';
   header("Location:index.php");
?>

