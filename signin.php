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
	 		<section style="padding:10px">
	 			<h3 style="text-align:center">Mission Statement</h3>
	 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in posuere neque. Maecenas in tellus nisl. Praesent eu auctor neque. Sed blandit et velit at molestie. Nulla pretium urna odio, sed molestie ante pretium at. Donec dignissim, tellus non dignissim gravida, mauris magna iaculis sem, imperdiet placerat libero libero ac sapien. Vestibulum non nisl et metus pulvinar convallis quis rutrum dui.</p>
	 		</section>
	 		 <form method="POST" action="database.php" id="wallJoin">
				<legend>Sign In</legend>

					<label> Email Address: <input type="text" name="email" id="E1" size="35" placeholder="Email address linked to membership"/></label>
					<label> Password: <input type="password" name="psswd" id="psswd" size="35" placeholder="Password must be 8 char or more"/></label>
							
						<input type="hidden" name="dataSource" value="signin"/>

							 <button type="button" id="signBtn"> Sign In </button>
							 
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