<?php 
session_start();
$con = new mysqli("localhost","root","","cv");
$email=$_POST['email'];
$password=$_POST['password'];
$req="SELECT * FROM personal WHERE email='$email' AND pwd='$password'";
$run=mysqli_query( $con,$req);
if (mysqli_num_rows($run)==1){
    while($row = $run->fetch_assoc()){
        $_SESSION['id']=$row['id'];
    }
      header('Location: ./session/cv.php');
}
else {

        echo '<script> alert("Invalid email or password!!!")</script>';
}
?>