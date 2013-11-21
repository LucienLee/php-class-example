<?php	
	//判斷表單送出前後的方法：在表單裡藏一個 hidden 的 input，利用 isset 來判斷。

	$number = $_POST['number'];
	if(isset($_POST['check'])){	
		$isPrime = 1;
		for($i=2;$i<$number;$i++) {
			if($number%$i==0) {
				$isPrime = 0;
			}
		}
		if($isPrime == 1) {
			echo "$number is a prime";
		}
		else {
			echo "$number is not prime";
		}
	}
	
?>	
	
	
<html>
<head>
	<title> Prime </title>
</head>

<body>
	<form method="POST" action="html_form3.php">
		input <input type="text" name="number" size=40><br>
		<input type="submit" value="submit">
		<input type="hidden" name="check" value="1">
	</form>

</body>
</html>
	
	
