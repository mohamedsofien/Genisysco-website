<?php
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$body = <<<EMAIL
$message
EMAIL;

echo $name;
// Create the email and send the message
$to = 'kriasofien@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = 'Mail from: '.$name." ".$phone;
$headers = "From: ".$email_address."\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
mail($to,$email_subject,$body,$headers);
return true;			

?>