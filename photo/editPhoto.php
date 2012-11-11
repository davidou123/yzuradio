<?php
  require_once("dbtools.inc.php");
  
  //取得登入者帳號
  session_start();
  $login_user = $_SESSION["login_user"];
  
  //建立資料連接
  $link = create_connection();
    
  if (!isset($_POST["photo_name"]))
  {
    $photo_id = $_GET["photo_id"];
  														
    //取得相簿名稱及相簿的主人
    $sql = "SELECT a.name, a.filename, a.comment, a.album_id, b.name AS album_name,
            b.owner FROM photo a, album b where a.id = $photo_id and b.id = a.album_id";
    $result = execute_sql("album", $sql, $link);
    $album_id = mysql_result($result, 0, "album_id");
    $album_name = mysql_result($result, 0, "album_name");
    $album_owner = mysql_result($result, 0, "owner");
    $photo_name = mysql_result($result, 0, "name");
    $file_name = mysql_result($result, 0, "filename");
    $photo_comment = mysql_result($result, 0, "comment");
      
    //釋放 $result 佔用的記憶體	
    mysql_free_result($result);
		
    //關閉資料連接	
    mysql_close($link);
  
    if ($album_owner != $login_user)
    {
      echo "<script type='text/javascript'>";
      echo "alert('您不是相片的主人，無法修改相片名稱。')";
      echo "</script>";
    }
  }
  else
  {
    $album_id = $_POST["album_id"];
    $photo_id = $_POST["photo_id"];
    $photo_name = $_POST["photo_name"];
    $photo_comment = $_POST["photo_comment"];
  	
    $sql = "UPDATE photo SET name = '$photo_name', comment = '$photo_comment'
            WHERE id = $photo_id AND EXISTS(SELECT '*' FROM album
            WHERE id = $album_id AND owner = '$login_user')";
    execute_sql("album", $sql, $link);
		
    //關閉資料連接	
    mysql_close($link);
    
    header("location:showAlbum.php?album_id=$album_id");
  }
?>
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
<br><br><br>
   <form action="editPhoto.php" method="post">
      <table align="center">
        <tr><td>相片名稱：</td><td>
            <input type="text" name="photo_name" size="31" value="<?php echo $photo_name ?>">
        </td></tr>
        <tr><td>相片描述：</td>
            <td>
            <textarea name="photo_comment" rows="5" cols="25"><?php echo $photo_comment ?></textarea>
            <input type="hidden" name="photo_id" value="<?php echo $photo_id ?>">
            <input type="hidden" name="album_id" value="<?php echo $album_id ?>"><BR>
            <input type="submit" value="更新"
              <?php if ($album_owner != $login_user) echo 'disabled' ?>>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <br><a href="showAlbum.php?album_id=<?php echo $album_id ?>">
              回【<?php echo $album_name ?>】相簿</a>
          </td>	
        </tr>
      </table>
    </form>
	<br><br><br><br><br><br><br><br><br><br>
</div>
	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include '../footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>