<?php
session_start();  // 啟動Session
 ob_start(); 
if ($_SESSION["login_session"] != true)
   header("Location:admin.php");
   require_once("SQLconnection.php");
if ( $_POST["del"]=="delete" ) {
$id=$_POST["id"];
//刪除區----
       $delinfo= "<b><font size='2' color='red'>刪除完成</font></b>";
      // 建立SQL字串
	  $sql = "DELETE FROM historyshow where id='".$id."' LIMIT 1";
// 建立MySQL資料庫連結
    $link = create_connection();
      // 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
//刪除區----	
}
?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>我的節目資訊</title>
<style type="text/css"> 
.style3 {
                background-color: #FFFFFF;}
.style4 {
				background-color: #9DC5FF;}
</style> 
</head>

<body>

<div align="center">
	<table border="0" width="90%" >
		<tr><td>
<p align="center"><b><font size="5">我的歷史節目資訊</font></b></p>
<?php echo $delinfo; ?>
<HR>
<table border='1' width='100%' cellspacing='0' id='table2' cellpadding="0">
   <tr  background='images/hisshowbg.bmp'><td width='77' align='center'>
		<b><font color='#FFFFFF'>帳 號</font></b></td>
		<td  align='center' width='154'>
		<b><font color='#FFFFFF'>日 期</font></b></td>
		<td  align='center'>
		<b><font color='#FFFFFF'>內 容</font></b></td>
		<td align='center'>
		<b><font color='#FFFFFF'>評 分</font></b></td>
		<td align='center'>
		<b><font color='#FFFFFF'>刪 除</font></b></td>
		</tr>

		<?php
require_once("SQLconnection.php"); 
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  historyshow WHERE usrname='".$_SESSION["usrname"]."'";
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0) 
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
  echo "<form method='POST' action='userlogin.php?frame=hisshow.php'>";
	echo"<tr class='style3' onmouseOver=\"this.className='style4'\" onmouseout=\"this.className='style3'\"><td width='77'align='center'><BR>"
		.$rows['usrname']."<BR><BR></td>"
		."<td width='130' align='center'>".$rows['showdate']."</td>"
		."<td>".$rows['showcontent']."</td>"
		."<td> </td>"
		."<td><input type='hidden' name='id' value=".$rows["id"]."><input type='hidden' name='del'><input type='submit' value='刪除' onclick=\"this.form.del.value='delete'\" /></td></tr></form> ";		
}}
      mysql_query($sql);
      mysql_close($link);
?>
</table>
			<p align="center">　</td>
		</tr>
	</table>
</div>


</body>

</html>