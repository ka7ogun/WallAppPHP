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
	 	<div id="innerC">
	 		 <form method="POST" action="database.php" id="wallJoin">
				<legend>Personal Info</legend>
					<label> First Name:  <input type="text" name="firstname" id="FN" placeholder="First Name" /> </label> 

					<label> Last Name: <input type="text" name="lastname" id="LN" placeholder="Last Name" /></label>
							<br/>

							<label>Your Borough: 
									<select name="city" id="city"> 
										
									<option value=""> Choose....</option>
									<option value="brooklyn"> Brooklyn </option>
									<option value="bronx"> Bronx </option>
									<option value="manhattan"> Manhattan </option>
									<option value="queens"> Queens </option>
									<option value="staten_island"> Staten Island </option>
									</select> </label>

								<br/>

							<label> Email Address: <input type="text" name="email" id="E1" size="42" placeholder="We send current cites"/></label>

							<label id="SM" name="SM">Social Media: <br/>

							<label for="insta"><input type="checkbox" name="insta" id="insta" value="instagram"> Instagram</label> <br/>
							<label for="face"><input type="checkbox" name="face" id="face" value="facebook"> Facebook</label><br/>
							<label for="twit"><input type="checkbox" name="twit" id="twit" value="twitter"> Twitter</label><br/>
							<label for="link1"><input type="checkbox" name="twit" id="link1" value="linkedin"> LinkedIn</label><br/>

							</label>
							

							

						<label>
						Which age group best describes you? <br/>
						Youth: <input type="radio" required name="age" id="age" value="1"/>
						Adult: <input type="radio" required name="age" id="age" value="2"/>
						</label>

						<label> Birth Year:
						<input type="number" min="1900" max="2004" step="1" name="year" id="year" value="1955"></label>

								<br/>

						<label> Occupation: 
							<select id="occu" name="occu1">
								<option>Choose....</option>	
								<option>Artist</option>
								<option>Teacher</option>
								<option>Student</option>
								<option>Other</option>
							</select>
						</label>
						<br/>
						<input type="hidden" name="dataSource" value="join"/>

							 <button type="button" id="joinBtn"> Join </button>
							 
				</form>
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