<?php
$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

$body = <<<EMAIL
$msg
EMAIL;

// Create the email and send the message
$to = $email_address; 
$email_subject = $subject;
$headers = "From: ".$name."\n"; // This is the email address the generated message will be from. We recommend using something like 
mail($to,$email_subject,$body,$headers);
echo '<script> alert("mail sent")</script>';			

?>