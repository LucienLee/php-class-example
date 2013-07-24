<?php include('_site_header.php') ?>

  <div class="container">
    <div class="row">
      <div class="span6 offset3 well">
		
    <?php if( isset($_GET['suc']) && $_GET['suc'] == 0 ){ ?>
      <div class="alert alert-error">新增帳號失敗</div>
    <?php } ?>

		<?php if( !isset($_GET['suc']) || $_GET['suc'] == 0){ ?>
        <h3>註冊</h3>
        <form class="form-horizontal" action="create_user.php" method="post">
        	<div class="control-group">
	          <label class="control-label" for="account">帳號</label>
	          <div class="controls">
    	      	<input type="text" name="account">
    	      </div>
    	    </div>
    	    <div class="control-group">
          		<label class="control-label" for="psword">密碼</label>
          		<div class="controls">
          			<input type="password" name="psword">
          		</div>
          	</div>
          	<div class="control-group">
          		<label class="control-label" for="name">姓名</label>
          		<div class="controls">
          			<input type="text" name="name">
          		</div>
			</div>
			<div class="control-group">
			    <div class="controls">
          			<input class="btn" type="reset" value="取消重填">
          			<input class="btn btn-primary" type="submit" value="確定註冊">
          		</div>
          	</div>
        </form>
        <?php }elseif($_GET['suc'] == 1){ ?>
			<div class="alert alert-success">
				成功註冊！請登入來新增自己的相簿。
			</div>
        <?php } ?>
      </div>
      <div class="span2"></div>
    </div>

  </div>

<?php include('_site_footer.php') ?>