<?php
	/*	for 迴圈的複習。印出他是否是被2或3整除。或是沒有被2或3整除。
	*/
	$n = $_GET['input'];
	
	for ($i = 0; $i < $n; $i++) {
		if ($i%2==0) {
			echo $i.' is divisible by 2.<br>';
		} else if ($i%3==0) {
			echo $i.' is divisible by 3.<br>';
		} else {
			echo $i.' is not divisible. <br>';
		}
	}

?>