<?php
	function getPhotos($id){
		require_once("utility.php");
		$link = connectDB();

		$photos = array();
		$sql = "SELECT * FROM Photo WHERE AlbumID = '$id'";
		$result = mysql_query($sql, $link);
		if($result){
			while($row = mysql_fetch_assoc($result)){
				array_push($photos, $row);
			}
			return $photos;
		}
	}
?>