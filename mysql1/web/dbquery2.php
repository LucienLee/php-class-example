<?php
	$link = mysql_connect('localhost',
	'root', 'yourpw');

	if(!$link) {
		echo '連線失敗';
	} else {
		echo '連線成功';
	}
	// mysql_select_db("users",$link);
	// $sql = "SELECT * FROM `profile`";

	$sql = "SELECT * FROM `users`.`profile`";
	mysql_query('SET NAMES utf8');
	$result = mysql_query($sql, $link);

	//try MYSQL_ASSOC, MYSQL_NUM, MYSQL_BOTH
	echo '<pre>';
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		print_r($row);
	}
	echo '</pre>';
?>