<?php
  require_once("dbtools.inc.php");
  
  //取得登入者帳號
  session_start();
  $login_user = $_SESSION["login_user"];
  
  //建立資料連接
  $link = create_connection();
    
  if (!isset($_POST["album_id"]))
  {
    $album_id = $_GET["album_id"];
  														
    //取得相簿名稱及相簿所有者的帳號
    $sql = "SELECT name, owner FROM album where id = $album_id";
    $result = execute_sql("album", $sql, $link);
    $album_name = mysql_result($result, 0, "name");
    $album_owner = mysql_result($result, 0, "owner");
      
    //釋放 $result 佔用的記憶體	
    mysql_free_result($result);
		
    //關閉資料連接	
    mysql_close($link);
  
    if ($album_owner != $login_user)
    {
      echo "<script type='text/javascript'>";
      echo "alert('您不是相簿的主人，無法修改相簿名稱。$album_owner');";
      echo "</script>";
    }
  }
  else
  {

    $album_id = $_POST["album_id"];
    $album_name = $_POST["album_name"];
    $sql = "UPDATE album SET name = '$album_name'
            WHERE id = $album_id AND owner = '$login_user'";
    execute_sql("album", $sql, $link);
  			
    //關閉資料連接	
    mysql_close($link);
    
    header("location:index.php");
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
<BR><BR><BR>
     <form action="editAlbum.php" method="post">
      <table align="center">
        <tr><td>相簿名稱：</td><td>
            <input type="text" name="album_name" size="35" value="<?php echo $album_name ?>">
            <input type="hidden" name="album_id" value="<?php echo $album_id ?>">
            <input type="submit" value="更新"
              <?php if ($album_owner != $login_user) echo 'disabled' ?>>
          </td> </tr>
        <tr><td colspan="2" align="center">
            <br><a href="index.php">回首頁</a>
        </td></tr>
      </table>
    </form>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>	
</div>
	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include '../footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>