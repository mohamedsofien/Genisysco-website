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
	$id=$_SESSION["id"];
	mysqli_query($connection,"DELETE FROM personal WHERE id = '$id'");
	mysqli_query($connection,"DELETE FROM competence WHERE id = '$id'");
	mysqli_query($connection,"DELETE FROM formation WHERE id = '$id'");
	mysqli_query($connection,"DELETE FROM autre WHERE id = '$id'");
	 $fname = $_POST["fname"];
	 $lname = $_POST["lname"];
	 $gender = $_POST["gender"];
	 $birth = $_POST["date"];
	 $email = $_POST["email"];
	 $pwd = $_POST["pwd"];
	 $linkedin = $_POST["linkedin"];
	 $twitter = $_POST["twitter"];
	 
	 $pic_name = "C:/wamp/www/GeniSysCo/img/pic/".$_FILES['pic']['name'];
	 $pic_save = "img/pic/".$_FILES['pic']['name'];
	 $pic_path = $_FILES['pic']['tmp_name'];
	 

	 move_uploaded_file($pic_path,$pic_name);
	 

	 
 	 $tab1 = array(3);
	 $ch = "";
	 $id1 = $_POST["id1"];	 
	 $id2 = $_POST["id2"];	 
	 $id3 = $_POST["id3"];	 
	 
	 $result = mysqli_query($connection,"SELECT id FROM personal WHERE email='$email'");
	 $res = mysqli_num_rows($result);
	 if ($res > 0)
		{
			echo "<script>alert('this mail is already taken!')</scrip>";
		}
	 else
		{
		 $sql1 = "INSERT INTO personal (id,fname,lname,gender,birth,email,pwd,pic,linkedin,twitter) VALUES ('$id','$fname','$lname','$gender','$birth','$email','$pwd','$pic_save','$linkedin','$twitter')";
		 mysqli_query($connection, $sql1);		 
		 
		 $result = $connection->query("SELECT id FROM personal WHERE email='$email'");
		     while($row = $result->fetch_assoc()) {
				$id_user = $row["id"];
			}
		 
		 
		 for($i=0;$i<$id1;$i++)
			{
			 $tab1[0] = 0;
			 $tab1[1] = 0;
			 $tab1[2] = 0;
			
			 $ch = "c1_j".$i;
			 $tab1[0] = $_POST[$ch];
			 $ch = "c1_d".$i;
			 $tab1[1] = $_POST[$ch];
			 $ch = "c1_t".$i;
			 $tab1[2] = $_POST[$ch];
			 
			 $sql2 = "INSERT INTO competence (id,title,date,description) VALUES ('$id_user','$tab1[0]','$tab1[1]','$tab1[2]')";
		
			 if ($connection->query($sql2) === TRUE) 
				{
				} 
			 else 
				{
				 echo "Error: " . $sql2 . "<br>" . $connection->error;
				}
			}
			
			for($i=0;$i<$id2;$i++)
			{
			 $tab1[0] = 0;
			 $tab1[1] = 0;
			 $tab1[2] = 0;
			
			 $ch = "c2_j".$i;
			 $tab1[0] = $_POST[$ch];
			 $ch = "c2_d".$i;
			 $tab1[1] = $_POST[$ch];
			 $ch = "c2_t".$i;
			 $tab1[2] = $_POST[$ch];
			 
			 $sql2 = "INSERT INTO formation (id,title,date,description) VALUES ('$id_user','$tab1[0]','$tab1[1]','$tab1[2]')";
		
			 if ($connection->query($sql2) === TRUE) 
				{
				} 
			 else 
				{
				 echo "Error: " . $sql2 . "<br>" . $connection->error;
				}
			}	
			
			for($i=0;$i<$id3;$i++)
			{
			 $tab1[0] = 0;
			 $tab1[1] = 0;
			 $tab1[2] = 0;
			
			 $ch = "c1_j".$i;
			 $tab1[0] = $_POST[$ch];
			 $ch = "c1_t".$i;
			 $tab1[2] = $_POST[$ch];
			 
			 $sql2 = "INSERT INTO autre (id,title,description) VALUES ('$id_user','$tab1[0]','$tab1[2]')";
		
			 if ($connection->query($sql2) === TRUE) 
				{
				} 
			 else 
				{
				 echo "Error: " . $sql2 . "<br>" . $connection->error;
				}
			}
		}
	}
 echo "<script>alert('saving done')</script>";
$connection->close();
?>