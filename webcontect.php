<?php
session_start();  // 啟動Session
 ob_start(); 
if ($_SESSION["login_session"] != true)
   header("Location:admin.php");
   
require_once("SQLconnection.php");
//存檔區------
   $index = $_POST["index"]; 
   $usrname  = $_SESSION["usrname"];  

if ( $index != "") {
       // 建立SQL字串
   $sql = "UPDATE  system SET webindex='".$index."' WHERE ID='system'";
	  // 建立MySQL資料庫連結
    $link = create_connection();
	   echo "<script language=javascript> alert('存檔完成')</script> ";}
      mysql_query($sql);
//存檔區end------   
 
 
// 建立MySQL資料庫連結
    $link = create_connection();
	
	//內文開始
$sql = "SELECT * FROM  system";   
$result = mysql_query($sql); // 執行SQL指令	
 while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
	$index= $rows['webindex'];
	}
//內文結束
      mysql_query($sql);
      mysql_close($link);

?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>我的節目資訊</title>
<!-- TinyMCE -->
<script type="text/javascript" src="tinymcec/jscripts/tiny_mce.js"></script>
<script type="text/javascript" src="tinymcec/tinymac.js"></script>
<!-- /TinyMCE -->
</head>

<body>

<div align="center">
	<table border="0" width="70%" >
		<tr><td>
<p align="center"><b><font size="5">網站首頁內容更改</font></b></p>
	<table border="0" width="95%" cellspacing="0" cellpadding="0" id="table1" bgcolor="#F1F7F7">
		<tr><td><b>網站首頁內容<br></b></td>		</tr>
		<tr><td style="padding-left: 10px">
			<font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
這邊的內容將會顯是在網站的首頁，可以透過這邊更改網站首頁的資訊，請更改完記得回首頁確認排版是否有誤。</B></font></b></td>
		</tr>
	</table>

<HR>
您目前狀態為:<b><?php echo $Djroles; ?></b><br>
 DJ 名 稱: <b> <?php echo $_SESSION["nickname"]; ?></b><BR>
<form method="POST" action="userlogin.php?frame=webcontect.php">
網站內容:<textarea name="index" cols="74" rows="37"><?php echo $index;?></textarea>
<BR>
<input type="submit" value="送出" name="submit">
</form>


			<p align="center">　</td>
		</tr>
	</table>
</div>


</body>

</html>