<?php 
	/*  為了能夠與使用者互動，我們提前教了 GET 參數。
		在執行時的路徑是 http://localhost/ex4.php?input=5
		網址的「input」對應到程式碼中的 $_GET 裡頭的字串。
		$_GET是php內建的變數，用來讀取使用者從網址輸入的參數。
	*/

	$v = $_GET['input'];
	$v = $v +5;
	echo $v;
?>