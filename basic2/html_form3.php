<?php	

	$number = $_POST['number'];
	if( isset($number) == true) {	
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
	
	print_html();
	
	function print_html() {
		echo '
		<html>
		<head>
			<title> Prime </title>
		</head>

		<body>
			<form method="POST" action="html_form3.php">
				input <input type="text" name="number" size=40><br>
				<input type="submit" value="submit">
			</form>
		
		</body>
		</html>';
	}
	
?>