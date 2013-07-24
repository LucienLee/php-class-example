<?php 
	require_once("utility.php");
	$link = connectDB();

	if (!isset($_GET['photo_id'])) {
		header('Location: index.php');
	}else{
		//刪除檔案
		$id = $_GET['photo_id'];
		$sql = "SELECT `Filename` FROM `Photo` WHERE `ID` = '$id'";
		$result = mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
		$photo_path = realpath("./photo/".$row['Filename']);
		$thumbnail_path = realpath("./thumbnail/".$row['Filename']);

		if(file_exists($photo_path))
			unlink($photo_path);

		if(file_exists($thumbnail_path))
			unlink($thumbnail_path);

		//刪除資料庫資訊
		$sql = "DELETE FROM `Photo` WHERE `ID` = '$id'";
		$result = mysql_query($sql, $link);
		if(!$result){
			header('Location: index.php');	
		}
		header('Location: viewAlbum.php');
		}
?>