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

	<script type="text/javascript">
		
		function uploadI (){
			
			var photo = document.getElementById("photo");
			

			var file = photo.files[0];

			console.log("File name: " + file.fileName);
			console.log("File size: " + file.fileSize);
			
			return false;
		}

	</script>
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


	 		 <form method="post" action="database.php" id="wallUpload" onsubmit="return uploadI();">
				<legend>Upload Image</legend>
					
					<label> Artist Name: <input type="text" name="artistname" size="30" id="AN" placeholder="Artist Nickname" /></label>
              
					<label> Mural Name:  <input type="text" name="muralname" size="30" id="MN" placeholder="Title of artwork" /> </label> 

					<label id="muralIN" name="muralIN">Description: 
						<table><tr><td><label for="hist"><input type="checkbox" name="script[]" id="hist" value="historical"> Historical</label>
							<label for="comm"><input type="checkbox" name="script[]" id="comm" value="community"> Community</label>
							<label for="abs"><input type="checkbox" name="script[]" id="abs" value="abstract"> Abstract</label>
							<label for="old"><input type="checkbox" name="script[]" id="old" value="old_school"> Old School </label>
							</td>
							<td>
							<label for="classic"><input type="checkbox" name="script[]" id="classic" value="classic"> Classic </label>
							<label for="modern"><input type="checkbox" name="script[]" id="modern" value="modern"> Modern </label>
							<label for="stencil"><input type="checkbox" name="script[]" id="stencil" value="stencil"> Stencil </label>
							<label for="fullc"><input type="checkbox" name="script[]" id="fullc" value="fullcolor"> Full Color </label>
							</td>
							<td>
							<label for="blkandwht"><input type="checkbox" name="script[]" id="blkandwht" value="blkandwht"> Black & White </label>
							<label for="monoc"><input type="checkbox" name="script[]" id="monoc" value="monoc"> Monochrome </label>
							<label for="type"><input type="checkbox" name="script[]" id="type" value="type"> Typegraphy </label>
							<label for="edu"><input type="checkbox" name="script[]" id="edu" value="edu"> Education </label>
							</td></tr>
						</table>
					</label>
					<hr/>
					
							

					<label>Visibility:<br/>
											  <input type="radio" name="visible" id="visible" value="true"> On Display
											  <input type="radio" name="visible" id="visible" value="false"> Not Available
											  <input type="radio" name="visible" id="visible" value="false"> Not Sure


							</label>


					<label> Landmark:  <input type="text" name="landmark" size="40" id="landmark" placeholder="Neighborhood, Monument, Church, Restaurant" /> </label> 



							<label> Street Address: <input type="text" name="streetM" id="streetM" size="40" placeholder="Artwork Location"/></label>

							<label> City: <input type="text" name="cityM" id="cityM" size="23" placeholder="City"/></label>

							<br/>
							<label> State: <input type="text" name="stateM" id="stateM" size="5" placeholder="State"/></label>

							<label> Zip: <input type="text" name="zipM" id="zipM" size="10" placeholder="Zip Code"/></label>

							<label> Country: <input type="text" name="countryM" id="countryM" size="19" placeholder="Outside of US"/></label>


							<br/>
							<form enctype="multipart/form-data" action="/" method="post">
								<label>Photo:<input style="margin:0 auto;padding:10px" type="file" name="pic" id="photo" value="file1"></label>
							</form>
						
							<input type="hidden" name="dataSource" value="upload"/>

							<button type="button" id="uploadBtn"> Upload </button>
							 
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