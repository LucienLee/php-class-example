<?php 
	$v = $_GET['input'];
	
	if($v >= 90) {
		echo 'A+';
	} else if($v >= 85) {
		echo 'A';
	} else if($v >= 80) {
		echo 'A-';
	} else if($v >= 77) {
		echo 'B+';
	} else if($v >= 73) {
		echo 'B';
	} else if($v >= 70) {
		echo 'B-';
	} else if($v >= 67) {
		echo 'C+';
	} else if($v >= 63) {
		echo 'C';
	} else if($v >= 60) {
		echo 'C-';
	} else {
		echo 'F';
	}
			
?>