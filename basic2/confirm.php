<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>確認頁面</title>
</head>
<body>
	<?php
		$name = $_POST['user'] ;
		$email = $_POST['email'];
		if( isset($_POST["page"]))
			$age = $_POST['age'];
		else
			$age = "NO DATA!";
		if( isset($_POST['phone']) ){
			$phone = $_POST['phone'];
		}else{
			$phone = array();
		}
		$number = $_POST['number'];
		$other = $_POST['other'];

		switch ($age) {
			case 'age1':
				$age = "未滿20";
				break;
			case 'age2':
				$age = "20~29";
				break;
			case 'age3':
				$age = "30~39";
				break;
			case 'age4':
				$age = "40~49";
				break;
			case 'age5':
				$age = "超過50";
				break;
		}
	?>
	<p><?= $name ?> 你好！你的資訊如下</p>
	<p>電子信箱：<?= $email ?></p>
	<p>年紀：<?= $age ?></p>
	<p>用過的手機牌子：</p>
	<?php foreach ($phone as $value) { ?>
		<p><?= $value ?></p>
	<?php } ?>
	<br>
	<p>使用的門號：<?= $number ?></p>
	<p>其他意見：<?= $other ?></p>


</body>
</html>