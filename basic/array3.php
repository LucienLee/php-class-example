<?php
	/*	直接修改陣列裡面的數字  */
	$fruit = array('apple', 'banana', 'berry',
	'kiwifruit', 'mango', 'lemon', 'pear', 'plum');

	$len = count($fruit);
	for($i=0; $i<$len;$i++) {
		$fruit[$i] = $fruit[$i].','.$fruit[$i];
	}

	for($i=0; $i<$len;$i++) {
		echo $fruit[$i].'<br>';		
	}
	
?>