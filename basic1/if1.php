<?php 

	/* 	從網址讀入一個數字，並用if判斷
		http://localhost/ex6.php?input=100
	*/

	$v = $_GET['input'];
	
	if($v < 60) {
		echo 'bye bye';
	}
	
	if($v > 60) {
		echo 'yeah';
	}
	
	if($v == 60) {
		echo 'hahaha';
	}
		
?>