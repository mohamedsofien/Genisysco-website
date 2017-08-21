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
		echo '<li class="active"><a>Profile</a></li>
        <li><a href="projects.php">Research & Projects</a></li>
        <li><a href="send_accept.php">Send Acceptation</a></li>'
		?>
        <li><a href="logout.php">Log Out</a></li>'
	  </ul>
     </div>
		<!-- Header -->
		<header role="banner">
			<div class="container_16">
					<hgroup>
					<?php
					echo '<h1>'.strtoupper($name).'</h1>';
					?>
					</hgroup>

					<figure>
					<?php
				/* 	$res = mysqli_query($connection,"SELECT pic FROM personal WHERE id='$id'");
					while ($row = $res->fetch_assoc())
					{
						$p = $row["pic"];
					} */
					echo '<img src="../'.$path.'" alt="?">';
					?>
					</figure>
			</div>
		</header>
		
		
		<!-- Corps -->
		<section role="main" class="container_16 clearfix">
			<div class="grid_16">
			
				<!-- Expériences -->
				<div class="grid_16 experiences">
					<h3>Expériences</h3>
					<ul >
					<?php
					$res = mysqli_query($connection,"SELECT title,date,description FROM competence WHERE id='$id' order by date desc");
					foreach ( $res as $row ) {

						$title = $row["title"];
						$date = $row["date"];
						$description = $row["description"];

						echo '<li>
							<h4><strong>'.$title.'</strong></h4>
							<span class="dates">'.$date.'</span>
							<p>'.$description.'</p>
							</li>';
					}
					?>
					</ul>
				</div>
			
				<!-- Formations -->
				<div class="grid_16 formations">
					<h3>Formations</h3>
					<ul>
					<?php
					$res = mysqli_query($connection,"SELECT title,date,description FROM formation WHERE id='$id' order by date desc");
					foreach ( $res as $row ) {

						$title = $row["title"];
						$date = $row["date"];
						$description = $row["description"];

						echo '<li>
							<h4><strong>'.$title.'</strong></h4>
							<span class="dates">'.$date.'</span>
							<p>'.$description.'</p>
							</li>';
					}
					?>
					</ul>
				</div>
			
				<!-- Loisirs -->
				<div class="grid_8 loisirs">
				<h3>Autres</h3>
				<?php
					$res = mysqli_query($connection,"SELECT title,description FROM autre WHERE id='$id'");
					foreach ( $res as $row ) {

						$title = $row["title"];
						$description = $row["description"];

						echo '<p><strong>'.$title.'</strong>&nbsp '.$description.'</p>';
					}
					?>
				</div>
			
				<!-- Contact -->
				<div class="grid_8 contact">
					<h3>Contact</h3>
					<ul>
						<li class="lieu">Manouba, Tunisie</li>
						<?php
						echo '<li class="mail"><a href="mailto:'.$email.'">'.$email.'</a></li>';
						echo '<li class="form"><a class="toContactform" href='.$twitter.'><img src="../img/Twitterbird.png" style="height:20px;">&nbsp Twitter '.$name.'</a></li>';
						echo '<li class="form"><a class="toContactform" href='.$linkedin.'><img src="../img/LinkedIn_logo_initials.png" style="height:20px;">&nbsp LinkedIn '.$name.'</a></li>';
						?>
					</ul>
				</div>
			</div>
		</section>
		<a href="modify_profile.php?id=<?php echo $id?>">Modifier le profile</a>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>