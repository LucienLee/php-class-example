<?php

function get_store() {
	require_once('db.php');
	$link = connectDB('restaurant');

	$sql = "SELECT * FROM `Store`";
	$result = mysql_query($sql, $link);	

	$stores = array();	
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		array_push($stores, $row);
	}
	return $stores;
}


// echo '<pre>';
// print_r(get_store());
// echo '</pre>';

?>