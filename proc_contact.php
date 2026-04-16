<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$num_check = strlen($phone);
$fullname = $firstname.' '.$lastname;

if($firstname == '' || $lastname == '' || $email == '' || $phone == '')
{
  $error = 'Your firstname, lastname, email and phone are required';
  include('contact.php');
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = 'Enter a valid email address';
        include('contact.php');
        exit;
}

if($num_check != 11)
    {
        $error = 'Enter a valid GSM number';
        include('contact.php');
        exit;
    }

  $to = 'davidebokpoaledoy@gmail.com';
  $mail_sub = 'Feedback from Website';
  $from = "From: noreply@westlothian.com";

  $body = 'Below is the infor that was filles'."\n"
  .'Name: '.$firstname.' '.$lastname."\n"
  .'Email: '.$email."\n"
  .'Phone: '.$phone."\n"
  .'Message: '.$msg."\n"
  ."***************************\n\n"; 

    //this sends the email to the mail box  

  mail($to,$mail_sub,$body,$from);

    //save details in a text file
    $file = fopen('data.txt','a');
    fwrite($file,$body);
    fclose($file);

   $success = 'Message Sent. Someone will contact you shortly';
   include('contact.php');
   exit;

?>
