<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../menu_style.css" type="text/css" />
	<link rel="stylesheet" href="../index.css" type="text/css" />	
<title>元智之音學生廣播電台</title>


</head>

<body  bgcolor="#2C2C2C">
<div align="center">
<table border="0" width="932" cellspacing="0" cellpadding="0"bgcolor="#FFFFFF">
	<tr><td height="132">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="936" height="132">
          <param name="movie" value="banner.swf">
          <param name="quality" value="high">
          <embed src="../banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="936" height="132"></embed></object>

<?php include 'menu_index.php';?>

<div align="center">
    <?php
      require_once("dbtools.inc.php");
      $album_id = $_GET["album"];
      $photo_id = $_GET["photo"];
      
      //建立資料連接
      $link = create_connection();
      
      //取得相簿名稱
      $sql = "SELECT name FROM album WHERE id = $album_id";
      $result = execute_sql("album", $sql, $link);
      $album_name = mysql_result($result, 0, "name");
      
      echo "<p align='center'>$album_name</p>";
      
      //取得並顯示相片資料
      $sql = "SELECT filename, comment FROM photo WHERE id = $photo_id";
      $result = execute_sql("album", $sql, $link);
      $file_name = mysql_result($result, 0, "filename");
      $comment = mysql_result($result, 0, "comment");
      
      echo "<p align='center'><img src='Photo/$file_name'
            style='border-style:solid;border-width:1px'></p>";
      echo "<p align='center'>$comment</p>";
		  
      //取得並建立相片導覽資料
      $sql = "SELECT a.id, a.filename FROM (SELECT id, filename FROM photo 
              WHERE album_id = $album_id AND (id <= $photo_id)
              ORDER BY id desc limit 3) a ORDER BY a.id";
      $result = execute_sql("album", $sql, $link);
      
      echo "<hr><p align='center'>";
      while ($row = mysql_fetch_assoc($result))
      {
      	if ($row["id"] == $photo_id)
      	{
      	  echo "<img src='Thumbnail/" . $row["filename"] .
      	       "' style='border-style:solid;border-color: Red;border-width:2px'>　";
      	}
      	else
      	{
      	  echo "<a href='photoDetail.php?album=$album_id&photo=" . $row["id"] .
      	       "'><img src='Thumbnail/" . $row["filename"] .
      	       "' style='border-style:solid;border-color:Black;border-width:1px'></a>　";
      	}
      }
      
      $record_to_get = 5 - mysql_num_rows($result);
      $sql = "SELECT id, filename FROM photo WHERE album_id = $album_id AND (id > $photo_id)
              ORDER BY id limit $record_to_get";
      $result = execute_sql("album", $sql, $link);
      
      while ($row = mysql_fetch_assoc($result))
      {
      	echo "<a href='photoDetail.php?album=$album_id&photo=" . $row["id"] .
      	     "'><img src='Thumbnail/" . $row["filename"] .
      	     "' style='border-style:solid;border-color:Black;border-width:1px'></a>　";
      }
      
      echo "</p>";
		  		
      //釋放記憶體並關閉資料連接
      mysql_free_result($result);
      mysql_close($link);
    ?>
    <p align="center">
      <a href="index.php">回首頁</a>
      <a href="showAlbum.php?album_id=<?php echo $album_id ?>">回【<?php echo $album_name ?>】相簿
    </p>
</div>
	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include '../footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>