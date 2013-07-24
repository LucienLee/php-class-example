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
              <a href="viewAlbum.php">瀏覽相簿</a>
            </li>
            <li>
              <a href="newPhoto.php">新增相片</a>
            </li>
            <li>
              <a href="#">註冊帳戶</a>
            </li>
          </ul>

          <form class="navbar-form pull-right">
            <input class="span2" type="text" placeholder="帳號">
            <input class="span2" type="password" placeholder="密碼">
            <button type="submit" class="btn">登入</button>
          </form>

        </div>
      </div>
    </div>
  </div>