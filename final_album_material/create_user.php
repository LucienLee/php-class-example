<?php 
	require_once("utility.php");
	$link = connectDB();

	// Get variable

	if( !empty($account) && !empty($psword) && !empty($name) ){
		
		//manipulate info to DB and redirect to right place

	}else{
		header("location:signup.php ");
	}
 ?>