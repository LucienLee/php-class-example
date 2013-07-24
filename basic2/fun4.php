<?php 
	function find_max($num1, $num2) {
		if($num1 > $num2)
			return $num1;
		else 
			return $num2;
	}

	$stu = array( 
				array(51,34,33,27,90) , 
				array(61,54,43,77,19) ,
				array(92,38,36,76,95)
			);
	$max = 0;
	foreach($stu as $scores) {				
		foreach ($scores as $score) {
			echo $score;			
			$max = find_max($score, $max);
			echo '<br>';	
		}
		echo '--------<br>';				
	}	
	echo "max score = $max <br>";
?>