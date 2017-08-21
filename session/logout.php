<?php 
session_start();


if (!isset($_SESSION['id'])){
    header('Location: http://localhost/sof/login.php');
}
 
session_unset();
session_destroy();
header('Location: ../index.php');
 ?>