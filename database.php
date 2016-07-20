<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Wall-Off::Official Site </title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
	<div id="wrap">
	 	<nav>			
	 		<ul id="dropdown-content">
				<a href="index.html"><li> Home </li></a>
				<a href="join.php"><li>Join</li></a>
				<a href="map.php"><li>Map</li></a>
				<a href="upload.php"><li>Upload</li></a>
				<a href="gallery.php"><li>Gallery</li></a>
				<a href="donate.php"><li> Donate</li></a>
				<a href="signin.php"><li>Sign In</li></a>
			</ul>
						
			<table width="100%"><tr><td align="center">
				<h1>WALL-OFF</h1>	
				<h3>"Discover Public Art"</h3></td>
				<td valign="top" align="right"><img src="image/mobilemenu.png" id="dropbtn"></td></tr>
			</table>
	 	</nav>
	 	<div>
			<?php

				try{
					$db = new PDO("mysql:host=localhost;dbname=og_WO;port=8889","root","root");
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$db->exec("SET NAMES 'utf8'");
					echo "<br/>";
					echo "<br/>";
					echo "<br/>";
					echo "<h1>Thank you for your support!</h1>";


						$userFN       = $_POST['firstname'];
					 	$userLN       = $_POST['lastname'];
					 	$userEM       = $_POST['email'];
					 	$userAdd      = $_POST['street'];
					 	$userCity     = $_POST['city'];
					 	$userState	  = $_POST['state'];
					 	$userZip      = $_POST['zip'];
					 	$userAge      = $_POST['age'];
					 	$userJob      = $_POST['occu1'];
					 	$userSM		  = $_POST['SM'];

					 	$donateAmt	  = $_POST['amount'];
					 	$ccType		  = $_POST['cc1'];
					 	$cc 		  = $_POST['cc'];
					 	$artist		  = $_POST['artistname'];
					 	$mural 		  = $_POST['muralname'];
					 	$vmural		  = $_POST['visible'];
					 	$land 		  = $_POST['landmark'];
					 	$muralAdd     = $_POST['streetM'];
					 	$muralCity    = $_POST['cityM'];
					 	$muralState	  = $_POST['stateM'];
					 	$muralZip     = $_POST['zipM'];
					 	$country	  = $_POST['countryM'];
					 	$imagePath    = $_POST['filename'];
					 	$muraldescript= implode( $_POST['script'] );
						$dataSource   = $_POST['dataSource'];
					
				switch( $dataSource ){
						
						case "join":
						case "donate":

									$ins1 = "INSERT INTO Donate (donateAmt, cc) VALUES ('$donateAmt', '$cc')";
									$rec1 = $db->query($ins1);

									$ins2 = "INSERT INTO Member (fname, lname, email, address, city, state, zip, occupation, socialMedia) VALUES ('$userFN','$userLN','$userEM','$userAdd','$userCity','$userState','$userZip','$userJob','$userSM')"; 
									$rec2 = $db->query($ins2);
						break;

						case "upload":

									//Step 1 save file in upload folder
									//include_once("obj/fileup.php");
									//echo ":)";

									
						   		$ins3 = "INSERT INTO Mural (name, script, landmark, artist, address, city, state, zip, country, visible) VALUES ('$mural','$muraldescript','$land','$artist', '$muralAdd','$muralCity','$muralState', '$muralZip', '$country', '$vmural')";

						   		//echo ($ins3);
						   		$rec3 = $db->query($ins3);

						case "pic":

								 //include_once("upload/testUpload.php");
								// $ins4 = "INSERT INTO Mural (imagePath) VALUES ('$imagePath')";

								// echo ($ins4);
									
									
						break;
					}
					


				}catch (Exception $e){
					echo ($e);
					echo "BUSTED";
					exit;
				}

			?>
		</div>
		<footer id="contact">
				Contact us via email <a href="mailto:digikanyc@gmail.com">info@Wall_Off</a> 
			    All rights reserved by Wall-Off NYC &copy; Copyright 
		</footer>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/val.js"></script>
</body>
</html>