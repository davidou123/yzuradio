<?php
session_start();  // 啟動Session
 ob_start(); 
if ($_SESSION["login_session"] != true)
   header("Location:admin.php");
   
require_once("SQLconnection.php");
//存檔區------
   $showinfo = $_POST["showinfo"]; 
   $usrname  = $_SESSION["usrname"];  

if ( $showinfo != "") {
       // 建立SQL字串
   $sql = "UPDATE  employee SET showinfo='".$showinfo."' where usrname='".$usrname."'";
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
else
$Djroles="訪客，但是你怎會出現訪客阿..請洽老歐查詢";

if ($uploadedfile<>"none" &&$_POST["uploadphoto"]=="uploadphoto") {
 if (!copy($uploadedfile, "DJSHOW/".$_SESSION["usrname"]."2.jpg")) {
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
<p align="center"><b><font size="5">我的個人DJ介紹</font></b></p>
	<table border="0" width="95%" cellspacing="0" cellpadding="0" id="table1" bgcolor="#F1F7F7">
		<tr><td><b>個人DJ介紹<br></b></td>		</tr>
		<tr><td style="padding-left: 10px">
			<font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
請輸入您個人DJ的介紹，本介紹將會顯示在網頁上的[DJ介紹]上，<b>請勿隨意輸入或輸入過短資訊</B>。輸入完之後，<B>請在上傳一張略為大張的DJ照片大小為425X296。</B></font></b></td>
		</tr>
	</table>

<HR>
您目前狀態為:<b><?php echo $Djroles; ?></b><br>
 DJ 名 稱: <b> <?php echo $_SESSION["nickname"]; ?></b><BR>
節目名稱:<b><?php echo $rows["showname"];?></b>
<form method="POST" action="userlogin.php?frame=myshow.php">
節目介紹:<textarea name="showinfo" cols="74" rows="37"><?php echo $rows["showinfo"];?></textarea>
<BR>
<input type="submit" value="送出" name="submit">
</form>
DJ介紹大頭貼
<form method="post" enctype="multipart/form-data" action ="userlogin.php?frame=myshow.php">
<img border="0" src="DJSHOW/<?php echo$_SESSION["usrname"];?>2.jpg"width="425" height="296"><BR>
<INPUT TYPE="hidden" NAME="uploadphoto" VALUE="uploadphoto">
<input type = "file" name="uploadedfile" size="30">
<input type = "hidden" name = "max_file_size" value="400000">
<input type = "submit" value = "上傳檔案">
</form>

			<p align="center">　</td>
		</tr>
	</table>
</div>


</body>

</html>