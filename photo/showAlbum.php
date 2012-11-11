<?php
	    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../menu_style.css" type="text/css" />
	<link rel="stylesheet" href="../index.css" type="text/css" />	
<title>元智之音學生廣播電台</title>
  <script type="text/javascript">
    	function DeletePhoto(album_id, photo_id)
    	{
    		if (confirm("請確認是否刪除此相片？"))
    		  location.href = "delPhoto.php?album_id=" + album_id + "&photo_id=" + photo_id;
    	}
    </script>

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
      $album_id = $_GET["album_id"]; 
      
	    //取得登入者帳號
	    $login_user = $_SESSION["login_user"];
      
      //建立資料連接
      $link = create_connection();
      
      //取得相簿名稱及相簿的主人
      $sql = "SELECT name, owner FROM album WHERE id = $album_id";
      $result = execute_sql("album", $sql, $link);
      $album_name = mysql_result($result, 0, "name");
      $album_owner = mysql_result($result, 0, "owner");
      
      echo "<p align='center'>$album_name</p>";
													
      //取得相簿裡所有照片的縮圖
      $sql = "SELECT id, name, filename FROM photo WHERE album_id = $album_id";
      $result = execute_sql("album", $sql, $link);
      
      echo "<table border='0' align='center'>";

      //指定每列顯示幾張照片
      $photo_per_row = 5;
      					
      //顯示相片縮圖
      $i = 1;
      while ($row = mysql_fetch_assoc($result))
      {
      	$photo_id = $row["id"];
      	$photo_name = $row["name"];
      	$file_name = $row["filename"];
      	
        if ($i % $photo_per_row == 1)
          echo "<tr align='center'>";
        
        echo "<td width='160px'><a href='photoDetail.php?album=$album_id&photo=$photo_id'>
              <img src='Thumbnail/$file_name' style='border-color:Black;border-width:1px'>
              <br>$photo_name</a>";
        
        if (isset($login_user) && $album_owner == $login_user)
          echo "<br><a href='editPhoto.php?photo_id=$photo_id'>編輯</a> 
               <a href='#' onclick='DeletePhoto($album_id, $photo_id)'>刪除</a>";
          
        echo "<p></td>";
        
        if ($i % $photo_per_row == 0 || $i == $total_photo)
          echo "</tr>";
        
        $i++;
      }
      
      echo "</table>" ;
											  		
      //釋放資源並關閉資料連接
		  mysql_free_result($result);
      mysql_close($link);
      
      echo "<hr><p align='center'>";
      if (isset($login_user) && $album_owner == $login_user)
        echo "<a href='uploadPhoto.php?album_id=$album_id'>上傳相片</a> ";
    ?>
    <a href='index.php'>回首頁</a></p>
</div>
	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include '../footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>