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
		// delete File
	}
	//刪除資料庫資訊
	

	header("location: listAlbum.php");
?>