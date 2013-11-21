<?php 
	require_once("utility.php");
	$link = connectDB();

	$account = $_POST['account'];
	$psword = md5($_POST['psword']);
	$name = $_POST['name'];

	if( !empty($account) && !empty($psword) && !empty($name) ){
		$sql ="INSERT INTO User (Account, Password, Name) VALUES ('$account', '$psword', '$name')";
		$result = mysql_query($sql , $link);
		if($result){
			header("location: signup.php?suc=1");
		}else{
			header("location: signup.php?suc=0");
		}
	}else{
		header("location:signup.php ");
	}
 ?>