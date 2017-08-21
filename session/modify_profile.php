<?php 
session_start();
if (!isset($_SESSION['id'])){
    header('Location: http://localhost/sof/login.php');
}
 ?>
<?php
$connection = new mysqli("localhost","root","","cv");
$id = $_SESSION["id"];
$res = mysqli_query($connection,"SELECT * FROM personal WHERE id='$id'");
while ($row = $res->fetch_assoc()){
	$fname = $row["fname"];
	$lname = $row["lname"];
	$birth = $row["birth"];
	$email = $row["email"];
	$pwd= $row["pwd"];
	$path = $row["pic"];
	$twitter = $row["twitter"];
	$linkedin = $row["linkedin"];
}
?>
<html>

	<head> 
		<link rel="shortcut icon" href="../Zyedeti/Logitech-G-logo.ico">
		<title>projet d'ete</title>
		<link rel="stylesheet" href="../Zyedeti/style.css"/>
	</head>

	<body>
	<div id="wrapper">
		<div id="form">
			<h1>Profile Information</h1>
			
			<form action="collect_info2.php" method="post" enctype="multipart/form-data">
		
			<legend style="margin-top:50px;">Personal Informations</legend>
			<div class="cadre">
				<label>first name</label> <br> 
				<input type="text" name="fname" class="field" placeholder="first name" value=<?php echo $fname?> >					
				<br><br>
				<label>last name</label> <br> 
				<input type="text" name="lname" class="field" placeholder="last name" value=<?php echo $lname?> >
				<br><br>
				<label>Birth date</label> <br> 
				<input type="text" name="date" class="field" placeholder="birth date" value=<?php echo $birth?> >					
				<br><br>
				<label>Gender</label> <br>
				<label style="margin-left:100px;">Male</label><input type="radio" class="gender" name="gender" value="male"/>
				<label>Female</label><input type="radio" class="gender" name="gender" value="female"/>
				<br><br>
				<label>E-mail</label> <br> 
				<input type="text" name="email" class="field" placeholder="e-mail" value=<?php echo $email?> >
				<br><br>
				<label>Linked In</label> <br> 
				<input type="text" name="linkedin" class="field" placeholder=" lien linked in" value=<?php echo $linkedin?> >
				<br><br>
				<label>Twitter</label> <br> 
				<input type="text" name="twitter" class="field" placeholder="lien twitter" value=<?php echo $twitter?> >
				<br><br>
				<label>Password</label> <br> 
				<input type="password" name="pwd" class="field" placeholder="password" value=<?php echo $pwd?> >
				<br><br>
				<label>Passward Again</label> <br> 
				<input type="password" name="repwd" class="field" placeholder="repassword" >
				<br><br>
			</div>
		
			<legend style="margin-top:30px;">Profil Photo</legend>
			<div class="cadre">
				<input type="file" id="file" name="pic" value=<?php echo $path?> >
			</div>
				
			<legend style="margin-top:50px;">Professional Experience</legend>
			<div class="cadre">
			<div class="wrap_1">
			<?php
					$res = mysqli_query($connection,"SELECT title,date,description FROM competence WHERE id='$id' order by date desc");
					$j = 0;
					foreach ( $res as $row ) {
						$title = $row["title"];
						$date = $row["date"];
						$description = $row["description"];
						echo '<br>
							<label>Job Title:</label> <br> 
							<input type="text" name="c1_j'.$j.'" class="field" placeholder="Title" value="'.$title.'">					
							<br><br>
							<label>Date:</label> <br> 
							<input type="text" name="c1_d'.$j.'" class="field" placeholder="date" value="'.$date.'">
							<br><br>
							<label>description:</label><br>
							<textarea rows="5" placeholder="Description" name="c1_t'.$j.'" value="">'.$description.'</textarea><br><br>
							<br>';
						$j++;
					}							
					echo '<input type="hidden"  id="hid_1" value="'.$j.'" name="id1">';

				?>
				</div>
				<button class="add_field_1">+ Add more</button>
			</div>
			
			<legend style="margin-top:30px;">Education</legend>
			<div class="cadre">
			<div class="wrap_2">
			<?php
					$res = mysqli_query($connection,"SELECT title,date,description FROM formation WHERE id='$id' order by date desc");
					$j = 0;
					foreach ( $res as $row ) {
						$title = $row["title"];
						$date = $row["date"];
						$description = $row["description"];
						echo '<br>
							<label>Job Title:</label> <br> 
							<input type="text" name="c2_j'.$j.'" class="field" placeholder="Title" value="'.$title.'">					
							<br><br>
							<label>Date:</label> <br> 
							<input type="text" name="c2_d'.$j.'" class="field" placeholder="date" value="'.$date.'">
							<br><br>
							<label>description:</label><br>
							<textarea rows="5" placeholder="Description" name="c2_t'.$j.'" value="">'.$description.'</textarea><br><br>
							<br>';
						$j++;
					}	
					echo '<input type="hidden"  id="hid_2" value="'.$j.'" name="id2">';
				?>
				</div>				
				<button class="add_field_2">+ Add more</button>
			</div>

			<legend style="margin-top:30px;">Other</legend>
			<div class="cadre">
			<div class="wrap_3">
					<?php
					$res = mysqli_query($connection,"SELECT title,description FROM autre WHERE id='$id'");
					$j = 0;
					foreach ( $res as $row ) {
						$title = $row["title"];
						$description = $row["description"];
						echo '
							<br>
							<label>Job Title:</label> <br> 
							<input type="text" name="c3_j'.$j.'" class="field" placeholder="Title" value="'.$title.'">					
							<br><br>
							<label>description:</label><br>
							<textarea rows="5" placeholder="Description" name="c3_t'.$j.'" value="">'.$description.'</textarea><br><br>
							<br>';
						$j++;
					}
					echo'<input type="hidden"  id="hid_3" value="'.$j.'" name="id3">';
				?>
				</div>
				<button class="add_field_3">+ Add more</button>
			</div>
			
			
			<input type="submit" id="submitbtn" class="button" value="Save Changes"/><span class="errors" id="submitbtner"></span><br><br>
			</form>
		</div>
	</div>
	</body> 
	
	<script src="Zyedeti/jquery_library2.js"></script>
	<script src="Zyedeti/validation2.js"></script>

</html>