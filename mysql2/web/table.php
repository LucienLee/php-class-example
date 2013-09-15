<?php
	
	require_once('db.php');
	$link = connectDB('restaurant');
	$sql = "SELECT Food.Name as FName, Store.Name as SName, Address, Price  FROM Food LEFT JOIN Store ON Food.Store = Store.StoreID
			UNION
			SELECT Food.Name as FName, Store.Name as SName, Address, Price  FROM Food RIGHT JOIN Store ON Food.Store = Store.StoreID";

	$result = mysql_query($sql, $link);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>食物</th>
					<th>店家</th>
					<th>地址</th>
					<th>價錢</th>	
				</tr>
			</thead>
			<tbody>
			<?php while($row = mysql_fetch_array($result)) { ?>
					<tr>
						<td><?= $row['FName'] ?></td>
						<td><?= $row['SName'] ?></td>
						<td><?= $row['Address'] ?></td>
						<td><?= $row['Price'] ?></td>
					</tr>
			<?php } ?>
			</tbody>
		</table>
	</body>
</html>