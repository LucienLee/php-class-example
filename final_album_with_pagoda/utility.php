<?php

function connectDB() {
	$noDatabase = true;
  if (isset($_SERVER['DB1_HOST']) && isset($_SERVER['DB1_USER']) && isset($_SERVER['DB1_PASS']) && isset($_SERVER['DB1_NAME'])) {
    $link = mysql_connect($_SERVER['DB1_HOST'], $_SERVER['DB1_USER'], $_SERVER['DB1_PASS']);
    if (!$link) {
      $noDatabase = true;
      die('Could not connect: ' . mysql_error());
    }
    $noDatabase = !mysql_select_db($_SERVER['DB1_NAME'], $link);
  }else{
    mysql_query('SET NAMES utf8');
    mysql_select_db('album');
  }

  $sql_album = "CREATE TABLE IF NOT EXISTS `Album` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(128) NOT NULL,
  `Owner` varchar(32) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;";

  mysql_query($sql_album);

  $sql_photo = "CREATE TABLE IF NOT EXISTS `Photo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(128) NOT NULL,
  `Filename` varchar(64) NOT NULL,
  `Comment` text,
  `AlbumID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;";

  mysql_query($sql_photo);

  $sql_user ="CREATE TABLE IF NOT EXISTS `User` (
  `Account` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Name` varchar(32) NOT NULL,
  PRIMARY KEY (`Account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

  mysql_query($sql_user);
	
  return $link;
}

function isOwner($album){
  require_once("utility.php");
  $link = connectDB();
  
  if(!session_id())
    session_start();
  
  if( !isset($_SESSION['user']) )
    return false;

  $user = $_SESSION['user'];
  $sql = "SELECT * FROM Album WHERE ID = '$album' AND Owner = '$user'";
  $result = mysql_query($sql, $link);
  
  if( !$result || !mysql_num_rows($result) ){
    return false;
  }else{
      return true;
  }

}


function resize_photo($src_file, $src_ext, $dest_name, $max_size)
{
	switch ($src_ext)
	{
	  case ".jpg":
	    $src = imagecreatefromjpeg($src_file);
	    break;
	  case ".png":
	    $src = imagecreatefrompng($src_file);
	    break;
	  case ".gif":
	    $src = imagecreatefromgif($src_file);
	    break;
	}

  //原始高度
  $src_w = imagesx($src);
  $src_h = imagesy($src);
 
  //算出縮圖大小
  if($src_w > $src_h)
  {
    $thumb_w = $max_size;
    $thumb_h = intval($src_h / $src_w * $thumb_w);
  }
  else
  {
    $thumb_h = $max_size;
    $thumb_w = intval($src_w / $src_h * $thumb_h);
  }

  //建立新的空圖片
  $thumb = imagecreatetruecolor($thumb_w, $thumb_h);

  //進行複製並縮圖
  imagecopyresized($thumb, $src, 0, 0, 0, 0, $thumb_w, $thumb_h, $src_w, $src_h);
  
  //儲存相片
  imagejpeg($thumb, $dest_name, 100);

  //釋放影像佔用的記憶體
  imagedestroy($src);
  imagedestroy($thumb); 
}

function resize_thumbnail($src, $ext,$des, $width, $height){

    require_once("lib/ThumbLib.inc.php");

    $thumb = PhpThumbFactory::create($src);
    $thumb->adaptiveResize($width, $height);
    $thumb->save($des, $ext);
}


?>