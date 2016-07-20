<?php

if($_FILES){

	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], $name);
	echo "<img src='$name'>";

}




// $target_path = "http://localhost:8888/portfolio_2/upload";

// $target_path = $target_path . basename($_FILES['uploadedfile']['name']);

// 	 (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){

// 	 	echo "We did it!";

// 	}else{

// 		echo "Try again"
// 	}
?>