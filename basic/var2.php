<?php
	/*  定義變數，並給與正整數的值。變數可以做簡單的四則運算。 */

	$num1 = 5;
	$num2 = 10;

	$num3 = $num1 + 5;
	$num4 = $num1 + $num2;

	$num5 = $num1;

	echo "num1= $num1 <br>";
	echo "num2= $num2 <br>";
	echo "num3= $num3 <br>";
	echo "num4= $num4 <br>";
	echo "num5++=". $num5++ ."<br>";
	echo "++num5=". ++$num5 ."<br>";
?>