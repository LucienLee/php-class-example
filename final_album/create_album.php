<?php
	require_once('utility.php');
	$link = connectDB();
	session_start();

	if( !isset($_POST['album_name']) || !isset($_SESSION['user'])){
		header('location: listAlbum.php');
	}else{
		$name = $_POST['album_name'];
		$user = $_SESSION['user'];
		$sql = "INSERT INTO Album ( Name, Owner) VALUES ( '$name', '$user' )";
		$result = mysql_query($sql, $link);

		if($result)
			header('Location: listAlbum.php');
		else
			header('Location: listAlbum.php');
	}	
?>