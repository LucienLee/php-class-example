<?php 
	require_once("utility.php");
	$link = connectDB();

	if( isset($_POST['id']) && isOwner($_POST['id']) ){
		$id = $_POST['id'];
		$name = $_POST['photo_name'];
		$comment = $_POST['comment'];
		$sql = "UPDATE `Photo` SET `Name` = '$name', `Comment` = '$comment' WHERE `ID` = '$id'";
		$result = mysql_query($sql, $link);

		if($result)
			header("Location: viewPhoto.php?photo_id=$id");	
	}
 ?>