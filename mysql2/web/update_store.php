<!DOCTYPE html>
<html>

<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
	<header class="page-header">
		<h1>更新店家</h1>
	</header>
	<div class="row">
		<div class="span4 offset2">
		<form action="update_store.php" method="POST" >
			<select name="store">
			<?php
				require_once('get_store.php');
				$stores = get_store();
				foreach ($stores as $store) {
					$s = "<option value=".$store['StoreID'].">".$store['Name']."</option>";
					echo $s;
				}
			?>
			</select>
			<input type="text" name="name"  placeholder="店家名字" required="true">
			<input type="text" name="address"  placeholder="店家地址">
			<div class="control">
				<button class="btn btn-primary" type="submit">更新</button>
			</div>	
		</form>
		</div>
	</div>
	
</body>
</html>

<?php
	
	if (isset($_POST['store']) && !empty($_POST['name'])) {
		require_once('db.php');
		$link = connectDB('restaurant');

		$storeID = $_POST['store'];
		$name = $_POST['name'];
		$address = empty($_POST['address'])?'':$_POST['address'];
		// 提醒字串要加引號
		$sql = "UPDATE `Store` SET `Name` = '$name', `Address` = '$address' WHERE `StoreID` = $storeID";
		$result = mysql_query($sql, $link);

		
		if($result){
			header('Location: update_store.php');
		}else{
			mysql_error();
		}
	}
?>