<!DOCTYPE html>
<html>

<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
	<header class="page-header">
		<h1>新增店家</h1>
	</header>
	<div class="row">
		<div class="span4 offset2">
		<form class="form-inline" action="add_store.php" method="POST" >
			<input type="text" name="store"  placeholder="店家名字" required="true">
			<button class="btn btn-primary" type="submit">新增</button>
		</form>
		</div>
	</div>
	
	<div class="row">
		<div class="span4 offset2">
			<h3>現有店家</h3>
			<ul>
				<?php
					require_once('get_store.php');
					$stores = get_store();
					foreach ($stores as $store) {
						$name = $store['Name'];
						echo '<li>'.$name.'</li>';
					}
				?>
			</ul>
		</div>
	</div>
</body>
</html>

<?php
	
	if (isset($_POST['store'])) {
		require_once('db.php');
		$link = connectDB('restaurant');

		$store = $_POST['store'];
		$sql = "INSERT INTO `store` (`name`) VALUES ('$store');";

		$result = mysql_query($sql, $link);
		
		if($result){
			header('Location: add_store.php');
		}else{
			mysql_error();
		}
	}
?>