<?php
	/* 	使用一些操作 array的函式 
		更多函式可以參考 http://php.net/manual/en/ref.array.php 這個網址
	*/
	$fruit = array('apple', 'banana', 'berry',
	'kiwifruit', 'mango', 'lemon', 'pear', 'plum');
	
	array_pop($fruit);
	$result = array_push($fruit, 'orange');	
	
	$len = count($fruit);
	for($i=0; $i<$len;$i++) {
		echo $fruit[$i].'<br>';		
	}
	
?>