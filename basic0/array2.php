<?php
	// 介紹類似 array 的反函式 list()

	$fruit = array('apple', 'banana', 'berry', 'pear', 'mango' );
	echo $fruit[2]."<br>";

	list( $fruit1, $fruit2 ) = $fruit;
	echo "$fruit1 <br>";
	echo "$fruit2 <br>";

?>