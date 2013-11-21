<!-- 利用 php 將 html 程式碼輸出。結合質數程式碼。-->

<?php
function check_prime($num) {
	$isPrime = 1;
	for ($i = 2; $i < $num; $i++) {
		if($num%$i==0) {
			$isPrime = 0;
			break;
		}
	}
	return $isPrime;
}
$num = $_GET['num'];
$isprime = check_prime($num);
?>

<html>
	<head>
		<title> Prime </title>
	</head>
	<body>
		<?php
			if($isprime) {
				echo "<h2>你輸入的數字 $num 是質數 <h2>";
			} else {
				echo "<h2>你輸入的數字 $num 不是質數 <h2>";			
			}			
		?>
	</body>
</html>