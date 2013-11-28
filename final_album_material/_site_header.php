<!-- SESSION -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>網路相簿</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-fileupload.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet"></head>

<body>
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
      <div class="container">
        <!-- responsive button -->
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- responsive button end -->
        <a class="brand" href="index.php">網路相簿</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li>
              <a href="listAlbum.php">瀏覽相簿</a>
            </li>
            <!-- after login -->
            <li>
              <a href="myAlbum.php">我的相簿</a>
            </li>
            <!-- after login -->
            <li>
              <a href="signup.php">註冊帳戶</a>
            </li>
          </ul>
          <!-- before login -->
          <form class="navbar-form pull-right" action="login.php" method="post">
            <input class="span2" type="text" name="account" placeholder="帳號">
            <input class="span2" type="password" name="password" placeholder="密碼">
            <button type="submit" class="btn">登入</button>
          </form>
          <!-- after login -->
            <span class="navbar-text pull-right">
              <!-- 親愛的  -->
              <a href="logout.php" class="btn btn-small btn-inverse" style="vertical-align:top;">登出</a>
            </span>
            
          

        </div>
      </div>
    </div>
  </div>