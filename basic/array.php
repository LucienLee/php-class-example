<?php
	/*	使用陣列（array）並使用 for 迴圈印出陣列裡面的值。
		這裡的 array 和 count 都是一個函式，我們將值丟入函式並藉由函式回傳獲得一個值。
		array 函式是丟入若干個字串，他會回傳一個 array 回來。
		count 是丟入一個 array，他會回傳這個 array 的長度。
	*/
	$fruit = array('apple', 'banana', 'berry',
	'kiwifruit', 'mango', 'lemon', 'pear', 'plum');

	$len = count($fruit);
	for($i=0; $i<$len;$i++) {
		echo $fruit[$i].'<br>';
	}

?>