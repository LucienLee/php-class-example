<?php
	/*  從GET參數讀入數字n，並利用 for 迴圈實作 n 階層。
		使用「"」所括住的字串會自動把變數轉換成數字。
	*/
	$n = $_GET['input'];
	$answer = 1;
	
	for( $i=1 ; $i<=$n ; $i++ ) {
		$answer = $answer * $i;		
	}
	
	echo "$n! = $answer";
?>