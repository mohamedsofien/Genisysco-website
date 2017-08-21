<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="Zyedeti/Logitech-G-logo.ico">
    <title>GeniSysCo - Sign In</title>

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
                    <h2>sign in</h2>
                    <hr class="star-primary">
                </div>
            </div>
                    <p align="center">NOTE: To sign up, you must send your primary coordinates to the administration team, and you will be notified when your account is ready to proceed you registration.</p>
                    <p align="center"></p><br><br>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

					<form  name="sentMessage" id="contactForm" novalidate>
					
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label>First Name</label>
									<input type="text" class="form-control" placeholder="First Name" name="fname" id="fname"required data-validation-required-message="Please enter your first name.">
									<p class="help-block text-danger"></p>
								</div>
							</div>  	
								
							<div class="row control-group">	
								 <div class="form-group col-xs-12 floating-label-form-group controls">
									<label>Last Name</label>
									<input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname"required data-validation-required-message="Please enter your last name.">
									<p class="help-block text-danger"></p>
								</div>
							</div>  	
								
							<div class="row control-group">	
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label>Email Address</label>
									<input type="email" class="form-control" placeholder="Email Address" name="email" id="email"required data-validation-required-message="Please enter your email address.">
									<p class="help-block text-danger"></p>
								</div>
							</div>  	
								
							<div class="row control-group">	
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label>Message</label>
									<textarea rows="5" class="form-control" placeholder="Message" name="msg" id="msg"required data-validation-required-message="Please enter a message."></textarea>
									<p class="help-block text-danger"></p>
								</div>     
							</div>  
							
   
						
						<br>
						<div id="success"></div>
						
						<div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg" id="btnSubmit">Sign Up</button>
                            </div>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </section>

	
	
	
	
	
	
	
	    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="save_data.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
