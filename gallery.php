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
				<a href="map.html"><li>Map</li></a>
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
	 		<div id="innerC">
	 		 		<form method="POST" action="database.php" id="wallJoin">
						<legend>Archive Gallery </legend>
						
							<label> <input type="text" name="search" id="S1" size="30" placeholder="Search by artist or location"/></label>
					
							<input type="hidden" name="dataSource" value="gallery"/>

							<input type="submit" id="searchBtn" value="Search"/>  
					</form>
			
					<?php

						include_once("obj/dbKon.php");

						$sql = "select * from Mural";
						$rec = $db->query($sql);

					  $image = $_GET['imagePath'];

						foreach( $rec as $row){
							print $row['name'];
							print $row['city'];
							print $row['state'];
							echo '<img src="$image">';
							echo "<br>";
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