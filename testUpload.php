<?php

$file = $_POST['pic'];

	if (is_uploaded_file($file)){


			echo ("$file is uploaded");

	}else{ 
			echo ("$file is not uploaded");


	}


?>