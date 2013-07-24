<?php
/*	利用雙層迴圈來印出階梯形狀的輸出。這裡的 size+=2 是為了做出特殊的迴圈間距。
	原本是從 1,2,3 .. n 現在則變成 1,3,5,7 .. n。
*/

$sizeMax = $_GET['size'];
for($size = 1; $size <= $sizeMax ;$size+=2) {
	for($i = 0;$i < ($sizeMax/2-$size/2); $i++) {
		echo '.';
	}
	for($i = 0;$i < $size; $i++) {
		echo '*';
	}
	echo '<br>';
}
for($j = 0; $j<2;$j++) {
	for($i = 0; $i< $sizeMax/2-1;$i++) {
		echo '.';
	}
	echo '***<br>';
}

/*

.....*
....***
...*****
..*******
.*********
***********
....***
....***	

*/

?>

