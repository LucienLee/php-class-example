<?php
	$number = $_POST['number'];

	$isPrime = 1;
	for($i=2;$i<$number;$i++) {
		if($number%$i==0) {
			$isPrime = 0;
		}
	}
	if($isPrime == 1) {
		echo "$number is a prime";
	}
	else {
		echo "$number is not prime";
	}
?>