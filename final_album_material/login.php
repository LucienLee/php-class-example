<?php 
	require_once("utility.php");
	$link = connectDB();

	if( !empty($_POST['account']) && !empty($_POST['password']) ){
		
		//Valid password here
		
	}else{
		header("location: index.php");
	}

	
?>