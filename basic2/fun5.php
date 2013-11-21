<?php
/*	這是上禮拜的質數程式。使用者從GET參數輸入數字，
	判斷該數字是不是質數 */

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

