<?php
session_start();  // 啟動Session
ob_start(); //不然header函數會無法使用
if (isset($_POST["usrname"]))
{

$usrname="";
$password="";
$usrname=$_POST["usrname"];
$password=$_POST["password"];
 require_once("SQLconnection.php");
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM employee WHERE password='".$password."' AND usrname='".$usrname."'";
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0)
{
//登入成功
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
		$_SESSION["login_session"] = true;   //把$_SESSION["login_session"]寫為真 用來判斷是否登入成功
		$_SESSION["usrname"]=$usrname;     //紀錄登入者是誰
		$_SESSION["nickname"]=$rows["nickname"];
		$_SESSION["Djrole"]=$rows["Djrole"]; 
		$_SESSION["bgsound"]="true";
	    header("Location:userlogin.php");  //跳轉到系統內
     }
}else{
$error="<b><font size='2' color='#FF0000'>OOPS您輸入錯誤溜</font></b>";//登入失敗
}
  mysql_free_result($result);
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="menu_style.css" type="text/css" />
	<link rel="stylesheet" href="index.css" type="text/css" />	
<title>元智之音學生廣播電台</title>

  <style type="text/css"> 
.content { 
  float:left; 
  text-align:left; 
}
  </style>
</head>

<body  bgcolor="#2C2C2C">
<div align="center">
<table border="0" width="932" cellspacing="0" cellpadding="0"bgcolor="#FFFFFF">
	<tr><td height="132"bgcolor="#222222">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="936" height="132">
          <param name="movie" value="banner.swf">
          <param name="quality" value="high">
          <embed src="banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="936" height="132"></embed></object>

<?php include 'menu_index.php';?>
    </td></tr>
	<tr><td  height="550" background="images/loginbg.jpg"valign="top">
	
<div align="center">
<br>
<img border="0" src="images/loginsystem.png"alt="元智之音幹部系統" width="384" height="93"><br><br><br>
<form method="POST" action="admin.php">
<table border="0" width="454" height="195" background="images/logintablebg.png" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="2" height="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img border="0" src="images/114.png" width="20" height="25">
		<img border="0" src="images/welcomesys.gif" width="143" height="18">
		<?php echo $error;?>
		</td>
	</tr>
	<tr>
		<td width="20%">　</td>
		<td width="78%"><BR>
		<img border="0" src="images/account.gif" width="128" height="18"alt="登入">
		<input type="text" name="usrname" tabindex="1" size="20" onchange style="border:1;color:red;background:transparent;" ><BR><BR>
		<img border="0" src="images/password.gif" width="128" height="18"alt="密碼">
		<input type="password" name="password" tabindex="2" size="20" onchange style="border:1;color:red;background:transparent;">
		<p align="center">
		<input type="submit" tabindex="5" name="loginbutton" value="登入">&nbsp;&nbsp;&nbsp;
					<input type="reset" tabindex="5" name="loginbutton0" value="清除"></p>
					</form>
		</td>
	</tr>
</table>

</div>
	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include 'footer.php';?>
	</td></tr>
</table>
</div>
</body>
</html>