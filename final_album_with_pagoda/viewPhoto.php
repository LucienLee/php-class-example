<?php 
	require_once("utility.php");
	$link = connectDB();
	
	if (!isset($_GET['photo_id'])) {
		header('Location: index.php');
	}

	// Get photo info
	require 'get_photo.php';
	$id = $_GET['photo_id'];
	$row = get_photo($id);
 ?>
<?php include('_site_header.php') ?>

<div class="container">
	<div class="row">
		<div class="span8 detailImg">
			<img src="<?= './photo/'.$row['Filename'] ?>" alt="" class="img-rounded">
		</div>
		<div class="span4 sidebar">
			<div class="well description">
				<h3><?= $row['Name'] ?></h3>
				<p><?= $row['Comment'] ?></p>
			</div>
			<?php if(isOwner($id)){ ?>
			<div class="btn-toolbar">
			<a class="btn" href="editPhoto.php?photo_id=<?= $row['ID'] ?>">更新圖片</a>
			<a class="btn btn-danger delete-img" href="delete_photo.php?photo_id=<?= $row['ID'] ?>">刪除圖片</a>
			</div>
			<?php } ?>
			
		</div>
	</div>
</div>

<?php function js_section(){ ?>
	<script>
		$('.delete-img').click(function(e){
			e.preventDefault;
			if(confirm("確定要刪除嗎？")){
				location.href = e.attr('href');
			};
		});
	</script>
<?php } ?>
<?php include('_site_footer.php') ?>