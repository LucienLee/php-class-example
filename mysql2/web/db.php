<?php 
function connectDB( $dbname ) {
	$link = mysql_connect("localhost", "root", "root");
	mysql_query('SET NAMES utf8');
	mysql_select_db($dbname);

	if(!$link) {
		echo '連線失敗';
	}else{
		return $link;
	}
}

?>