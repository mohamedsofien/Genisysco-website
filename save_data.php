<?php
	
	$con = mysqli_connect("localhost","root","","primaire");
	
	if(mysqli_connect_error())
	{
		echo "database error";
	}
	
	if(isset($_POST['email']))
	{
		$email =  $_POST['email'];
		$email = mysqli_real_escape_string($con,$email);
		if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
		{
			echo "corrct your mail adress!";
		}
		else 
		{
			$result= mysqli_query($con,"SELECT id FROM users WHERE email='$email'");
			if (mysqli_num_rows($result) > 0)
			{
				echo "this mail is already taken!";
			}
			else
			{
				echo "valid"
			}
		}
		
	
	}


?>