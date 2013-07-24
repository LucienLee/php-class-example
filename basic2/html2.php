<!-- 利用 php 將 html 程式碼輸出 -->

<?php
	$num = $_GET['num'];
?>

<html>
	<head>
		<title> Prime </title>
	</head>
	<body>
		<h2>你輸入的數字是 <?php echo $num; ?> <h2>
	</body>
</html>