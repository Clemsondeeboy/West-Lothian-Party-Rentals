<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

if($firstname == '' || $lastname == '' || $email == '' || $phone == '')
{
  $error = 'Your firstname, lastname, email and phone are required';
  include('contact.php');
  exit;
}

  $to = 'info@westlothian.com';
  $mail_sub = 'Feedback from Website';
  $from = "From: noreply@westlothian.com";

  $body = 'Below is the infor that was filles'."\n"
  .'Name: '.$firstname.' '.$lastname."\n"
  .'Email: '.$email."\n"
  .'Phone: '.$phone."\n"
  .'Message: '.$msg."\n";

  mail($to,$mail_sub,$body,$from);


   $success = 'Message Sent. Someone will contact you shortly';
   include('contact.php');
   exit;

?>