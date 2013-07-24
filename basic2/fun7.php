<?php
/* function 亦可以不回傳值，直接在裡面把輸出印出來。*/

function check_prime($num) {
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
}
	
$num = $_GET['num'];
check_prime($num);

?>

