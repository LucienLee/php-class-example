<?php include('_site_header.php'); ?>

  <div class="container">
    <?php if(isset($_SESSION['user'])){ ?>
    <!-- Add bootstrap accordion -->
    <?php } ?>
    
    <?php
      require 'list_album.php';
      $datas = all_album();
    ?>
    <ul class="thumbnails">

      <?php foreach ($datas as $data) { ?>
      <li class="span3">
        <a href="viewAlbum.php?albumid=<?= $data['ID'] ?>" class="thumbnail">
          <?php if(empty($data['Filename'])) {?>
            <img src="http://www.placehold.it/260x180/EFEFEF/AAAAAA&text=no+image">
          <?php }else{ ?>
            <img src="<?= 'thumbnail/'.$data['Filename'] ?>">
          <?php } ?>
          <h3 class="caption"><?= $data['Name'] ?></h3>
        </a>
      </li>
      <?php } ?>

    </ul>
  </div>

 <?php include('_site_footer.php'); ?>