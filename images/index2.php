<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="menu_style.css" type="text/css" />
	<link rel="stylesheet" href="index.css" type="text/css" />	
<title>元智之音學生廣播電台</title>

  <style type="text/css"> 
.leftmenu { 
  float:right; 

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


<div align="center"  style="position: relative;top:-5px">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="680" valign="top" align="center" >
		<table border="0" width="100%" cellspacing="0" cellpadding="0" background="images/todaybg.JPG" height="50">
	<tr><td>
	
<?php
date_default_timezone_set("Asia/Taipei");
 require_once("SQLconnection.php");
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  employee WHERE Djrole='onlineDJ' &&showdate='".date('Y-m-d')."'";   
$result = mysql_query($sql); // 執行SQL指令
if (mysql_num_rows($result) != 0) 
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {

if($rows['showdate2']=="21-00"){  //如果9點有節目就存進去
$today['9']['nickname']=$rows['nickname'];
$today['9']['showname']=$rows['showname'];
}
elseif($rows['showdate2']=="22-00"){ //如果10點有節目就存進去
$today['10']['nickname']=$rows['nickname'];
$today['10']['showname']=$rows['showname'];
}
elseif($rows['showdate2']=="23-00"){ //如果11點有節目就存進去
$today['11']['nickname']=$rows['nickname'];
$today['11']['showname']=$rows['showname'];
}

	 }
}
  mysql_free_result($result);
if($today['9']['nickname']=="" &&$today['10']['nickname']=="" &&$today['11']['nickname']==""){
echo "今天整日音樂不設限";}
else{
  echo "今晚節目";
IF($today['9']['nickname']!=""){
  echo "<img border='0' src='images/9pm.gif' width='32' height='26'>";
echo "<B>".$today['9']['nickname']."</B>的　[".$today['9']['showname']."]　";
}
IF($today['10']['nickname']!=""){
echo "<img border='0' src='images/10pm.gif' width='32' height='26'>";
echo "<B>".$today['10']['nickname']."</B>的　[".$today['10']['showname']."]　";
}
IF($today['11']['nickname']!=""){
echo "<img border='0' src='images/11pm.gif' width='32' height='26'>";
echo "<B>".$today['11']['nickname']."</B>的　[".$today['11']['showname']."]　";
}
}
?>	
	
		</td></tr>
</table>　		

<!-- 內文開始 -->
<span class="Apple-style-span" style="border-collapse: separate; color: rgb(0, 0, 0); font-family: Arial; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; -webkit-text-decorations-in-effect: none; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; font-size: medium; ">
<span class="Apple-style-span" style="border-collapse: collapse; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 13px; ">
<div style="text-align: center; ">
	<font size="4" face="microsoft jhenghei,sans-serif"><strong>甚麼？！！！</strong></font></div>
<div style="text-align: center; ">
	&nbsp;</div>
<div style="text-align: center; ">
	<font size="4" face="microsoft jhenghei,sans-serif"><strong>工藤新一要來元智了？！！！</strong></font></div>
<font size="4" face="microsoft jhenghei,sans-serif">
<div style="text-align: center; ">
	<br>
	<strong>工藤新一的專屬配音員－劉傑</strong></div>
<div style="text-align: center; ">
	&nbsp;</div>
<div style="text-align: center; ">
	<strong><font color="#ff0000" size="6">10月13日（週三）中午</font></strong></div>
<div style="text-align: center; ">
	&nbsp;</div>
<div style="text-align: center; ">
	<strong><font color="#ff0000" size="6">R70103</font></strong></div>
<div style="text-align: center; ">
	&nbsp;</div>
<div style="text-align: center; ">
	<strong><font color="#ff0000" size="6">&nbsp;　　等你來相見！！！</font></strong></div>

<p align="center">
<img border="0" src="5.png" width="512" height="740"></p>

<div style="text-align: center; ">
	售票期間：<strong><font color="#000099">10月4日（週一）－ 10月8日（週五）</font></strong></div>
<div style="text-align: center; ">
	&nbsp;</div>
<div style="text-align: left; ">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<wbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 售票地點：<strong><font color="#000099">中午五館前</font></strong></div>
<div style="text-align: left; ">
	<strong><font color="#000099">　　　　　　　　&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午美食街全家前</font></strong></div>
<div style="text-align: left; ">
	&nbsp;</div>
<div style="text-align: left; ">
	　　　　　　　　　　&nbsp; 聯絡人：&nbsp;&nbsp;&nbsp;<span class="Apple-converted-space">&nbsp;</span><strong><font color="#000099">王偉達　0921-287-076</font></strong></div>
<div style="text-align: left; ">
	<div style="text-align: center; ">
		&nbsp;</div>
</div>
<div style="text-align: center; ">
	&nbsp;<br>
	<font color="#ff0000" size="6"><strong><u>限量150張&nbsp; 僅此一次</u><span class="Apple-converted-space">&nbsp;</span>&nbsp;</strong></font></div>
<font color="#ff0000" size="6"><strong>
<div style="text-align: left; ">
	<br>
　</div>
</strong></font>　　　　　　　　　&nbsp; 老師代表作品：　<div style="text-align: center; ">
	&nbsp;</div>
<div style="text-align: center; ">
	名偵探柯南：<strong>工藤新一</strong>、高木涉、小&#23947;元太、本堂瑛祐</div>
<div style="text-align: left; ">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<wbr>&nbsp;&nbsp;&nbsp;</div>
<div style="text-align: left; ">
	　　　　　　　　　&nbsp;犬夜叉：<b>犬夜叉</b></div>
<div style="text-align: left; ">
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;<wbr>&nbsp;&nbsp;&nbsp;</div>
<div style="text-align: left; ">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<wbr>&nbsp;&nbsp; &nbsp;多啦A夢：<strong>小夫</strong>、大雄的爸爸、老師<br>
	&nbsp;</div>
<div style="text-align: left; ">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<wbr>&nbsp;&nbsp;&nbsp;&nbsp;幽遊白書：<b>浦飯幽助</b>、戶愚呂兄、浦島太郎、陣</div>
<div style="text-align: center; ">
	&nbsp;</div>
<div style="text-align: center; ">
	族繁不及備載.....</div>
<div style="text-align: center; ">
	&nbsp;</div>
<div style="text-align: center; ">
	<strong><font color="#3333ff" size="6">想知道如何為不同的動漫生命配出屬於自己的聲音嗎？</font></strong></div>
<div style="text-align: center; ">
	&nbsp;</div>
<div style="text-align: center; ">
	<strong><font color="#3333ff" size="6">那就一定要來廣電名人演講！！！！！！！</font></strong></div>
</font></span></span>

	
		
<!-- 內文結束 -->
		</td>
		<td width="250" height="500" valign="top"  align="right" style="padding-right: 2px;padding-left: 0px" background="images/indexleftbg.JPG">
		
  <iframe src="http://140.138.5.224:8301/nowplaying.html" TITLE="URL" height="100"
            width="240" frameborder="0"
            marginwidth="0" marginheight="0" vspace="0" hspace="0">
    </iframe>

<img border="0" src="images/indextalk.gif" width="200" height="41">
<!-- BEGIN CBOX - www.cbox.ws - v001 -->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="cboxdiv">
<div><iframe frameborder="0" width="250" height="305" src="chat.htm" marginheight="2" marginwidth="2" scrolling="no" allowtransparency="yes" name="cboxmain" style="border:#DBE2ED 1px solid;" id="cboxmain"></iframe></div>
<div><iframe frameborder="0" width="250" height="45" src="box.htm" marginheight="2" marginwidth="2" scrolling="no" allowtransparency="yes" name="cboxform" style="border:#DBE2ED 1px solid;border-top:0px" id="cboxform"></iframe></div>
</div><a href="http://www4.cbox.ws/box/index.php?boxid=3793225&boxtag=mnkd5t&sec=main" target="cboxmain" onclick="return do_refresh();" id="rf">
<font size="2" color="#008080">訊息更新</font></a><font size="2" color="#008080">
<!-- END CBOX -->
</font>
<p align="center">
<img border="0" src="images/radioplurk.jpg" width="200" height="41"><br>
<iframe src="http://www.plurk.com/getWidget?uid=4798431&amp;h=356&amp;w=250&amp;u_info=2&amp;bg=3B5998&tl=F6F6F6" width="250" frameborder="0" height="360" scrolling="no"></iframe></p>
<div style="float: right; padding: 1px;"> <a href="http://www.plurk.com/yzuradio/invite/4" target="_blank" style="font-size: 10px !important; color: #999 !important; border: none; text-decorate: none;" title="拜訪瑞迪歐的噗浪克">拜訪瑞迪歐的噗浪克</a></div>

</div></td>
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