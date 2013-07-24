<?php include('_site_header.php'); ?>

  <div class="container">
    <?php if(isset($_SESSION['user'])){ ?>
    <div class="accordion">
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            新增相簿
          </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse">
          <div class="accordion-inner">
            
            <form class="form-inline" action="create_album.php" method="post">
              <label for="name">相簿名稱</label>
              <input type="text" name="album_name" id="name" placeholder="">
              <input class="btn btn-primary" type="submit" value="新增">
            </form>

          </div>
        </div>
      </div>
    </div>
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