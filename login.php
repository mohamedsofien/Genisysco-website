<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="Zyedeti/Logitech-G-logo.ico">
    <title>GeniSysCo - LogIn</title>

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
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>ACCOUNT Log In</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <form action="loginn.php" method="post">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
    					<form name="sentMessage" id="contactForm" novalidate>
    						<div class="row control-group">
    							<div class="form-group col-xs-12 floating-label-form-group controls">
    								<label>Email</label>
    								<input name="email" type="text" class="form-control" placeholder="Username" id="uname" required data-validation-required-message="Please enter your username.">
    								<p class="help-block text-danger"></p>
    							</div>
    							<div class="form-group col-xs-12 floating-label-form-group controls">
    								<label>password</label>
    								<input type="password" name="password" class="form-control" placeholder="Password" id="pwd" required data-validation-required-message="Please enter your password.">
    								<p class="help-block text-danger"></p>
    							</div>
    						</div>	
    						<div class="row">
                                <div class="form-group col-xs-12">
                                    <input name="submit" type="submit" class="btn btn-success btn-lg" value="Log In">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </section>
	
	    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

		<!--form javascript-->
	<script src="js/jqBootstrapValidation.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
