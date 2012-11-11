<?php
  if (isset($_POST["account"]))
  {
    require_once("dbtools.inc.php");
		
    //取得登入資料
    $login_user = $_POST["account"]; 	
    $login_password = $_POST["password"];
	
    //建立資料連接
    $link = create_connection();
						
    //檢查帳號密碼是否正確
    $sql = "SELECT account, name FROM user Where account = '$login_user'
            AND password = '$login_password'";
    $result = execute_sql("album", $sql, $link);
	
    //若沒找到資料，表示帳號密碼錯誤
    if (mysql_num_rows($result) == 0)
    {
      //釋放 $result 佔用的記憶體
      mysql_free_result($result);
		
      //關閉資料連接	
      mysql_close($link);		
			
      //顯示訊息要求使用者輸入正確的帳號密碼
      echo "<script type='text/javascript'>alert('帳號密碼錯誤，請查明後再登入')</script>";
    }
    else     //如果帳號密碼正確
    {
      //將使用者資料加入 Session
      session_start();
      $_SESSION["login_user"] = mysql_result($result, 0, "account");
      $_SESSION["login_name"] = mysql_result($result, 0, "name");
	    
      //釋放 $result 佔用的記憶體	
      mysql_free_result($result);
			
      //關閉資料連接	
      mysql_close($link);	
	        
      header("location:index.php");
    }
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
   <form action="logon.php" method="post" name="myForm">
      <table align="center">
        <tr><td> 帳號：<input type="text" name="account" size="15"></td></tr>
        <tr><td>密碼：<input type="password"name="password" size="15"></td></tr>
        <tr><td align="center" > 
            <input type="submit" value="登入">
            <input type="reset" value="重填">
        </td></tr>
      </table>
    </form>
</div>


	</td></tr>
	<tr><td bgcolor="#114087">		
<?php include '../footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>