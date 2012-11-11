<?php
session_start();  // 啟動Session
 ob_start(); 
if ($_SESSION["login_session"] != true)
   header("Location:admin.php");
   
require_once("SQLconnection.php");
//存檔區------
   $showdate    = $_POST["showdate"];
   $showdate2   = $_POST["showdate2"];
   $showcontent = $_POST["showcontent"]; 
   $usrname     = $_SESSION["usrname"];  
   $showname    = $_POST["showname"]; //用來當檔名用的
   

if ($showdate != "" && $showcontent != ""&& $showname != "" ) {
//檔案上傳
if ($uploadedfile<>"none" &&$_POST["uploadmp3"]=="uploadmp3") {
$filename="[節目]".$showname.$showdate."_".$showdate2; //[節目]節目名稱 日期 時間.mp3
$filename=iconv("utf-8","big5",$filename); //因為檔名只能big5 所以要轉碼才能當檔名
$filename = str_replace("\\","",$filename); //原先,被取代成,來源 為避免節目名稱包含有跳脫字元
 if (!copy($uploadedfile,"D:/hisshow/".$usrname."/".$filename." .mp3")) {  //存檔到h:備份
    echo "<font face='arial' size='2' color='red'> $name 檔案上傳失敗 ,也可能是檔案太大也可能你並未上傳當次音檔 請使用 back 按鍵再試一次</font>";
 } else {
 $desktop=iconv("utf-8","big5","桌面"); 
 copy($uploadedfile,"C:/Documents and Settings/YzuRadio/".$desktop."/".$filename." .mp3");  //在存檔到桌面去播放
    echo "<font face='arial' size='2'>檔案上傳成功 ! 檔案型態：$uploadedfile_type ";
    echo "檔案大小：";
    printf("%.2f",$uploadedfile_size/1024);
    echo "  KB <BR>";


       // 建立SQL字串
   $sql = "UPDATE  employee SET showdate='".$showdate."',showdate2='".$showdate2."',showcontent='".$showcontent."' where usrname='".$usrname."'";
	  // 建立MySQL資料庫連結
    $link = create_connection();
	      mysql_query($sql);
       // 建立SQL字串
      $sql="INSERT INTO historyshow(usrname,showdate,showdate2,showcontent)".
           " VALUES('".$usrname."','".$showdate."','".$showdate2."','".$showcontent."')";
   // 建立MySQL資料庫連結
    $link = create_connection();	
	

	   echo "<script language=javascript> alert('存檔完成')</script> ";
      mysql_query($sql);
	   }}
//存檔區end------   
 }
 
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
else if($rows["Djrole"]=="oflineDJ")
$Djroles="非線上DJ、訪客";
else
$Djroles="訪客";


?>

<? if($rows["showname"]==""){?>
<script>
alert('瑞迪歐幹部系統提醒公告: \n\n   您尚未輸入您的 [節目名稱]，請快至帳戶資訊去正確填寫 \n 沒有填寫會讓網站不知道您的節目是哪個 會讓你的節目資訊錯誤喔\n\n                           來自技術部的溫馨提醒');
location.href="?frame=myinfo.php";
</script>;
<?}?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>我的節目資訊</title>
<!-- TinyMCE -->
<script type="text/javascript" src="tinymcec/jscripts/tiny_mce.js"></script>
<script type="text/javascript" src="tinymcec/tinymac.js"></script>
<!-- /TinyMCE -->
<!-- 日曆選單-->
<script type="text/javascript" src="date/jquery.min.js"></script>
<link rel="stylesheet" href="date/jquery.datepick.css" type="text/css" />	
<script type="text/javascript" src="date/jquery.datepick.js"></script>
<script type="text/javascript"> 
$(function() {
$('#showdate').datepick($.extend({ 
    showTrigger: '#calImg', 
    altField: '#l10nAlternate2', altFormat: ' yyyy年MM d日 DD'}, 
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
<p align="center"><b><font size="5">我的下次節目介紹</font></b></p>
	<table border="0" width="95%" cellspacing="0" cellpadding="0" id="table1" bgcolor="#F1F7F7">
		<tr><td><b>下次節目介紹<br></b></td>		</tr>
		<tr><td style="padding-left: 10px">
			<font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
請輸入您下次首播節目的時間跟簡略的節目介紹內容，請正確的填寫每次節目的內容，每次填寫系統都將會為您備份到歷次節目介紹去，如此一來學期末時，你將會擁有整學期的節目介紹。系統也將會為您備份您歷次的錄音檔，<B>本系統只接受mp3檔案格式</b>。</font></b></td>
		</tr>
	</table>
	<BR>
<table border="0" width="100%" cellspacing="0" cellpadding="0" >
	<tr><td>目前狀態為:<b><?php echo $Djroles; ?></b>　</td>
		<td> DJ 名 稱: <b> <?php echo $_SESSION["nickname"]; ?></b>　</td>
		<td>節目名稱:<b><?php echo $rows["showname"];?></b>　</td></tr>
</table>

<HR>
<form method="post" enctype="multipart/form-data" action ="userlogin.php?frame=mydj.php">
<INPUT TYPE="hidden" NAME="uploadmp3" VALUE="uploadmp3">
<INPUT TYPE="hidden" NAME="showname" VALUE="<?php echo $rows["showname"];?>">
<input type = "file" name="uploadedfile" size="50">
<input type = "hidden" name = "max_file_size" value="188743680">
下次撥出時間:  <input type="text" name="showdate" id="showdate"  size="8" value="">
<select size="1" name="showdate2">
	<option value="20-00" selected>晚上8點</option>
	<option value="20-30">晚上8點半</option>
	<option value="21-00">晚上9點</option>
	<option value="21-30">晚上9點半</option>
	<option value="22-00">晚上10點</option>
	<option value="22-30">晚上10點半</option>
	<option value="23-00">晚上11點</option>
	<option value="23-30">晚上11點半</option>
	<option value="00-00">半夜12點</option>
	<option value="00-30">半夜12點半</option>
	<option value="01-00">半夜1點</option>
	<option value="01-30">半夜1點半</option>
	<option value="02-00">半夜2點</option>
	<option value="02-30">半夜2點半</option>
	<option value="03-00">半夜3點</option>
	<option value="03-30">半夜3點半</option>
	<option value="04-00">半夜4點</option>
	<option value="04-30">半夜4點半</option>
	<option value="05-00">清晨5點</option>
	<option value="05-30">清晨5點半</option>
	<option value="06-00">清晨6點</option>
	<option value="06-30">上午6點半</option>
	<option value="07-00">上午7點</option>
	<option value="07-30">上午7點半</option>
	<option value="08-00">上午8點</option>
	<option value="08-30">上午8點半</option>
	<option value="09-00">上午9點</option>
	<option value="09-30">上午9點半</option>
	<option value="10-00">上午10點</option>
	<option value="10-30">上午10點半</option>
	<option value="11-00">上午11點</option>
	<option value="11-30">上午11點半</option>
	<option value="12-00">中午12點</option>
	<option value="12-30">中午12點半</option>		
	<option value="13-00">下午1點</option>
	<option value="13-30">下午1點半</option>
	<option value="14-00">下午2點</option>
	<option value="14-30">下午2點半</option>
	<option value="15-00">下午3點</option>
	<option value="15-30">下午3點半</option>
	<option value="16-00">下午4點</option>
	<option value="16-30">下午4點半</option>
	<option value="17-00">下午5點</option>
	<option value="17-30">下午5點半</option>
	<option value="18-00">下午6點</option>
	<option value="18-30">下午6點半</option>
	<option value="19-00">下午7點</option>
	<option value="19-30">下午7點半</option>
	</select>
<BR><BR>
<b>節目介紹:</b>
<textarea name="showcontent" cols="74" rows="20"><?php echo $rows["showcontent"];?></textarea>
<BR>
<input type="submit" value="送出" name="submit">
</form>


			<p align="center">　</td>
		</tr>
	</table>
</div>


</body>

</html>
