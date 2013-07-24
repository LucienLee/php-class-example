<?php

	$fruit = array('apple','orange', 'banana');
	$price = array(100, 150, 200);

	$combine = array_combine($fruit, $price);
	foreach ($combine as $key => $value) {
		echo $key, $value,"<br>";
	}

?>