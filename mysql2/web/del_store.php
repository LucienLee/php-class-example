<!DOCTYPE html>
<html>

<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
	<header class="page-header">
		<h1>刪除店家</h1>
	</header>
	<div class="row">
		<div class="span4 offset2">
		<form class="form-inline" action="del_store.php" method="POST" >
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
			<button class="btn btn-danger" type="submit">刪除</button>
		</form>
		</div>
	</div>
	
</body>
</html>

<?php
	
	if (isset($_POST['store'])) {
		require_once('db.php');
		$link = connectDB('restaurant');

		$storeID = $_POST['store'];
		$sql = "DELETE From `Store` WHERE `StoreID` = $storeID";

		$result = mysql_query($sql, $link);
		
		if($result){
			header('Location: del_store.php');
		}else{
			mysql_error();
		}
	}
?>