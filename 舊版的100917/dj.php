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
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="menu_style.css" type="text/css" />
	<link rel="stylesheet" href="index.css" type="text/css" />	
<title>元智之音學生廣播電台</title>

  <style type="text/css"> 
.leftmenu { 
  float:left; 
}
leftmenu_li {
    background: transparent url(hori_spline.png) top left repeat-x;
    padding: 6px 0 5px;
  list-style-type: none;
}
  </style>
</head>

<body  bgcolor="#2C2C2C">
<div align="center">
<table border="0" width="932" cellspacing="0" cellpadding="0"bgcolor="#FFFFFF">
	<tr><td height="132">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="936" height="132">
          <param name="movie" value="banner.swf">
          <param name="quality" value="high">
          <embed src="banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="936" height="132"></embed></object>

<?php include 'menu_index.php';?>
<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table1">
	<tr>
		<td width="100" valign="top" style="padding-left: 10px; padding-right: 10px">
<div class="leftmenu" style="position: relative; z-index: 1; background-image: url('images/menubg.png')">
	<img border="0" src="images/menutop.png" width="184" height="24"><BR>
	&nbsp;&nbsp;&nbsp;<img border="0" src="images/companyhis.png"><p align="center"><hr width='120'>
<?php
 require_once("SQLconnection.php");
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  employee WHERE Djrole='onlineDJ'";   
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0) 
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
//	echo "<p align='center'><B><a href='dj.php?usrname=".$rows['usrname']."'>".$rows['nickname']."</a><hr width='120'></B></p>";


echo "<li class='leftmenu_li'><a href='dj.php?usrname=".$rows['usrname']."' title='".$rows['nickname']."'>  <span class='news_text'>".$rows['nickname']."</span></a></li>";


	
	 }
}
  mysql_free_result($result);
?>	
</p>

	<img border="0" src="images/menudown.png" width="184" height="27"></div>　</td>
	
		<td style="padding-left: 10px; padding-right: 10px">
<div align='center'>
<BR><BR>
	<table border='0' width='364' id='table2' cellspacing='0' cellpadding='0'>
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
echo $showinfo;?>
<iframe src="http://www.facebook.com/plugins/like.php?href=140.138.5.228%2Fdj.php?username=<? echo$usrname;?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
　</td>
	</tr>
</table>




	
	
	


</div>


</div>
	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include 'footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>
