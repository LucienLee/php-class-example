<?php 
	/*	使用if, else if, else	
	*/
	$v = $_GET['input'];
	
	if($v > 60) {
		echo 'yeah';
	}
	else if ($v == 60) {
		echo 'haha';
	}		
	else {	
		echo 'bye-bye';
	}
			
?>