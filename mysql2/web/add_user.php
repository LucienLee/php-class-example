<?php

	if (isset($_POST['id']) &&
		isset($_POST['name']) &&
		isset($_POST['sex']) &&
		isset($_POST['address']) ) {
		$link = mysql_connect('localhost', 'root', 'youpw');

		if(!$link) {
			echo '連線失敗';
		}
		$id = $_POST['id'];
		$name = $_POST['name'];
		$sex = $_POST['sex'];
		$address = $_POST['address'];
		$school = $_POST['school'];

		$sql = "INSERT INTO `users`.`profile` (	`id` ,`name` ,`sex`, `school`, `address`)
		VALUES ('$id', '$name', '$sex', '$school', '$address' );";
		mysql_query('SET NAMES utf8');
		mysql_query($sql, $link);
		header( 'Location: table.php' ) ;
	}
?>

<html>

<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
	<form class="form-horizontal" action="add_user.php" method="POST" >
	<fieldset>

	<!-- Form Name -->
	<legend>新增使用者</legend>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label">身分證字號</label>
	  <div class="controls">
		<input id="id" name="id" placeholder="EX: E124556678" class="input-xlarge" required="" type="text">

	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label">姓名</label>
	  <div class="controls">
		<input id="name" name="name" placeholder="EX: 王曉明" class="input-xlarge" required="" type="text">

	  </div>
	</div>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label">性別</label>
	  <div class="controls">
		<select id="sex" name="sex" class="input-xlarge">
		  <option value="1">男</option>
		  <option value="2">女</option>
		  <option value="3">其他</option>
		</select>
	  </div>
	</div>

		<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label">學校</label>
	  <div class="controls">
		<select id="school" name="school" class="input-xlarge">
		<?php
			require_once('get_school.php');
			$schools = get_school();
			foreach ($schools as $school) {
				$sid = $school['sid'];
				$name = $school['name'];
				$s = "<option value=\"$sid\">$name</option>";
				echo $s;
			}
		?>
		</select>
	  </div>
	</div>


	<!-- Textarea -->
	<div class="control-group">
	  <label class="control-label">地址</label>
	  <div class="controls">
		<textarea id="address" name="address">default text</textarea>
	  </div>
	</div>

	<!-- Button -->
	<div class="control-group">
	  <label class="control-label"></label>
	  <div class="controls">
		<button id="singlebutton" name="singlebutton" class="btn btn-primary">送出</button>
	  </div>
	</div>

	</fieldset>
	</form>

</body>
</html>
