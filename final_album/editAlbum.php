<?php include('_site_header.php') ?>
<?php 
  require_once("utility.php");
  $link = connectDB();

  if(isset($_GET['albumid']) && isOwner($_GET['albumid']) ){
    //get album info
    $id = $_GET['albumid'];
    $sql = "SELECT * FROM Album WHERE ID = '$id'";
    $result = mysql_query($sql, $link);

    if( !$result || !mysql_num_rows($result) ){
      header("location: index.php");
    }

    $data = mysql_fetch_assoc($result);

    //get photos
    require 'get_album.php';
    $photos = getPhotos($id);

  }else{
    header('Location: index.php');  
  }
  
?>

<div class="container">
  <form action="update_album.php" method="post">
  	<h2><input type="text" name="name" value="<?= $data['Name'] ?>"></h2>
    <input type="hidden" value="<?=$data['ID']?>" name="albumid">
  	<a href="<?= 'viewAlbum.php?albumid='.$data['ID'] ?>" class="btn">取消更新</a>
	<button type="submit" class="btn btn-primary">確定更新</button>
  </form>
  <span class="lead"><?= $data['Owner'] ?></span>
	
  <ul class="thumbnails photothumb">
    <?php if( $photos ) {
      foreach ($photos as $photo) { ?>
      <li class="span3">
        <a href="./viewPhoto.php?photo_id=<?= $photo["ID"] ?>" class="thumbnail">
          <img src="<?= './thumbnail/'.$photo['Filename'] ?>" >
        </a>
      </li>
    <?php } 
  }?>
  </ul>   

</div>
<?php include('_site_footer.php') ?>