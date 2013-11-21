<?php 
	require 'get_photo.php';

	if (!isset($_GET['photo_id'])) {
		header('Location: index.php');
	}
	$id = $_GET['photo_id'];
	$row = get_photo($id);
?>

<?php include('_site_header.php') ?>
<div class="container">
	<div class="row">
		<div class="span8 detailImg">
			<img src="<?= './photo/'.$row['Filename'] ?>" class="img-rounded">
		</div>
		<div class="span4 sidebar">
			<!-- change view as from -->
			<form action="update_photo.php" method="post">
				<div class="well description">
					<input type="text" value="<?= $row['Name'] ?>" name="photo_name">
					<textarea name="comment" rows="10"><?= $row['Comment'] ?></textarea>
				</div>
				<div class="btn-toolbar">
					<a class="btn" href="viewPhoto.php?photo_id=<?= $row['ID'] ?>">取消更新</a>
					<button class="btn btn-primary" type="submit">確定更新</button>
					<input type="hidden" name="id" value="<?= $row['ID'] ?>">
				</div>
			</form>
		</div>
	</div>
</div>
<?php include('_site_footer.php') ?>