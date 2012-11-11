<?php
session_start();  // 啟動Session
 ob_start(); 
if ($_SESSION["login_session"] != true)
   header("Location:admin.php");

   
require_once("SQLconnection.php");
//存檔區------
   $usrname     = $_SESSION["usrname"];  
   $nicknames = $_POST["nicknames"];
   $Password	=$_POST["Password"]; 
   $phone		=$_POST["phone"];
   $birth		=$_POST["birth"];
   $msn			=$_POST["msn"]; 
   $showname	=$_POST["showname"]; 

   
if ($Password != "" && $nicknames != "") {
       // 建立SQL字串
   $sql = "UPDATE  employee SET nickname='".$nicknames."',Password='".$Password."',phone='".$phone."',birth='".$birth."',msn='".$msn."',showname='".$showname."' where usrname='".$usrname."'";
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
$Djroles="線上DJ";
else if($rows["Djrole"]=="admin")
$Djroles="系統管理者";
else if($rows["Djrole"]=="offlineDJ")
$Djroles="非線上DJ、訪客";
else
$Djroles="訪客，但是你怎會出現訪客阿..請洽系統管理者查詢";

if ($uploadedfile<>"none" &&$_POST["uploadphoto"]=="uploadphoto") {
 if (!copy($uploadedfile, "DJSHOW/".$_SESSION["usrname"].".jpg")) {
    echo "<font face='arial' size='2'> $name 檔案上傳失敗 ,也可能是檔案太大 請使用 back 按鍵再試一次";
 } else {
    echo "<font face='arial' size='2'>檔案上傳成功 ! 檔案型態：$uploadedfile_type ";
    echo "檔案大小：";
    printf("%.2f",$uploadedfile_size/1024);
    echo "  KB <BR>";
 }
}

?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>我的個人資料</title>
<!-- 日曆選單-->
<script type="text/javascript" src="date/jquery.min.js"></script>
<link rel="stylesheet" href="date/jquery.datepick.css" type="text/css" />	
<script type="text/javascript" src="date/jquery.datepick.js"></script>
<script type="text/javascript"> 
$(function() {
$('#birth').datepick($.extend({ 
    showTrigger: '#calImg', 
    altField: '#l10nAlternate2', altFormat: ' yyyy年MM d日 DD'}, 
    $.datepick.regional['zh-TW'])); 
$('#dateEnd').datepick($.extend({
    showTrigger: '#calImg', 
    altField: '#l10nAlternate', altFormat: ' yyyy年MM d日 DD'}, 
    $.datepick.regional['zh-TW']));
     
$('#l10nLanguage').change(function() {
    var language = $(this).val(); 
    $.localise('date/jquery.datepick', language); 
    $('#l10nPicker').datepick('option', $.datepick.regional[language]); 
    $.datepick.setDefaults($.datepick.regional['']); });
});
function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<!-- 日曆選單-->
</head>

<body>

<div align="center">
	<table border="0" width="70%" >
		<tr><td>
<p align="center"><b><font size="5">我的個人資料</font></b></p>
	<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table1" bgcolor="#F1F7F7">
		<tr><td><b>請輸入個人資料<br></b></td>		</tr>
		<tr><td style="padding-left: 10px">
			<font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
請在這邊正確輸入您的所有基本資料，<b>並上傳一張小張的大頭照大小約為116X122</b>。這些個人資料將只會用在本系統內，並不會外流。DJ暱稱與節目名稱將會顯示在網站上面。請勿隨意輸入。</font></b></td>
		</tr>
	</table>
	<BR>
<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table1">

	<tr>
		<td colspan="2">
		<form method="post" enctype="multipart/form-data" action ="userlogin.php?frame=myinfo.php">
<img border="0" src="DJSHOW/<?php echo$_SESSION["usrname"];?>.jpg" width="116" height="122">
<INPUT TYPE="hidden" NAME="uploadphoto" VALUE="uploadphoto">
<input type = "file" name="uploadedfile" size="30">
<input type = "hidden" name = "max_file_size" value="400000">
<input type = "submit" value = "上傳檔案">
</form>
</td>
	</tr>
	<tr><td width="13%">目前狀態</td>
		<td width="87%"><B><?php echo $Djroles?></b></td>
	</tr>
	<form method="POST" action="userlogin.php?frame=myinfo.php">
	<tr><td width="13%"><p>帳&nbsp;&nbsp; 號</p></td>
		<td width="87%"><B><?php echo$_SESSION["usrname"];?></b></td></tr>
	<tr><td width="13%"><p>密&nbsp;&nbsp; 碼</p></td>
		<td width="87%"><input type="password" name="Password" size="20" value="<?php echo $rows["Password"]; ?>">　</td></tr>
	<tr><td width="13%"><p>DJ暱稱</td>
		<td width="87%"><input type="text" name="nicknames" size="20" value="<?php echo $rows["nickname"]; ?>"></td></tr>
	<tr><td width="13%"><p>手&nbsp;&nbsp; 機</p></td>
		<td width="87%"><input type="text" name="phone" size="20" value="<?php echo $rows["phone"]; ?>"></td>
	</tr>
	<tr><td width="13%"><p>生&nbsp;&nbsp; 日</p></td>
		<td width="87%"><input type="text"id="birth" name="birth" size="20" value="<?php echo $rows["birth"]; ?>">
		<font size="2"><BR>日曆選單只會先顯示最近10年的，所以請多往前點選幾次</font></td>
	</tr>
	<tr><td width="13%"><p>MSN</p></td>
		<td width="87%"><input type="text" name="msn" size="20" value="<?php echo $rows["msn"]; ?>"></td>
	</tr>
	<tr><td width="13%"><p>節目名稱</p></td>
		<td width="87%"><input type="text" name="showname" size="20" value="<?php echo $rows["showname"]; ?>"></td>
	</tr>
</table>
<input type="submit" value="送出" name="submit">
</form>


			<p align="center">　</td>
		</tr>
	</table>
</div>


</body>

</html>