<?php
session_start();  // 啟動Session
 ob_start(); 
if ($_SESSION["login_session"] != true)
   header("Location:admin.php");

?>
<?php
require_once("SQLconnection.php");
// 取得表單欄位
   $usrnames = $_POST["usrnames"];
   $Password = $_POST["Password"];
   $nicknames = $_POST["nicknames"];   
   $memo = $_POST["memo"]; 
      $Djroles = $_POST["Djroles"]; 
   
// 檢查是否輸入使用者名稱和密碼
if ($usrnames != "" && $Password != "") {
   // 建立MySQL資料庫連結
	   // 建立MySQL資料庫連結
    $link = create_connection();
   $sql = "SELECT * FROM employee WHERE usrname='".$usrnames."'";
   $result = mysql_query($sql);
   mkdir("D:/hisshow/$usrnames");
   // 使用者是否存在
   if (mysql_fetch_row($result) == false) {
      $sql="INSERT INTO employee(usrname,Password,nickname,memo,Djrole)".
           " VALUES('".$usrnames."','".$Password."','".$nicknames."','".$memo."','".$Djroles."')";
      mysql_query($sql) or die("SQL字串執行錯誤!<br>");
      $reginfo= "<p align='center'><b><font color='red'>使用者註冊成功!</font></b></p>";
      }
   else
      $reginfo= "<p align='center'><b><font color='red'>使用者名稱存在!</font></b></p>";
   mysql_close($link);
}

?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>我的節目資訊</title>

</head>

<body>
<div align="center">
<BR>

<p align="center"><b><font size="5">創 新 帳 戶</font></b></p>
	<table border="0" width="80%" cellspacing="0" cellpadding="0" id="table1" bgcolor="#F1F7F7"  style="padding: 10px">
		<tr>
			<td>

			<b>請輸入資料來為您的用戶註冊資訊。<br></b></td>
		</tr>
		<tr>
			<td>
			<font size="2">在您為您的用戶註冊帳號資訊後，您還可以到<b>帳號管理</b>裡面去為您的用戶變更設定 
			，備註欄僅供給系統管理者紀錄該帳戶資訊而已，該帳戶並不會看到備註資訊。</font></td>
		</tr>
	</table>
<BR><BR>
</div>
<form action="userlogin.php?frame=register.php" method="post">

<? echo $reginfo?>
<div align="center">
	<table border="0" width="470" cellspacing="0" cellpadding="0" id="table2">
		<tr><td width="84"><P>帳　　號：</P></td>
			<td width="176"><input type="text" name="usrnames" size="20" maxlength="20">　</td>		</tr>
		<tr><td width="84"><P>密　　碼：</P></td>
			<td width="176"><input type="Password" name="Password" size="22" maxlength="30"></td>		</tr>
		<tr><td width="84"><P>綽　　號：</P></td>
			<td width="176"><input type="text" name="nicknames" size="20" maxlength="30"></td>		</tr>
		<tr><td width="84"><P>權　　限：</P></td>
			<td width="176"><input type="radio" value="onlineDJ" checked name="Djroles">線上DJ
							<input type="radio" value="offlineDJ"  name="Djroles">非線上DJ、訪客
							<input type="radio" value="admin"  name="Djroles">系統管理員			
			</td>		</tr>
		<tr><td width="84"><P>備　　註：</P></td>
			<td width="176"><input type="text" name="memo" size="40" maxlength="100"></td>		</tr>
		<tr>
			<td colspan="2"align="center"><input type="submit" value="註冊"><input type="reset" value="重新設定" name="reset"></td>
		</tr>
	</table>
</div>

</form>



</body>

</html>