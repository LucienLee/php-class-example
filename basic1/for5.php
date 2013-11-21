<?php
	/*	從GET讀入一個數字，判斷是不是質數。
		判斷一個數字n 是不是質數的方法是，枚舉從2到n-1是不是有數字可以整除n。
		在進入 for 迴圈之前，我們設定一個變數 $isPrime 為1，假設這個數字是質數。
		若在過程中有出現整除的數字，則把 $isPrime 設為0。
		最後用 $isPrime 的值來判斷輸入的數字是不是質數。
	*/
	$num = $_GET['num'];
	$isPrime = 1;
	for ($i = 2; $i < $num; $i++) {
		if($num%$i==0) { 
			echo "$num is divisible by $i<br>";
			$isPrime = 0;
		}		
	}
	if($isPrime==1) {
		echo "$num is a prime";
	} else {
		echo "$num is not a prime";
	}
?>

