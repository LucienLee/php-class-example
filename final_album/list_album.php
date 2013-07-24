<?php 
	function all_album(){

		require_once("utility.php");
		$link = connectDB();
		$datas = array();
		$sql = "SELECT  a.*, p.Filename  FROM `Album` a LEFT JOIN `Photo` p ON a.ID = p.AlbumID GROUP BY a.ID" ;
		$result = mysql_query($sql, $link);
		while( $row = mysql_fetch_assoc($result) ){
			array_push($datas,$row);
		}

		return $datas;

	}

	function my_album($user){

		require_once("utility.php");
		$link = connectDB();
		$datas = array();
		$sql = "SELECT a.*, p.Filename FROM `Album` a LEFT JOIN `Photo` p ON a.ID = p.AlbumID WHERE a.Owner = '$user' GROUP BY a.ID";
		$result = mysql_query($sql, $link);
		while( $row = mysql_fetch_assoc($result) ){
			array_push($datas,$row);
		}

		return $datas;

	}
?>