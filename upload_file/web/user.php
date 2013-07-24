<?php
require_once('utility.php');
class User {
	public $uid;
	public $account;	
	public $email;
	private $password;

	function __construct($account, $password) {
		$this->account = $account;		
		if ($password == '' || isset($password)==false ) {
			$this->password = User::genPassword();
		}
		else {
			$this->password = $password;
		}
	}
	
	public function printUser() {
		$uid = $this->uid;
		$account = $this->account;
		$email = $this->email;
		$password = $this->password;
		echo "uid=$uid, account=$account, email=$email, password=$password <br>";	
	}
	
	public function changePassword($newPassword) {
		$this->password = $newPassword;
	}
	
	public static function genPassword() {
		return rand(10000, 99999);	
	}

	public function login() {
		$link = connectDB();
		$acc = $this->account;
		$pass = $this->password;
		$sql = "SELECT `account` , `password` FROM `users` WHERE `account` = '$acc' AND `password` = '$pass'";
		
		$result = mysql_query($sql, $link);
		$row = mysql_fetch_array($result);
		
		if($row) {
			return true;
		} else {
			return false;
		}		
	}	
}

$acc = $_POST['account'];
$pass = $_POST['password'];

if ( isset($acc) && isset($pass) ) {
	$userObject = new User($acc, $pass );
	if ($userObject->login() ) {
		header('Location: upload.php');
	}
}

/*
$userObject1 = new User('test', 'abc');
$userObject1->uid = 1;
$userObject1->email = 'test@gmail.com';
$userObject1->changePassword('123555');

$userObject1->printUser();
echo '--------<br><br>';

$userObject2 = new User('test2', '');
$userObject2->uid = 1;
$userObject2->email = 'test2@gmail.com';
$userObject2->printUser();
*/
?>

<html>

<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>

	<form class="form-horizontal" action="user.php" method="POST">
	<fieldset>

	<!-- Form Name -->
	<legend>Login</legend>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label">account</label>
	  <div class="controls">
		<input id="account" name="account" placeholder="account" class="input-xlarge" type="text">
		
	  </div>
	</div>

	<!-- Password input-->
	<div class="control-group">
	  <label class="control-label">password</label>
	  <div class="controls">
		<input id="password" name="password" placeholder="password" class="input-xlarge" type="password">
		
	  </div>
	</div>

	<!-- Button -->
	<div class="control-group">
	  <label class="control-label"></label>
	  <div class="controls">
		<button id="" name="" class="btn btn-primary">login</button>
	  </div>
	</div>

	</fieldset>
	</form>


</body>
</html>