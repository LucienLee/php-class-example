<html>

<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
	<form class="form-horizontal" action="add_school.php" method="POST" >
	<fieldset>

	<!-- Form Name -->
	<legend>新增學校</legend>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label">現有的學校</label>
	  <div class="controls">
		<select id="exist_school" name="exist_school" class="input-xlarge">
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

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label">學校</label>
	  <div class="controls">
		<input id="school" name="school" placeholder="" class="input-xlarge" required="" type="text">

	  </div>
	</div>

	<!-- Button -->
	<div class="control-group">
	  <label class="control-label"></label>
	  <div class="controls">
		<button id="singlebutton" name="singlebutton" class="btn btn-primary">新增</button>
	  </div>
	</div>

	</fieldset>
	</form>


</body>
</html>

<?php
	if (isset($_POST['school'])) {
		$link = mysql_connect('localhost','root', 'youpw');

		if(!$link) {
			echo '連線失敗';
		}
		$school = $_POST['school'];
		$sql = "INSERT INTO `users`.`school` (`name`)VALUES ('$school');";

		mysql_query('SET NAMES utf8');
		$result = mysql_query($sql, $link);
		if($result){
			header('Location: del_school.php');
		}else{
			mysql_error();
		}
	}
?>