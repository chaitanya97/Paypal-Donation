<?php


use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

require 'app/start.php';
if(!isset($_POST['donation']) && !isset($_POST['product']))
{
    die();
}
$product =$_POST['product'];
$price = $_POST['donation'];

$shipping = 2.00;
$total = $price + $shipping;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)
      ->setCurrency('GBP')
       ->setQuantity(1)
       ->setPrice($price);

       $itemList = new ItemList();
       $itemList->setName([$item]);
       $details  = new Details();
       $details->setShipping($shipping)
               ->setSubtotal($total);

               $amount = new Amount();
               $amount->setCurrency('GBP')
                       ->setTotal($total)
                       ->setDetails($details);

                       $transaction = new Trasaction;
                       $transaction->setAmount($amount)
                                    ->setItemList($itemList)
                                     ->setDescription('Pay for donation')
                                     ->setInvoiceNumber(uniqid());

  $redirectUrls = new RedirectUrls();
 $redirectUrls->setReturnUrl(SITE_URL .'/pay.php?success=true')
               ->setCancelUrl(SITE_URL .'/pay.php?success=false');

               $payment = new Payment();
               $payment->setIntent('sale')
                       ->setPayer($payer)
                       ->setRedirectUrls($redirectUrls)
                       ->setTransactions([$transaction]);