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
	} */
	$result=mysqli_query($connection,"SELECT * FROM personal");
	$id_user = mysqli_num_rows($result);
	for($i=1;$i<$id_user+1;$i++)
	{
		$sql = "SELECT pic FROM personal WHERE id='$i';";
		$result = mysqli_query($connection,$sql);
		while($row = $result->fetch_assoc()) 
		{
			$path = $row["pic"];
		}
		echo $path;
}
?>