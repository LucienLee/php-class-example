<?php 
	/*  定義變數。「=」符號代表將「=」右邊的值傳給左邊的變數 
		定義字串變數，字串要用兩個「'」括起來，或者是用兩個「"」括起來*/
	$var1 = 'hello';
	$var2 = 'world';
	
	$var3 = $var1;
	$var1 = $var2;
	$var2 = $var3;
	
	echo $var1;
	echo $var2;
?>