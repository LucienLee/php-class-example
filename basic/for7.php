<?php
	/*	使用兩層迴圈，來判斷1到$numMax 之間有哪些數字是質數。
	*/
	$numMax = $_GET['num'];

	for ($num = 2; $num <= $numMax; $num++) {
		$isPrime = 1;
		for ($i = 2; $i < $num; $i++) {
			if($num%$i==0) { 
//				echo "$num is divisible by $i<br>";
				$isPrime = 0;
			}		
		}
		if($isPrime==1) {
			echo "$num is a prime<br>";
		} else {
//			echo "$num is not a prime<br>";
		}
	}
?>