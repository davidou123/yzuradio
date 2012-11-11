<?
#  -----------------------------------------  #  
#  程式名稱：C.P.Sub公告系統                  #
#  設計者：Cooltey                            # 
#  E-Mail：coolteygame@gmail.com             #
#  HomePage：http://www.cooltey.org            #
#  程式版本：V4.5                            #
#  最後更新：2008/9/1                         #
#  注意，本版權宣告不得刪除，程式可任意修改！ # 
#  最下面一行的 Powered By Cooltey 請不要刪除 #
#  -----------------------------------------  #
?>
<? # 導入check.php，以確認身分 ?>
<? require("check.php") ;?>
<? @session_start(); // 開啟 session ;?>
<center>

<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>公告傳送</title>
<style type="text/css">
A{ text-decoration: none; }
A:hover { text-decoration: underline; }
</style>
</head>
<body background="snow.gif">
<?
# 判斷是否有按下send按鈕
if(@$_POST['send']=="傳送"){
if(@$_FILES['updata']['name']==""){
    $updname="";
}else{
# 開啟data的資料夾
$updata_dir="./data";  
$dest="$updata_dir/".$_FILES['updata']['name'].""; 
if(eregi(" ","".$_FILES['updata']['name'].""))
{
echo "<table border=0 width=200><tr><td><fieldset><center><br><font color=Red size=2><legend>檔案名稱不能含有空白喔！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
# 複製檔案以上傳
if ( @move_uploaded_file($_FILES['updata']['tmp_name'],$dest)){
    $updname="".$_FILES['updata']['name']."";	 
echo "<br><br><font size=2 color=Green>你所上傳的檔案訊息：</font><br><font size=2 color=Green>檔案名稱：</font><font color=red size=2 face=Fixedsys>".$_FILES['updata']['name']."　　</font><font color=green size=2>檔案大小：</font><font color=red size=2 face=Fixedsys>".$_FILES['updata']['size']." Byte　</font><font color=green size=2>檔案類型：</font><font color=red size=2 face=Fixedsys>".$_FILES['updata']['type']."</font>";
}else{
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>上傳失敗！<br>可能原因為：<br>1.data權限沒有改成777<br>2.伺服器不支援網頁上傳</legend></font><br><hr color=#FFBBCC width=150><br><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
}
}
# 下面都是判斷傳送的值中是否是空值
if(@$_POST['title']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>您忘了打上標題囉！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
if(@$_POST['name']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>您忘了打上姓名囉！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
if(@$_POST['note']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>您忘了打上公告囉！</legend></font><br><hr color=#FFBBCC width=150><br><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}else{
echo "<p></p>";
# 排序好要存取的檔案，用∥來分別
$t=date("Y/m/d");
$kind=str_replace("∥","", $_POST['kind']);
$title=str_replace("∥","", $_POST['title']);
$url=str_replace("∥","", $_POST['url']);
$name=str_replace("∥","", $_POST['name']);
$mail=str_replace("∥","", $_POST['mail']);
$updname=str_replace("∥","", $updname);
@$hidden=str_replace("∥","", $hidden);
$note=str_replace("\r\n","<br>", $_POST['note']);
$main=$kind."∥".$t."∥".$title."∥".$url."∥".$name."∥".$mail."∥".$updname."∥".$hidden."∥".$note."\n";
# 開啟sub.dat
$f=fopen("sub.dat","a+");
# 寫入sub.dat，寫入長度是上面的值
fwrite($f,$main);
# 關閉sub.dat
fclose($f);
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>公告發佈完成</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a><hr color=$menu_bgcolor width=150 size=1><a href=sub.php><font color=$font_link size=2>回公告首頁</font></a></fieldset></td></tr></table>";
}

?>
</body>
</html>