<?php 
session_start();
if (!isset($_SESSION['id'])){
    header('Location: http://localhost/sof/login.php');
}
 ?>
<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
$connection = new mysqli("localhost","root","","cv");
$id = $_SESSION['id'];
$res = mysqli_query($connection,"SELECT pic,fname,lname,linkedin,twitter,email FROM personal WHERE id='$id'");
while ($row = $res->fetch_assoc()){
	$name = $row["fname"]." ".$row["lname"];
	$path = $row["pic"];
	$twitter = $row["twitter"];
	$linkedin = $row["linkedin"];
	$email = $row["email"];
}
mysqli_free_result($res);
echo '<title>'.$name.'</title>';
?>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fichiers CSS -->
<link rel="stylesheet" href="../cv/reset.css">
<!--[if lt IE 9]> 
	<link rel="stylesheet" href="css/cv.css" media="screen">
<![endif]-->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<link rel="stylesheet" media="screen and (max-width:480px)" href="../cv/mobile.css">
<link rel="stylesheet" media="screen and (min-width:481px)" href="../cv/cv.css">
<link rel="stylesheet" media="print" href="../cv/print.css">
</head>

<body>
	<div id="wrapper" >
		<!--navigation-->
	 <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <?php
		echo '<li href="cv.php"><a>Profile</a></li>
        <li><a href="projects.php">Research & Projects</a></li>
        <li><a class="active">Send Acceptation</a></li>'
		?>
        <li><a href="logout.php">Log Out</a></li>'
	  </ul>
     </div>
		<br><br>
		<form action="send_2.php" method="post">
		<label>E-mail of the accepted member:</label> <br> 
		<input type="text" name="emailer" class="field" placeholder="email" >
		<br><br>
		<input type="submit" id="submitbtn" class="button" value="Send Mail"/><br><br>
		</form>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>