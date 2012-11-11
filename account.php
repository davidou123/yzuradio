<?php
require_once("SQLconnection.php");
   $usrnames = $_POST["usrnames"];
   $Passwords = $_POST["Passwords"];
   $Djroles  = $_POST["Djroles"]; 
   $memos      = $_POST["memos"];    
      $nicknames      = $_POST["nicknames"];   
if ( $_POST["del"]=="delete" &&$_POST["usrnames"]!="") {
//刪除區----
      // 建立SQL字串
	  $sql = "DELETE FROM employee where usrname='".$usrnames."' LIMIT 1";
// 建立MySQL資料庫連結
    $link = create_connection();
      // 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
	  $infoaccount="<p align='center'><font size='2' color='red'>帳號:".$usrnames."執行刪除完成</font></p>";
//刪除區----	
}elseif($_POST["usrnames"]!=""){
//存檔區------

	  $infoaccount="<p align='center'><font size='2' color='red'>帳號:".$usrnames."存檔完成</font></p>";
       // 建立SQL字串
	  $sql = "UPDATE employee SET Password='".$Passwords."',memo='".$memos."',Djrole='".$Djroles."',nickname='".$nicknames."' where usrname='".$usrnames."'";
	  // 建立MySQL資料庫連結
    $link = create_connection();
	// 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
//存檔區------
}

?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>帳戶管理</title>
<style type="text/css"> 
.style3 {
                background-color: #FFFFFF;}
.style4 {
				background-color: #9DC5FF;}
</style> 
</head>

<body>
<p align="center"><b><font size="5">帳 戶 管 理</font></b></p>
<?php echo $infoaccount;?>
<div align="center">
	<table border="0" width="95%" cellspacing="0" cellpadding="0" id="table1" bgcolor="#F1F7F7">
		<tr><td><b>帳戶管理設定<br></b></td>		</tr>
		<tr><td style="padding-left: 10px">
			<font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			在這邊可以為您的用戶更改帳戶資訊，您也可以<b>在備註欄為該用戶註記資訊</b>，這些資訊不會給使用者看到以方便管理者紀錄。而<b>設定為管理員的帳戶將會擁有最大的權限。<BR><font color="#FF0000">注意:請至少保留一個具有管理員權限的帳號。</font></font></b></td>
		</tr>
	</table>
<BR>

	<table border="2" width="400" style="border-collapse: collapse" bordercolor="#000000">
		<tr  background='images/hisshowbg.bmp'>
			<td align="center"><B><font color='#FFFFFF'>帳號</font></b></td>
			<td align="center"><B><font color='#FFFFFF'>暱稱</font></b></td>
			<td align="center"><B><font color='#FFFFFF'>密碼</font></b></td>
			<td align="center"><B><font color='#FFFFFF'>備註欄(僅供系統管理者參考)</font></b></td>		
			<td align="center"><B><font color='#FFFFFF'>權限</font></b></td>		
			<td align="center"><B><font color='#FFFFFF'>變更</font></b></td>
		</tr>
<?php
      require_once("SQLconnection.php");

// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  employee";   //$sql = "SELECT * FROM  bulletin WHERE reference=-1"; 
$result = mysql_query($sql); // 執行SQL指令

// 是否有文章
if (mysql_num_rows($result) != 0) 
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {		echo"<form method='POST' action='userlogin.php?frame=account.php'><tr class='style3' onmouseOver=\"this.className='style4'\" onmouseout=\"this.className='style3'\">";
		echo"<td align='center'><input type='hidden' name='usrnames'value=".$rows["usrname"]."><b>".$rows["usrname"]."</b></td>";
		echo"<td><input type='hidden' name='del'><input TYPE='text' name='nicknames' size='14' value=".$rows["nickname"]."></td>";
		echo"<td><input type='password' name='Passwords' size='14' value=".$rows["Password"]."></td>";
		echo"<td><input type='text' name='memos' size='33' value=".$rows["memo"]."></td>";
if($rows["Djrole"]=="admin"){
		echo"<td><select size='1' name='Djroles'><option value='onlineDJ'>在線DJ</option><option value='offlineDJ'>離線DJ</option><option value='admin' selected>管理員</option></select>";}
		elseif($rows["Djrole"]=="onlineDJ"){
		echo"<td><select size='1' name='Djroles'><option value='onlineDJ' selected>在線DJ</option><option value='offlineDJ'>離線DJ</option><option value='admin'>管理員</option></select>";}
		else{
		echo"<td><select size='1' name='Djroles'><option value='onlineDJ' >在線DJ</option><option value='offlineDJ'selected>離線DJ</option><option value='admin'>管理員</option></select>";}		
		
		echo"<td><input type='submit' value='存檔'><input type='submit' value='刪除' onclick=\"this.form.del.value='delete'\" /></td>";
		echo"</tr></form>";

		
  }
} 
  mysql_free_result($result);
  

?>


</table>




</div>


</body>

</html>