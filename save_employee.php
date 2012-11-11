<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="refresh" content="2; url=account.php"> 
<title>:::資訊看板佈告系統:::</title>
	<link rel="stylesheet" href="index.css" type="text/css" />	
</head>

<body bgcolor="#808080" background="bg.bmp" style="background-attachment: fixed" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
<div style="position: relative; width: 899px; z-index: 1; background-color: #FFFFFF;">

<img border="0" src="ncuheader1.jpg" width="899" height="118" align="center">
<?php include 'menu.htm';//上排選單 ?>
<hr>
<BR><BR>
<div align="center">
	<table border="0" width="455" cellspacing="0" cellpadding="0" height="204" id="table1" background="savebg.JPG">
		<tr>
			<td><p align="center">
<?php
require_once("SQLconnection.php");
   $username = $_POST["username"];
   $teacherID = $_POST["teacherID"];
   $password  = $_POST["password"]; 
   $memo      = $_POST["memo"];  
   $role      = $_POST["role"];
   $postRight = $_POST["postRight"];    
if ( $_POST["del"]=="delete" ) {
//刪除區----
       echo "<b><font size='6' color='#FFFF00'>刪除完成</font></b><BR><BR>帳號:".$teacherID."已為您刪除";
      // 建立SQL字串
	  $sql = "DELETE FROM employee where teacherID='".$teacherID."' LIMIT 1";
// 建立MySQL資料庫連結
    $link = create_connection();
      // 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
	  echo"<BR>執行刪除完成";
//刪除區----	
}else{
//存檔區------

   echo"<b><font size='6' color='#FFFF00'>存檔完成</font><BR><BR>老師為:".$username."<BR>帳號:".$teacherID."<BR>密碼:".$password."<BR>備註為:".$memo."<BR>將會為您跳轉回管理系統</b>";
       // 建立SQL字串
	  $sql = "UPDATE employee SET username='".$username."',password='".$password."',memo='".$memo."',role='".$role."',postRight='".$postRight."' where teacherID='".$teacherID."'";
	  // 建立MySQL資料庫連結
    $link = create_connection();
	// 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
//存檔區------
}

?>

			</p></td>
		</tr>
	</table>
</div>

<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>



<?php include 'footer.htm'; ?>
</div></div>

</body>
</html>