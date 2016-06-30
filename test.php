<?php
	//Add database connection
	include_once("obj/dbKon.php");

	$conn = new dbKon();

 	$userFN       = $_POST['firstname'];
 	$userLN       = $_POST['lastname'];
 	$userEM       = $_POST['email'];
 	$userAdd      = $_POST['street'];
 	$userCity     = $_POST['city'];
 	$userState	  = $_POST['state'];
 	$userZip      = $_POST['zip'];
 	$userAge      = $_POST['age'];
 	$userJob      = $_POST['occu1'];
 	$userSM		  = $_POST[''];
 	$donateAmt	  = $_POST['amount'];
 	$cc 		  = $_POST['cc'];
 	

 	

 	//echo $userFN;

 	$ins = "INSERT INTO Member(fname, lname, email, address, city, state, zip, occupation, socialMedia ) VALUES('".$userFN."', '".$userLN."','".$userEM."','".$userCity."','".$userAdd."','".$userCity."','".$userZip."','".$userAge."','".$userJob."','".$userSM."')";

 	$conn->handleData( $ins );



 	//execute ins here

 	//$ins1 = "INSERT INTO Donate(donateAmt, memberID, cc ) VALUES('".$donateAmt."', '".$userLN."','".$userEM."','".$userCity."','".$userAdd."','".$userCity."','".$userZip."','".$userAge."','".$userJob."','".$donateDate."','".$userSM."')";

 	//execute ins here

 	echo $ins;

 	//execute SQL here using dbcon

?>