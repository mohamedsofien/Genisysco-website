<?php
$name = $_POST['fname'] . $_POST['lname'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$body = <<<EMAIL
$name sent you a request to join the GENISYSCO team
He says:
$msg
EMAIL;
// Create the email and send the message
$to = 'kriasofien@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "JOIN GENISYSCO";
$headers = "From: ".$name." ".$email."\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
mail($to,$email_subject,$body,$headers);
echo '<script>alert("mail sent'");</script>';			
?>