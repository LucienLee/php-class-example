<?php 
	require_once("utility.php");
	$link = connectDB();

	if( !empty($_FILES['photo']['name'][0]) && isset($_POST['albumid']) && isOwner($_POST['albumid']) ){
		
		$comment = $_POST["comment"];
		$albumid = $_POST["albumid"];

		foreach ($_FILES['photo']['name'] as $key => $name ) {
			// 臨時檔名
			$file_tmp = $_FILES['photo']['tmp_name'][$key];
			// 附檔名
			$ext = strtolower(strrchr($name, "."));
			// 最終檔名
			$filename = uniqid() . ".jpg";

			$photo_filename = "./photo/$filename";
			$thumbnail_filename = "./thumbnail/$filename";

			resize_photo($file_tmp, $ext, $photo_filename, 720);
			resize_photo($file_tmp, $ext, $thumbnail_filename, 270);

			$sql = "INSERT INTO Photo(Name, Filename, Comment, AlbumID) VALUES('$name', '$filename', '$comment', '$albumid')";
			$result = mysql_query($sql,$link);
			
			if($result){
				//mysql_insert_id() 會回傳剛剛成功插入的record的id
				header("Location: viewPhoto.php?photo_id=".mysql_insert_id());
			}else{
				header("Location: newPhoto.php");
			}
		}
	}else{
		header("Location: newPhoto.php?albumid=".$_POST['albumid']);
	}

?>