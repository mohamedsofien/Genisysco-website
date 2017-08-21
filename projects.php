<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
$connection = new mysqli("localhost","root","","cv");
$id = $_GET["id"];
?>
<title>Projects & Research</title>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fichiers CSS -->
<link rel="stylesheet" href="cv/reset.css">
<!--[if lt IE 9]> 
	<link rel="stylesheet" href="css/cv.css" media="screen">
<![endif]-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" media="screen and (max-width:480px)" href="cv/mobile.css">
<link rel="stylesheet" media="screen and (min-width:481px)" href="cv/cv.css">
<link rel="stylesheet" media="print" href="cv/print.css">
</head>

<body>
	<div id="wrapper" >
		<!--navigation-->
	 <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
	  <?php
        echo'<li><a href="cv.php?id='.$id.'">Profile</a></li>
        <li class="active"><a>Research & Projects</a></li>
        <li><a href="contact_member.php?id='.$id.'">Contact</a></li>'
      ?>
	  </ul>
     </div>
		
	<link href="css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">

              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">Article name</th>
                        <th>Description</th>
                        <th></th>
                    </tr> 
					</thead>
						<tbody>
					<?php	
						$res = mysqli_query($connection,"SELECT name,description,url FROM article WHERE id='$id'");
						$i = 0;
						foreach ( $res as $row ) {
							$i++;
							$name = $row["name"];
							$description = $row["description"];
							$url = $row["url"];

							echo '<tr>
                            <td class="hidden-xs">'.$i.'</td>
                            <td>'.$name.'</td>
                            <td>'.$description.'</td>
							<td align="center">
                              <a href="'.$url.'" class="btn btn-default"><em class="fa fa-pencil">open</em></a>
                            </td>
                          </tr>';
						}
                          
					?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
	</div>
</div>
		
		
		
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>