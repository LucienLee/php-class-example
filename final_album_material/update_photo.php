<?php 
	require_once("utility.php");
	$link = connectDB();

	if( isset($_POST['id']) ){
		$id = $_POST['id'];
		$sql = "SELECT `AlbumID` From `Photo` WHERE `ID` = '$id'";
		$result = mysql_query($sql, $link);
		$album = mysql_result($result, 0, 'AlbumID');

		if( isOwner($album) ){

			$name = $_POST['photo_name'];
			$comment = $_POST['comment'];
			$sql = "UPDATE `Photo` SET `Name` = '$name', `Comment` = '$comment' WHERE `ID` = '$id'";
			$result = mysql_query($sql, $link);

			if($result)
				header("Location: viewPhoto.php?photo_id=$id");	
		}else{
			header("Location: index.php");
		}
	}
 ?>