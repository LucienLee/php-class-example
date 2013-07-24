<?php

function connectDB() {
	$link = mysql_connect("localhost", "root", "root");
	mysql_query('SET NAMES utf8');
	mysql_select_db('mydb');
	return $link;
}


?>