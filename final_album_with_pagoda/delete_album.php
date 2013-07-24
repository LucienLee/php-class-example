<?php 
	require_once("utility.php");
	$link = connectDB();

	if (!isset($_GET['albumid']) || !isOwner($_GET['albumid'])) {
		header('Location: index.php');
	}

	//刪除檔案
	$id = $_GET['albumid'];
	$sql = "SELECT `Filename` FROM `Photo` WHERE `AlbumID` = '$id'";
	$result = mysql_query($sql, $link);
	while( $row = mysql_fetch_assoc($result) ){
		$photo_path = realpath("./photo/".$row['Filename']);
		$thumbnail_path = realpath("./thumbnail/".$row['Filename']);

		if(file_exists($photo_path))
			unlink($photo_path);

		if(file_exists($thumbnail_path))
			unlink($thumbnail_path);
	}
	//刪除資料庫資訊
	$sql = "DELETE FROM `Photo` WHERE `AlbumID` = '$id'";
	$result = mysql_query($sql, $link);

	$sql = "DELETE FROM `Album` WHERE `ID` = $id";
	$result = mysql_query($sql, $link);

	header("location:index.php");
?>