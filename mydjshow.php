<?php
session_start();  // 啟動Session
 ob_start(); 
if ($_SESSION["login_session"] != true)
   header("Location:admin.php");
   
require_once("SQLconnection.php");
//存檔區------
   $showdate    = $_POST["showdate"];
   $showcontent = $_POST["showcontent"]; 
   $usrname     = $_SESSION["usrname"];  

if ($showdate != "" && $showcontent != "") {
       // 建立SQL字串
   $sql = "UPDATE  employee SET showdate='".$showdate."',showcontent='".$showcontent."' where usrname='".$usrname."'";
	  // 建立MySQL資料庫連結
    $link = create_connection();
	   echo "<script language=javascript> alert('存檔完成')</script> ";}
      mysql_query($sql);
//存檔區end------   
 
 
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  employee WHERE usrname='".$_SESSION["usrname"]."'";
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0)
{
  $rows = mysql_fetch_array($result, MYSQL_BOTH);
}
      mysql_query($sql);
      mysql_close($link);
	  
//判斷權限
if($rows["Djrole"]=="onlineDJ")
$Djrole="線上DJ";
else if($rows["Djrole"]=="admin")
$Djrole="系統管理者";
else
$Djrole="訪客，但是你怎會出現訪客阿..請洽老歐查詢";

?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>我的節目資訊</title>
</head>

<body>

<div align="center">
	<table border="0" width="70%" >
		<tr><td>
<p align="center"><b><font size="5">我的節目資訊</font></b></p>
<HR>
您目前狀態為:<b><?php echo $Djrole; ?></b><br>
 DJ 名 稱: <b> <?php echo $_SESSION["nickname"]; ?></b><BR>
節目名稱:<b><?php echo $rows["showname"];?></b>
<form method="POST" action="userlogin.php?frame=mydjshow.php">
下次撥出時間:  <input type="text" name="showdate" size="20" value="<?php echo $rows["showdate"];?>"><BR>
節目介紹:<textarea name="showcontent" cols="74" rows="17"><?php echo $rows["showcontent"];?></textarea>
<BR>
<input type="submit" value="送出" name="submit">
</form>


			<p align="center">　</td>
		</tr>
	</table>
</div>


</body>

</html>