<?php 
session_start();
if (!isset($_SESSION['id'])){
    header('Location: http://localhost/sof/login.php');
}
 ?>
<!DOCTYPE html>
<html>
	<head>
	<style>
	a{
		color:white;
	}
	</style>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>File Uploader</title>
			<link href="../css/basic.css" type="text/css" rel="stylesheet" />
			<script type="text/javascript" src="http://filamentgroup.github.com/EnhanceJS/enhance.js"></script>
			<script type="text/javascript">
				// Run capabilities test
				enhance({
					loadScripts: [
						'https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js',
						'../js/jQuery.fileinput.js',
						'../js/example.js'
					],
					loadStyles: ['../css/enhanced.css']
				});
		    </script>
	</head>
	<body>
	<div id="wrapper" >	
	<form action="save_file.php" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>Add article</legend>
				<label for="file">Choose article</label>
				<input type="text" name="filename" id="filename" placeholder="file name">

				<label for="file">Choose article</label>
				<textarea name="desc" id="desc" placeholder="description" /></textarea>

				<label for="file">Choose article</label>
				<input type="file" name="file" id="file" />
				<input type="submit" name="upload" id="upload" value="Upload article" style="width:410px;" />
			</fieldset>
		</form>
	</div>
	</body>
</html>
