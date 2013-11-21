<?php
	/*	利用不同的方式定義array，直接設定字串作為索引，
		在用 foreach 印出。
	*/	
	$fruit = array(
		'a'=> 'apple', 
		'b'=> 'banana', 
		'be'=> 'berry',
		'k'=> 'kiwifruit', 
		'm'=> 'mango'
	);
	
	foreach($fruit as $k => $v) {
		echo "k=$k, v=$v <br>";
	}	

?>