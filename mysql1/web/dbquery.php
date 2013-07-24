<?php
	$link = mysql_connect('localhost', 
	'root', 'yourpw');
	
	if(!$link) {
		echo '連線失敗';
	} else {
		echo '連線成功';
	}
	$id = $_GET['id'];
	$name = $_GET['name'];
	$sex = $_GET['sex'];
	$address = $_GET['address'];
		
	$sql = "INSERT INTO `users`.`profile` ( `id` ,`name` ,`sex` ,`address`) 
	VALUES ('$id', '$name', '$sex', '$address');";
	mysql_query('SET NAMES utf8');	
	mysql_query($sql, $link);	
	
	/*
	http://localhost/dbquery.php?id=B12312566&name=胖虎&sex=1&address=台北市羅斯福路一段2號
	*/
	
?>