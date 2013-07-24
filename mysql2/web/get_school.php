<?php

function get_school() {
	$link = mysql_connect('localhost', 
	'root', 'youpw');

	if(!$link) {
		echo '連線失敗';
	}

	$sql = "SELECT * FROM `users`.`school`";
	mysql_query('SET NAMES utf8');
	$result = mysql_query($sql, $link);	

	$schools = array();	
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		array_push($schools, $row);
	}
	return $schools;
}

/*
echo '<pre>';
print_r(get_school());
echo '</pre>';
*/
?>