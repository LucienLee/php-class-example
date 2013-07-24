<?php
/* 藉由 function 把程式碼的片段包起來，
並回傳運算的結果。 */

function check_prime($num) {
	$isPrime = 1;
	for ($i = 2; $i < $num; $i++) {
		if($num%$i==0) {
			$isPrime = 0;
			break;
		}
	}
	return $isPrime;
}	
	
$num = $_GET['num'];
$isPrime = check_prime($num);

if($isPrime==1) {
	echo "$num is a prime";
} else {
	echo "$num is not a prime";
}

?>

