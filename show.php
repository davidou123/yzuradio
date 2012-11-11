<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="menu_style.css" type="text/css" />
	<link rel="stylesheet" href="index.css" type="text/css" />	
	<title>元智之音學生廣播電台</title>
  <style type="text/css"> 
  .micro{
		float : right;font-size: 9pt;
  }
  .imgbord p
  { padding: 4px; border: 1px solid #ddd; background: #fff; margin: 5px;}
  .list tr:hover {background: url(images/tablebg2.png) repeat;} 
  .list .top{background: url(images/line.gif) repeat-x;background-position:bottom;height:70px;font-weight: bold;text-align: center;}
    .trclass{background: url(images/line.gif) repeat-x;background-position:bottom;} 
  .conerup{background: url(images/conerleft.gif) no-repeat;}
  .conerright{background: url(images/conerright.gif) no-repeat; background-position : right top;}
  .inst_title {
	text-indent: -999em;
	background: transparent url(images/showtitle.png) top  no-repeat;
	position: absolute;
	top: 22px;
	left: 350px;
	width: 221px; height: 31px;
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


<div align="center"style="position: relative;">
<BR><BR>
<span class="inst_title">元智之音 節目介紹</span>
	<table border="0" width="880" cellspacing="0" class="list" cellpadding="0" background="images/tablebg.png">
		<tr class="top">
			<td  width="98" class="conerup">DJ</td>
			<td  width="150">節目名稱</td>
			<td  width="179">撥出時間</td>
			<td class="conerright">本集節目介紹</td>
		</tr>
	
<?php
 require_once("SQLconnection.php");
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  employee WHERE Djrole='onlineDJ' ORDER BY showdate DESC";   
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0) 
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
	$showdate=$rows['showdate'];
	if(date('Y-m-d')>$showdate)
	$showdate="<font color='#616161'>".$showdate."<BR><font size='2'><已撥畢></font></font>";
	$showdate2=$rows['showdate2'];
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
$plurk="我正準備收聽".$showdate.$showdate2[0]." 由DJ".$rows['nickname']."所撥出的[".$rows['showname']."] 來一起聽阿";
	echo $table="<tr class='trclass'><td class='imgbord' align='center' width='110'><BR><p><img border='0' src='DJSHOW/".$rows['usrname'].".jpg' width='100' height='100' align='left'><span>".$rows['nickname']."</span></p><BR></td>"
			."<td align='center' width='150'>".$rows['showname']."</td>"
			."<td align='center' width='129'>".$showdate."<BR>".$showdate2[0].$showdate2[1]."分</td>"
			."<td>".nl2br($rows['showcontent'])."<BR>"
			."<div class='micro'>分享:<script src='http://connect.facebook.net/en_US/all.js#xfbml=1'></script><fb:like href='www.元智之音.tw/dj.php?username=".$rows['usrname']."' show_faces='true'allowTransparency='true' width='30' layout='button_count' colorscheme='light'></fb:like>"
			."<a href=\"javascript: void(window.open('http://www.plurk.com/?qualifier=shares&status=' .concat('www.元智之音.tw') .concat(' ') .concat('&#40;') .concat('".$plurk."') .concat('&#41;')));\"><img src='images/plurk.png' alt='瑞迪歐也有玩噗浪客喔'/></a> "
			."<a href=\"javascript: void(window.open('http://twitter.com/home/?status='.concat(".$plurk.") .concat(' ') .concat('www.元智之音.tw')));\"><img src='images/ic_twitter.png' alt='推特一下'/></a></div></td></tr>";//nl2br() 是用來顯示換行用的
	 }
}
  mysql_free_result($result);
?>		

	</table>

	<BR><BR><BR><BR><BR>
</div>
	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include 'footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>