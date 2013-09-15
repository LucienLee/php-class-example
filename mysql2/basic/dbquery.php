<?php
	$link = mysql_connect('localhost', 'root', 'yourpw');
	
	if(!$link) {
		echo '連線失敗';
	} else {
		echo '連線成功';
	}

	$name = $_GET['name'];
	$price = $_GET['price'];
	$store = $_GET['store'];
		
	$sql = "INSERT INTO `restaurant`.`Food` ( `Name`, `Price`,`Store`) 
	VALUES ('$name', '$sex', '$store');";
	mysql_query('SET NAMES utf8');	
	mysql_query($sql, $link);	
	
	/*
	http://localhost/dbquery.php?name=檸檬紅茶&sprice=23&store=2
	*/
	
?>