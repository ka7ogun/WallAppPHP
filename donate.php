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
				<h3>"Discover Public Art</h3></td>
				<td valign="top" align="right"><img src="image/mobilemenu.png" id="dropbtn"></td></tr>
			</table>
	 	</nav>
	 	<div id="innerC">
	 		 <form method="POST" action="database.php" id="wallDonate">
				<legend> Donate </legend>
					<label> First Name:  <input type="text" name="firstname" id="FN" placeholder="First Name" /> </label> 

					<label> Last Name: <input type="text" name="lastname" id="LN" placeholder="Last Name" /></label>
							<br/>

							<label> Email Address: <input type="text" name="email" id="E1" size="42" placeholder="We send current cites"/></label>

							<label> Street Address: <input type="text" name="street" id="street1" size="42" placeholder="Billing Address"/></label>

							<label> City: <input type="text" name="city" id="city1" size="18" placeholder="City"/></label>

							<label> State: <input type="text" name="state" id="state1" size="5" placeholder="State"/></label>

							<label> Zip: <input type="text" name="zip" id="zip1" size="7" placeholder="Zipcode"/></label>

							<label>Donate $$<select name="amount" id="amount">
									<option value="">Choose.....</option>
									<option value='5'>$5.00 </option>
									<option value="10">$10.00</option>
									<option value="20">$20.00</option>
									<option value="25">$25.00</option>
								   </select></label>

							<label>Card Type:<br/>
							Master <input type="radio" required name="cc1" id="cc1" value="1"/>
							VISA <input type="radio" required name="cc1" id="cc1" value="2"/>
							Discover <input type="radio" required name="cc1" id="cc1" value="3"/>
							PayPal <input type="radio" required name="cc1" id="cc1" value="4"/></label>


							<label> Credit Card #: <input type="text" name="cc" id="cc" size="42" placeholder="No dashes required"/></label>
						<br/>
						<input type="hidden"  name="dataSource" value="donate"/>
	
							 <button type="button" id="donateBtn"> Donate </button>
				</form>
			</div>
	 	    <footer id="contact">
	 			<footer>
				Contact us via email <a href="mailto:digikanyc@gmail.com">info@Wall_Off</a> 
			    All rights reserved by Wall-Off NYC &copy; Copyright 
			</footer>
		</div>

	</div>
	
		


	<script src="js/jquery-3.0.0.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/val.js"></script>
</body>
</html>