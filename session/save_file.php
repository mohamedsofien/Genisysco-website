<?php 
session_start();
if (!isset($_SESSION['id'])){
    header('Location: http://localhost/sof/login.php');
}
	 $servername = "localhost";
	 $username = "root";
	 $password = "";
	 $db = "cv";

	 $connection = new mysqli($servername, $username, $password, $db);
	 
	 if ($connection->connect_error) 
		{
		 die("Connection failed: " . $connection->connect_error);
		}
		
	 else
	{
	 $id = $_SESSION['id'];
	 $pic_name = "../articles/".$_FILES['file']['name'];
	 $pic_path = $_FILES['file']['tmp_name'];

		move_uploaded_file($pic_path,$pic_name);
	
		
		$name = $_POST['filename'];
		$desc = $_POST['desc'];
		
		echo $name." ".$pic_name." ".$desc;

		$sql ="INSERT INTO article(id,name,description,url) VALUES ('$id','$name','$desc','$pic_name')";

		if ($connection->query($sql) === TRUE) 
				{
				 echo "<script>alert('New article added successfully')</script>";
				} 
		else 
			{
			 echo "Error: " . $sql . "<br>" . $connection->error;
			}
	}
	$connection->close();

?>