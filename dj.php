<?php
if($_GET['usrname']){
$usrname=$_GET['usrname'];}
else{
$usrname="b1ncy";}

 require_once("SQLconnection.php");
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  employee WHERE Djrole='onlineDJ' AND usrname='".$usrname."'";   
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0) 
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
	$nickname=$rows['nickname'];
	$showname=$rows['showname'];
	$showdate=$rows['showdate'];
	$showdate2=$rows['showdate2'];	
	$showinfo=$rows['showinfo'];
//判斷時間
$showdate2=explode("-",$showdate2);
if(0<=$showdate2[0]&&$showdate2[0]<=5){
$showdate2[0]="半夜".$showdate2[0]."點";}
elseif(6<=$showdate2[0]&&$showdate2[0]<=11){
$showdate2[0]="上午".$showdate2[0]."點";}
elseif(12==$showdate2[0]){
$showdate2[0]="中午".$showdate2[0]."點";}
elseif(13<=$showdate2[0]&&$showdate2[0]<=18){
$showdate2[0]=$showdate2[0]-12;
$showdate2[0]="下午".$showdate2[0]."點";}
elseif(19<=$showdate2[0]&&$showdate2[0]<=23){
$showdate2[0]=$showdate2[0]-12;
$showdate2[0]="晚上".$showdate2[0]."點";
}
//判斷時間
	 }
}
 mysql_free_result($result);
// 這邊是查節目內容的
$sql2 = "SELECT * FROM  historyshow WHERE usrname='".$usrname."'";   
$result2 = mysql_query($sql2); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result2) != 0) 
{
  while ($row = mysql_fetch_array($result2, MYSQL_BOTH)) {
	$showcontent[$row['showdate']]=$row['showcontent'];
	 }
}
  mysql_free_result($result2);
// 這邊是查節目內容的 輸出echo $showcontent['2010-09-28'];

//隨選隨撥  採用去那個資料夾 把資料夾下的所有檔案都列出來的方式

$userdir="d:hisshow/".$usrname;

if ($handle = opendir($userdir)) {
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
		$hisshowname[]=$file;
    }
    closedir($handle);
}
//隨選隨撥

?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="menu_style.css" type="text/css" />
	<link rel="stylesheet" href="index.css" type="text/css" />	
<title>元智之音學生廣播電台</title>

  <style type="text/css"> 
 #hisradio{
 font-size: 16pt;font-weight: bold;}
.leftmenu { 
	float:left; 
	background:#0079B2;
	position: relative;
	background-image: url('images/menubg.png');
}
.leftmenu_li {
    background: transparent url(images/hori_spline.png) top center no-repeat;
    padding: 6px 0 5px;
	text-align: center;
  list-style-type: none;
}
.news_text{font-size: 10pt;
}
.list td:hover {background: #FFF;}  
.list td{background-color: #F8F8F8;  text-align: center;}
.list .tdimportant{background-color: #ECECEC;font-weight:bold;color: #666;width:122px}
td .span{font-weight:bold;}
.info {position:relative; margin:2px; padding:5px; text-decoration:none;}
.info span {display: none; }
.info:hover span.content{background: url(http://140.138.5.228/images/z3.gif); display:block; position:absolute; top:30px; left:30px; width:230px; padding:15px; border:1px solid #ccc; text-align:left; color:#FFF;  z-index:20;}
  </style>
  <script type="text/javascript" src="mediaplayer.js"></script>
</head>

<body  bgcolor="#2C2C2C">
<div align="center">
<table border="0" width="932" cellspacing="0" cellpadding="0"bgcolor="#FFFFFF">
	<tr> <td height="132">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="936" height="132">
          <param name="movie" value="banner.swf">
          <param name="quality" value="high">
          <embed src="banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="936" height="132"></embed></object>

<?php include 'menu_index.php';?>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td width="100" valign="top" style="padding-left: 10px; padding-right: 10px;">
<div class="leftmenu" >
	<img border="0" src="images/menutop.png" width="184" height="24"><BR>
	&nbsp;&nbsp;&nbsp;<img border="0" src="images/companyhis.png">
<?php
 require_once("SQLconnection.php");
	$link = create_connection();// 建立MySQL資料庫連結
	$sql = "SELECT * FROM  employee WHERE Djrole='onlineDJ'";   // 建立SQL指令字串
	$result = mysql_query($sql); // 執行SQL指令
if (mysql_num_rows($result) != 0) // 是否有文章
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
echo "<li class='leftmenu_li'><a href='dj.php?usrname=".$rows['usrname']."' title='".$rows['nickname']."'>  <span class='span news_text'>".$rows['nickname']."</span></a></li>";

	 }
}
  mysql_free_result($result);
?>	
	<img border="0" src="images/menudown.png" width="184" height="27"></div>　</td>
	
		<td style="padding-left: 10px; padding-right: 10px" valign="top">
<div align='center'>
<BR><BR>
	<table border='0' width='364' cellspacing='0' cellpadding='0'>
		<tr><td width='364' colspan='2'>
			<img border='0' src='DJSHOW/<? echo$usrname;?>2.jpg' width='355' height='268'></td></tr>
		<tr><td width='190' valign='top'>DJ 名 稱:<B><? echo$nickname;?></B><br>
			節目名稱:<B><? echo$showname;?></B></td>
			<td width='174' valign='top'>下次撥出時間:<BR><B><? echo$showdate."<BR>".$showdate2[0].$showdate2[1]."分"; ?></B></td></tr>
	</table>
	<BR>
<? 
      $showinfo = str_replace('\"',"\"",$showinfo);  //把\"取代成" 
	  /*這邊''內的\"是要被取代掉的 要被取代成" 阿因為又會造成程式判斷錯誤 所以要多一個\來跳脫讓系統知道是"*/
echo $showinfo;?><BR>
<iframe src="http://www.facebook.com/plugins/like.php?href=www.元智之音.tw/dj.php?username=<? echo$usrname;?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"> </iframe>

<div align="center">
<span id="hisradio">歷史節目隨選隨聽</span>
<HR>
	<table border="0" width="449" class="list">
		<tr class="tdimportant">
			<td width="134" ><b>節目隨選日期</b></td>
			<td align="center"><b>節目收聽</b></td>
		</tr>
<? 
foreach($hisshowname as $key=>$value)
{

$msg=$value;  //節目範本 [節目]報告班長2010-12-21_18-00 .mp3
$msg=iconv("big5","utf-8",$msg);
$day= substr($msg,-13,2);
$month= substr($msg,-16,2);
$year= substr($msg,-21,4);
$show=substr($msg,8);  //從[節目]往後取 中文雙字元
$show=substr($show,0,-21);
$today="20".date("y-m-d"); //今天日期
$showday=$year."-".$month."-".$day; //節目日期
if($key>1 &&$today>$showday)  //為了避免DJ節目上傳還沒首播就顯示出來了
{
echo "<tr><td width='134'>".$year."年".$month."月".$day."日</td>";
echo "<td><a class='info' target='_blank' href='http://140.138.5.228/hisshows/".$usrname."/".$msg."'>".$show."<span class='content'><b><font color='#000'>[節目介紹]</font></b><BR>".strip_tags($showcontent[$showday])."</span></a></td></tr>";
}
}
?>
	</table>
	<BR>
<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=189147971125647&amp;xfbml=1"></script><fb:comments xid="189147971125647" numposts="10" width="425" publish_feed="true"></fb:comments>	
	
	
</div>

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
