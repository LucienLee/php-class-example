<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="author" content="Lucien Lee">

	<title>Drinks order</title>
</head>
<body>
	<?php if(!isset($_POST['confirm'])){ ?>
	<form action="practice.php" method="post">
		<table>
			<th>飲料訂購單</th>
			<tr>
				<td>伯爵紅茶</td>
				<td>30</td>
				<td><input type="number" value="0" min="0" name="drink1"></td>
			</tr>
			<tr>
				<td>茉香綠茶</td>
				<td>25</td>
				<td><input type="number" value="0" min="0" name="drink2"></td>
			</tr>
			<tr>
				<td>冬瓜青茶</td>
				<td>20</td>
				<td><input type="number" value="0" min="0" name="drink3"></td>
			</tr>
			<tr>
				<td>凍頂烏龍</td>
				<td>40</td>
				<td><input type="number" value="0" min="0" name="drink4"></td>
			</tr>
			<tr>
				<td>珍珠奶茶</td>
				<td>35</td>
				<td><input type="number" value="0" min="0" name="drink5"></td>
			</tr>
			<tr>
				<td><input type="reset" value="重新購買"></td>
				<td><input type="submit" value="確認訂購"></td>
			</tr>
			<input type="hidden" value="true" name="confirm">
		</table>
	</form>
	<p>飲料數量滿十杯打九折。</p>
	<?php }else{
		$drink1 = $_POST['drink1'];
		$drink2 = $_POST['drink2'];
		$drink3 = $_POST['drink3'];
		$drink4 = $_POST['drink4'];
		$drink5 = $_POST['drink5'];
		
		$num = $drink1 + $drink2 + $drink3 + $drink4 + $drink5;
		$sum = $drink1*30 + $drink2*25 + $drink3*20 + $drink4*40 + $drink5*35;

		if( $num >= 10 ){
			$sum*=0.9;
		}

	?>

	<h3>親愛的顧客，您點的是：</h3>
	<p>伯爵紅茶 <?= $drink1 ?>杯</p>
	<p>茉香綠茶 <?= $drink2 ?>杯</p>
	<p>冬瓜青茶 <?= $drink3 ?>杯</p>
	<p>凍頂烏龍 <?= $drink4 ?>杯</p>
	<p>珍珠奶茶 <?= $drink5 ?>杯</p>
	<?php if( $num  >= 10 ){ ?>
		<p>有<?= $num ?>杯飲料打九折</p>
	<?php } ?>

	<p>總計 <?= ceil($sum) ?>元</p>
	<?php } ?>
</body>
</html>