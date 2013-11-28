<?php 
  require_once("utility.php");
  $link = connectDB();

  if(isset($_GET['albumid'])){
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
<?php include('_site_header.php') ?>

  <div class="container">
    <h2><?= $data['Name'] ?></h2>
    <span class="lead"><?= $data['Owner'] ?></span>

    <?php if( isOwner($id) ){ ?>
    <div class="btn-group pull-right">
      <!-- <a href="" class="btn">新增相片</a> -->
      <!-- <a href="" class="btn">更新相簿</a> -->
      <!-- <a href="" class="btn btn-danger delete-album">刪除相簿</a> -->
    </div>
    <?php } ?>
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
  <?php function js_section(){ ?>
    <script>
      $('.delete-album').click(function(e){
        e.preventDefault();
        if(confirm("確定要刪除嗎？")){
          window.location = $(this).attr('href');
        }
      });
    </script>
  <?php } ?>
<?php include('_site_footer.php') ?>