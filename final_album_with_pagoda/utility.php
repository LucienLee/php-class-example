<?php

function connectDB() {
	$link = mysql_connect("localhost", "root", "root");
	mysql_query('SET NAMES utf8');
	mysql_select_db('album');
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
  if( $src_w < $max_size && $src_h < $max_size ){
    $thumb_w = $src_w;
    $thumb_h = $src_h;
  
  }elseif($src_w > $src_h){
    $thumb_w = $max_size;
    $thumb_h = intval($src_h / $src_w * $thumb_w);
  }
  else{
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