<html>

<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
	<form class="form-horizontal" action="del_school.php" method="POST">
	<fieldset>

	<!-- Form Name -->
	<legend>刪除學校</legend>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label"> 學校</label>
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

	<!-- Button -->
	<div class="control-group">
	  <label class="control-label"></label>
	  <div class="controls">
		<button id="singlebutton" name="singlebutton" class="btn btn-danger">刪除</button>
	  </div>
	</div>

	</fieldset>
	</form>

</body>
</html>

<?php
	if (isset($_POST['school'])) {
		$link = mysql_connect('localhost',
		'root', 'root');
		mysql_select_db('users');

		if(!$link) {
			echo '連線失敗';
		}
		$school = $_POST['school'];

		$sql = "DELETE FROM `school` WHERE `school`.`sid` = $school";
		mysql_query('SET NAMES utf8', $link);
		$result = mysql_query($sql, $link);
		if($result){
			header('Location: del_school.php');
		}else{
			mysql_error();
		}
	}
?>