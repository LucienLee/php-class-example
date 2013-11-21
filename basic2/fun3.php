<?php 

function find_max($num1, $num2) {
	if($num1 > $num2) {
		return $num1;
	}
	else {
		return $num2;
	}
}

$max = find_max(5,10);
echo $max;


?>