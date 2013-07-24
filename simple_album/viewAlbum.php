<?php 
  require_once("utility.php");
  $link = connectDB();

  $sql = "SELECT * FROM `Photo`";
  $result = mysql_query($sql, $link);
  if(!$result){
    header('Location: index.php');  
  }
  
?>
<?php include('_site_header.php') ?>

  <div class="container">
    <h2>相簿</h2>
    
    <ul class="thumbnails">
      <?php while( $row = mysql_fetch_assoc($result) ){?>
        <li class="span3">
          <a href="./viewPhoto.php?photo_id=<?= $row["ID"] ?>" class="thumbnail">
            <img src="<?= './thumbnail/'.$row['Filename'] ?>" >
          </a>
        </li>
      <?php } ?>
    </ul>   

  </div>
 
<?php include('_site_footer.php') ?>