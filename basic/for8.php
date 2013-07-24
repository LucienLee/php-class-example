<?php
	/*	使用 break 來離開迴圈。因為在判斷n是不是質數的過程中，
		只要有一個數字可以整除n，則代表n不是質數，所以當 if 發生時，就離開for迴圈。
	*/
	$num = $_GET['num'];
	$isPrime = 1;
	for ($i = 2; $i < $num; $i++) {
		if($num%$i==0) {
			$isPrime = 0;
			break;
		}
	}
	if($isPrime==1) {
		echo "$num is a prime";
	} else {
		echo "$num is not a prime";
	}
?>

