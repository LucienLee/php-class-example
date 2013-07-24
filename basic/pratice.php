<?php
	$student = array('a' => 30 ,'b' => 40,'c' => 90, 'd' => 60,'e' => 55,'f' => 80);
	foreach ($student as $name => $value) {
		echo $name.": ".$value."<br>";
	}
	echo '<hr>';
	foreach ($student as $name => $value) {
		if($value*1.4 < 100)
			$student[$name] = $value*1.4;
		else
			$student[$name] = (100-$value)*0.1 + $value;
	}


	foreach ($student as $name => $value) {
		echo $name.": ".$value."<br>";
	}
	echo '<hr>';

	foreach ($student as $name => $value) {
		$student[$name]= array($value, ($value>=60)?'pass':'failed');
	}

	echo '<pre>';
	print_r($student);
	echo '</pre>';
?>