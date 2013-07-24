<?php
	/*	利用不同的方式定義array，直接設定字串作為索引，
		並觀察若以此方式宣告陣列，使用陣列操作的函式會有什麼樣的變化
	*/
	$fruit = array(
		'a'=> 'apple', 
		'b'=> 'banana', 
		'be'=> 'berry',
		'k'=> 'kiwifruit', 
		'm'=> 'mango'
	);
	
	array_push($fruit, 'orange');
	$fruit['l'] = 'lemon';
	
	echo '<pre>';
	print_r($fruit);
	echo '</pre>';
?>