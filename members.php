<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="Zyedeti/Logitech-G-logo.ico">
    <title>GeniSysCo - Members</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
           

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="members.php">Members</a>
                    </li>
                    <li class="page-scroll">
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li class="page-scroll">
                        <a href="login.php">Log In</a>
                    </li>
                    <li class="page-scroll">
                        <a href="sign.php">Sign Up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<br>
	<br>
	<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Team Members</h2>
                    <hr class="star-primary">
                </div>
            </div>
			<div class="row">
						<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$db = "cv";

						$connection = new mysqli($servername, $username, $password, $db);
						/*  $sql = "SELECT COUNT(id) FROM personal;";
						$result = mysqli_query($connection,$sql);
						while($row = $result->fetch_assoc()) {
						echo $row['id'];
						$id_user = $row['id'];
						}*/ 
						$result=mysqli_query($connection,"SELECT * FROM personal");
						$id_user = mysqli_num_rows($result);
						for($i=1;$i<$id_user+1;$i++)
						{
							$sql = "SELECT pic,fname,lname FROM personal WHERE id='$i';";
							$result = mysqli_query($connection,$sql);
							while($row = $result->fetch_assoc()) 
							{
								$path = $row["pic"];
								$name = strtoupper($row["lname"])." ".strtoupper($row["fname"]);
							}
							echo	'<div class="col-sm-4 portfolio-item">
										<a href="cv.php?id='.$i.'" class="portfolio-link" >
											<div class="caption">
												<div class="caption-content">
													<i class="fa fa-search-plus fa-3x">'.$name.'</i>
												</div>
											</div>
											<img src='.$path.' class="img-responsive" alt="">
										</a>
									</div>';
						}
						?>
			</div>
        </div>
    </section>
	
	
	
	    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
