<?php
	/*	直接修改陣列裡面的數字  */
	$fruit = array('apple', 'banana', 'berry', 'pear', 'mango' );

	$fruit[1] = 'kiwi';
	echo $fruit[1];

	$price = array('apple' => 100, "orange"=>150, 'banana'=>200);
	$price['berry'] = 250;
	echo $price['berry'];	

	
?>