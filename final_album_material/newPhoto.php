<?php include('_site_header.php') ?>
<?php 
  //濾掉奇怪的人
  require_once 'utility.php';
  if (!isset( $_GET['albumid'] ) || /*valid owner*/ ) ) {
    header("location: index.php");
  }
?>

  <div class="container">
    <div class="row">
      <div class="span6 offset3 well">

        <h3>新增相片</h3>
        <form class="photo-form" action="create_photo.php" method="post" enctype="multipart/form-data">
          <label for="comment">圖片描述</label>
          <textarea rows="6" name="comment" id="comment"></textarea>
          <!-- jasny file upload -->
          <div class="fileupload fileupload-new" data-provides="fileupload">
            <div style="margin-bottom: 10px;">
              <span class="btn btn-file">
                <span class="fileupload-new">選取圖片</span>
                <span class="fileupload-exists">重選</span>
                <input type="file" name="photo[]"/>
              </span>
              <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">移除</a>
            </div>
            <div class="fileupload-new thumbnail" style="width: 210px; height: 160px;">
              <img src="http://www.placehold.it/210x160/EFEFEF/AAAAAA&text=no+image" />
            </div>
            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 210px; max-height: 160px; line-height: 20px;"></div>
          </div>
          <input type="hidden" name="albumid" value="<?= $_GET['albumid'] ?>">
          <input class="btn btn-large btn-primary" type="submit" value="上傳照片">
        </form>
      </div>

    </div>

  </div>

<?php include('_site_footer.php') ?>