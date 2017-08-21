<?php 
session_start();
if (!isset($_SESSION['id'])){
    header('Location: http://localhost/sof/login.php');
}
 ?>
<?php

$email_address = $_POST['emailer'];


$body = <<<EMAIL
HI,
You are officially accepted at the GENISYSCO team.
to proceed your membership, check this link: 127.0.0.1/sign .
EMAIL;

// Create the email and send the message
$to = $email_address; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = 'Mail of acceptetion';
mail($to,$email_subject,$body);		
echo "<script>alert('done')</script>"
?>