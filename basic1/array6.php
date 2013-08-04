<?php
	/*	利用不同的方式定義array，直接設定數字作為索引，
		並觀察若以此方式宣告陣列，使用陣列操作的函式會有什麼樣的變化
	*/
	$fruit = array(
		10=> 'apple',
		-5=> 'banana',
		-1=> 'berry',
		15=> 'kiwifruit',
		9=> 'mango'
	);

	array_push($fruit, 'orange');
	$fruit[2] = 'lemon';
	array_push($fruit, 'peer');

	//echo push result
	//<pre> 按原文顯示標籤，會乖乖顯示空格、斷行
	echo '<pre>';
	print_r($fruit);
	echo '</pre>';

	//echo pop result
	array_pop($fruit);
	echo '<pre>';
	print_r($fruit);
	echo '</pre>';

?>