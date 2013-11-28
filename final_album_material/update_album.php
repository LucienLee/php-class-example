<?php 
	require_once("utility.php");
	$link = connectDB();

	if( isset($_POST['albumid']) && isOwner($_POST['albumid']) ){
		$id = $_POST['albumid'];
		$name = $_POST['name'];
		$sql = "UPDATE Album SET Name = '$name' WHERE ID = '$id'";
		$result = mysql_query($sql,$link);
		if($result)
			header("Location: viewAlbum.php?albumid=$id");	
	}else{
		header("location: index.php");
	}
 ?>