<?php
	$link = mysql_connect('localhost', 
	'root', 'root');

	if(!$link) {
		echo '連線失敗';
	} else {
		echo '連線成功';
	}

?>