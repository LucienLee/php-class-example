<?php 
	/*  從GET參數讀入數字v，並判斷從 1~v 之間有哪些數字既 被7整除 或 被2整除 
	*/
	$v = $_GET['input'];
	for($i=1;$i<=$v;$i++) {
		if($i%7==0 || $i%2==0) {			
			echo "$i <br>";
		}
	}
	
?>