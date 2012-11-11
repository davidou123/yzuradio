<?php
  if (isset($_POST["album_name"]))
  {
    require_once("dbtools.inc.php");
    $album_name = $_POST["album_name"];
  	
    //取得登入者帳號
    session_start();
    $login_user = $_SESSION["login_user"];

    //建立資料連接
    $link = create_connection();

    //新增相簿

    $sql = "SELECT ifnull(max(id), 0) + 1 AS album_id FROM album";

    $result = execute_sql("album", $sql, $link);

    $album_id = mysql_result($result, 0, "album_id");
  	

    $sql = "INSERT INTO album(id, name, owner)
 
    
      VALUES($album_id, '$album_name', '$login_user')";

    execute_sql("album", $sql, $link);
  	

    //釋放記憶體並關閉資料連接

    mysql_free_result($result);
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
<BR><BR><BR>
<div align="center">
    <form action="addAlbum.php" method="post">
      <table align="center">
        <tr><td>相簿名稱：</td><td>
				<input type="text" name="album_name" size="15">
				<input type="submit" value="新增">
        </td></tr>
        <tr><td colspan="3" align="center">
            <br><a href="index.php">回首頁</a>
        </td></tr>
      </table>
    </form>

<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
</div>
	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include '../footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>