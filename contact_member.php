<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
$connection = new mysqli("localhost","root","","cv");
$id = $_GET["id"];
$res = mysqli_query($connection,"SELECT pic,fname,lname,linkedin,twitter,email FROM personal WHERE id='$id'");
while ($row = $res->fetch_assoc()){
	$name = $row["fname"]." ".$row["lname"];
	$path = $row["pic"];
	$twitter = $row["twitter"];
	$linkedin = $row["linkedin"];
	$email = $row["email"];
}
mysqli_free_result($res);
echo '<title>'.$name.' - Contact</title>';
?>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fichiers CSS -->
<link rel="stylesheet" href="cv/reset.css">
<!--[if lt IE 9]> 
	<link rel="stylesheet" href="css/cv.css" media="screen">
<![endif]-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" media="screen and (max-width:480px)" href="cv/mobile.css">
<link rel="stylesheet" media="screen and (min-width:481px)" href="cv/cv.css">
<link rel="stylesheet" media="print" href="cv/print.css">
		<link rel="stylesheet" href="Zyedeti/style-2.css"/>
</head>

<body>
	<div id="wrapper" >
		<!--navigation-->
	 <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav" >
	  <?php
		echo '<li><a href="cv.php?id='.$id.'">Profile</a></li>
        <li><a href="projects.php?id='.$id.'">Research & Projects</a></li>
        <li class="active"><a>Contact</a></li>'
		?>
      </ul>
     </div>	
	<form action="send.php" method="post">
		<div class="wrap_2">
			<br>
			<label>NAME:</label> <br> 
			<input type="text" name="name" class="field" placeholder="name" >					
			<br><br>
			<label>E-MAIL:</label> <br> 
			<input type="text" name="email" class="field" placeholder="email" >
			<br><br>
			<label>SUBJECT:</label> <br> 
			<input type="text" name="subject" class="field" placeholder="subject" >
			<br><br>
			<label>MESSAGE:</label><br>
			<textarea rows="5" placeholder="message" name="msg"></textarea><br>
		</div>
		<input type="submit" id="submitbtn" class="button" value="Send Mail"/><br><br>
	</form>		
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>