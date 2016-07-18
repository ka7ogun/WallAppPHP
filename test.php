<?php


	include_once("database.php");

	$conn = new PDO();

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
			 	$cc 		  = $_POST['cc'];
			 	$mural 		  = $_POST['muralname'];
			 	$land 		  = $_POST['landmark']
			 	$artist		  = $_POST['artistname'];
			 	$muralAdd     = $_POST['streetM'];
			 	$muralCity    = $_POST['cityM'];
			 	$muralState	  = $_POST['stateM'];
			 	$muralZip     = $_POST['zipM'];
			 	$country	  = $_POST['countryM'];
			 	$imagePath    = $_POST['pic'];
	}
 	


 /*	

 $ins = "INSERT INTO 'Member' ('fname', 'lname', 'email', 'address', 'city', 'state', 'zip', 'occupation', 'socialMedia') VALUES('$userFN','$userLN','$userEM','$userAdd','$userCity','$userState','$userZip','$userJob','$userSM'");

 

 header("Location:join.html, donate.html, upload.html")
*/
 	
	$ins1 = "INSERT INTO Donate(donateAmt,cc ) VALUES('$donateAmt','$cc'");

	$rec = $db->query($ins1);


/*
	$ins = "INSERT INTO Member(fname,lname,email,address,city,state,zip,occupation,socialMedia) VALUES('$userFN','$userLN','$userEM','$userAdd','$userCity','$userState','$userZip','$userJob','$userSM')";
	$rec = $conn->query($ins);
	

 	$dataSource = $_POST['dataSource'];
	 $userInput = $_POST['userInput'];
		
		switch( $dataSource ){
			
			case "join":
			$ins2 = "INSERT INTO Member(fname,lname,email,address,city,state,zip,occupation,socialMedia) VALUES('$userFN','$userLN','$userEM','$userAdd','$userCity','$userState','$userZip','$userJob','$userSM')";
			$rec2 = $db->query($ins2);
			break;

			case "donate":
			$ins1 = "INSERT INTO Donate(donateAmt, memberID, ) VALUES('$donateAmt','','$cc')";
			$rec = $db->query($ins1);
			break;

			case "login":
			echo "Login";
			break;

			case "upload":
			$ins3 = "INSERT INTO Mural(name,landmark,artist,address,city,state,zip,country,imagePath)VALUES('$mural','$land','$artist','$muralAdd','$muralCity','$muralState','$muralZip','$country','$imagePath'");

			$rec3 = $db->query($ins3);
			break;
	}
*/
?>