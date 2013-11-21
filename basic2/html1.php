<!-- 利用 php 將 html 程式碼輸出 -->
<html>
	<head>
		<title> Prime </title>
	</head>
	<body>
		<?php
			$num = $_GET['num'];
			echo "<h2>你輸入的數字是 $num<h2>";
		?>
	</body>
</html>