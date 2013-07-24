<?php 
	/*  從網址列讀取兩個參數的寫法
		http://localhost/ex5.php?input=100&input2=200
	*/
	$v1 = $_GET['input'];
	$v2 = $_GET['input2'];
	echo $v1+$v2;
	
?>