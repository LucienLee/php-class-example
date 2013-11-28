<?php 
	function get_photo($id){
		require_once("utility.php");
		$link = connectDB();

		$sql = "SELECT * FROM `Photo` WHERE `ID` = '$id'";
		$result = mysql_query($sql, $link);
		if( !$result || !mysql_num_rows($result) ){
			header('Location: index.php');	
		}

		$row = mysql_fetch_assoc($result);
		return $row;
	}
 ?>