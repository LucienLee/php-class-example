<?php
	// 介紹類似 array 的反函式 list()

	$fruit = array('apple','orange', 'banana');
	echo $fruit[2]."<br>";

	$Price = array('apple' => 100, "orange"=>150, 'banana'=>200);
	echo $Price['orange'] ."<br>";

	list( $fruit1, $fruit2 ) = $fruit;
	echo "$fruit1 <br>";
	echo "$fruit2 <br>";

?>