<?php
	$link = mysql_connect('localhost', 'root', 'root');
	if(!$link) {
		echo '連線失敗';
	}
	mysql_query('SET NAMES utf8');
	mysql_select_db("Message_Board",$link);
	$sql = "SELECT * FROM `message`";
	$result = mysql_query($sql, $link);

	$messages = array();
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		array_push($messages, $row);
	}
	//新增部分
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$content = $_POST['content'];
		$date =  date('Y-m-d H:i:s');
		$sql = "INSERT INTO`message` (`name`, `text`, `time`) VALUE ( '$name', '$content', '$date')";
		$result = mysql_query($sql, $link);

		if($result)
			header('Location: practice.php');
		else
			echo mysql_error();
	}
	//刪除部分
	if(isset($_GET['delete'])){
		$target = $_GET['delete'];
		$sql = "DELETE FROM `message` WHERE `id` = '$target'";
		$result = mysql_query($sql, $link);

		if($result)
			header('Location: practice.php');
		else
			echo mysql_error();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="author" content="Lucien Lee">
	<link rel="stylesheet" href="css/bootstrap.css">
	<style>
		.meta-title td{vertical-align: middle;}
		.meta-title span{
			line-height: 30px;
		}
		textarea{
			width: 90%;
			resize:none;
		}
	</style>
	<title>留言板</title>
</head>
<body>
	<!-- 導覽列 -->
	<div class="navbar">
	  <div class="navbar-inner">
	    <a class="brand" href="#">留言板練習</a>
	  </div>
	</div>



	<div class="container">
		<div class="well">
			<form action="practice.php" method="POST">
				<label>姓名：
					<input type="text" name="name">
				</label>
				<label>內容：
					<textarea rows="6" name="content"></textarea>
				</label>
				<button type="reset" class="btn">清除重填</button>
				<button type="submit" class="btn btn-primary">送出留言</button>
			</form>
		</div>


		<table class="table table-bordered">
			<?php foreach ($messages as $message) { ?>
			<tr class="meta-title">
				<td>留言者： <?= $message['name'] ?></td>
				<td>
					<span>時間： <?= $message['time'] ?></span>
					<a href="practice.php?delete=<?= $message['id'] ?>" class="btn btn-danger pull-right">刪除留言</a>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<?= $message['text'] ?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>

</body>
</html>