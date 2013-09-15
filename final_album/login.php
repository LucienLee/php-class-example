<?php 
	require_once("utility.php");
	$link = connectDB();

	if( !empty($_POST['account']) && !empty($_POST['password']) ){
		
		$account = $_POST['account'];
		$password = md5($_POST['password']);
		
		$sql = "SELECT * FROM User WHERE Account = '$account' AND Password = '$password'";
		$result = mysql_query($sql, $link);
		if( mysql_num_rows($result) == 0 ){
			header("location: index.php");
		}else{
			session_start();
			$_SESSION['user'] = mysql_result($result, 0, "Account");
			$_SESSION['name'] = mysql_result($result, 0, "Name");
			header("location: myAlbum.php");
		}
	}else{
		header("location: index.php");
	}

	
?>