<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="元智大學,元智之音,廣播電台,yzu yzuradio,元智知音,學生廣播電台,DJ,瑞迪歐, 元智大學廣電社,http://yzuradio.twbbs.org,www.元智之音.tw">
	<meta name="description" content="元智之音為24小時全天候播放的學生電台
節目首播時間為每周一至週五晚上十點到凌晨一點，其他時間為重播節目及播放音樂；
歡迎學校及各社團需要活動宣傳的同學來提供資訊，由我們為您特製廣告在校園內播放。">
	<meta name="author" content="davidou">
	<meta name="copyright" CONTENT="本網頁著作權元智之音學生廣播電台所有">
	<meta name="URL" content="http://www.元智之音.tw">
	<meta http-equiv="imagetoolbar" content="no" />
	<link rel="stylesheet" href="menu_style.css" type="text/css" />
	<link rel="stylesheet" href="index.css" type="text/css" />	
<title>元智之音學生廣播電台</title>

  <style type="text/css"> 
.leftmenu { 
	float:right; 
		  }
.hisconter{   /*計數器區塊*/
		background-image : url(images/hisconter.png);
		height:51px;
		}
.hisconterword{   /*計數器文字*/
		font-weight: bold;
		float:left;
		color:#872900;
		padding-top:15px; 
		padding-left:130px; 
		}
/*本日節目*/
.today{	border:none;}
.today li{float:left;}
.today ul{
	list-style:none;
	margin:0;
	padding:0;
	}
	.today li a{ /*節目的介紹方塊文字區塊*/
		color:#000;
		display:block;
		text-align:left;
		text-decoration:none;
		}
	.today li ul .uptoday{
		background: url(images/todayup.png) top no-repeat;
		padding-top: 27px;
	}
.today li ul a{
		padding: 0pt 5pt 0pt 5pt; /*宣告四邊不同值順序為上、右、下、左*/
		background-color:#fff;
	}
	.today li ul{ /*今晚節目的介紹方塊*/  
		background: url(images/todaybg2.png) bottom no-repeat;
		padding-bottom: 20px;
		border-top:1px solid #0079b2;
		border-left:1px solid #969696;
		border-right:1px solid #969696;
		border-bottom:1px solid #969696;
		display:none;
		height:auto;
		width:350px; 
		position:absolute;
		z-index:200;
		}
	.today li:hover ul{
		display:block;
		}
/*本日節目*/
  </style>
<script type="text/javascript">
  var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-19602881-3']);
      _gaq.push(['_trackPageview']);

        (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		      })();

 </script>
</head>

<body>
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
	//內文開始
$sql = "SELECT * FROM  system";   
$result = mysql_query($sql); // 執行SQL指令	
 while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
	$index= $rows['webindex'];
	$webconter= $rows['webconter'];
	}
//內文結束
if($webconter==""){
$webconter="1";}
else{
$webconter++;
}
       // 建立SQL字串
   $sql = "UPDATE  system SET webconter='".$webconter."' WHERE ID='system'";
	  // 建立MySQL資料庫連結
    $link = create_connection();
      mysql_query($sql);

// 建立SQL指令字串
$sql = "SELECT * FROM  employee WHERE Djrole='onlineDJ' &&showdate='".date('Y-m-d')."'";   
$result = mysql_query($sql); // 執行SQL指令
$time_map=array("12-00","13-00","14-00","15-00","16-00","17-00","18-00","19-00","20-00","21-00","22-00","23-00");
if (mysql_num_rows($result) != 0) 
{
  $i=0;
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH))
{
if($rows['showdate2']=="21-00"){  //如果9點有節目就存進去
$today['9']['usrname']=$rows['usrname'];
$today['9']['nickname']=$rows['nickname'];
$today['9']['showname']=$rows['showname'];
$today['9']['showcontent']=$rows['showcontent'];
}
else if($rows['showdate2']=="22-00"){ //如果10點有節目就存進去
$today['10']['usrname']=$rows['usrname'];
$today['10']['nickname']=$rows['nickname'];
$today['10']['showname']=$rows['showname'];
$today['10']['showcontent']=$rows['showcontent'];
}
else if($rows['showdate2']=="23-00"){ //如果11點有節目就存進去
$today['11']['usrname']=$rows['usrname'];
$today['11']['nickname']=$rows['nickname'];
$today['11']['showname']=$rows['showname'];
$today['11']['showcontent']=$rows['showcontent'];
}
else if($rows['showdate2']=="12-00"){ //如果12點有節目就存進去
$today['12']['usrname']=$rows['usrname'];
$today['12']['nickname']=$rows['nickname'];
$today['12']['showname']=$rows['showname'];
$today['12']['showcontent']=$rows['showcontent'];
}
else if($rows['showdate2']=="13-00"){ //如果1點有節目就存進去
$today['1']['usrname']=$rows['usrname'];
$today['1']['nickname']=$rows['nickname'];
$today['1']['showname']=$rows['showname'];
$today['1']['showcontent']=$rows['showcontent'];
}
else if($rows['showdate2']=="14-00"){ //如果2點有節目就存進去
$today['2']['usrname']=$rows['usrname'];
$today['2']['nickname']=$rows['nickname'];
$today['2']['showname']=$rows['showname'];
$today['2']['showcontent']=$rows['showcontent'];
}
else if($rows['showdate2']=="15-00"){ //如果3點有節目就存進去
$today['3']['usrname']=$rows['usrname'];
$today['3']['nickname']=$rows['nickname'];
$today['3']['showname']=$rows['showname'];
$today['3']['showcontent']=$rows['showcontent'];
}
else if($rows['showdate2']=="16-00"){ //如果4點有節目就存進去
$today['4']['usrname']=$rows['usrname'];
$today['4']['nickname']=$rows['nickname'];
$today['4']['showname']=$rows['showname'];
$today['4']['showcontent']=$rows['showcontent'];
}
else if($rows['showdate2']=="17-00"){ //如果5點有節目就存進去
$today['5']['usrname']=$rows['usrname'];
$today['5']['nickname']=$rows['nickname'];
$today['5']['showname']=$rows['showname'];
$today['5']['showcontent']=$rows['showcontent'];
}
else if($rows['showdate2']=="18-00"){ //如果6點有節目就存進去
$today['6']['usrname']=$rows['usrname'];
$today['6']['nickname']=$rows['nickname'];
$today['6']['showname']=$rows['showname'];
$today['6']['showcontent']=$rows['showcontent'];
}
	 }
}
  mysql_free_result($result);
for ($i=0; $i < 12; $i ++)
	$check_prog .= $today[$i]['nickname'];
if($check_prog == ""){
echo "今天整日音樂不設限";}
else{
echo"<div class='today'><ul><li>今晚節目</li>";
for($i = 0; $i < 12; $i ++)
{
IF($today[$i]['nickname']!=""){
echo"<li><a href='#'>"
."<img border='0' src='images/".$i."pm.gif' width='32' height='26'>"  //9點圖片
."<B>".$today[$i]['nickname']."</B>的　[".$today[$i]['showname']."]　</a>";
echo"<ul><div class='uptoday'><li><a href='#'><img border='0' src='DJSHOW/".$today[$i]['usrname'].".jpg' width='100' height='100' align='left'>大家好，我是 <B>".$today[$i]['nickname']."<B><BR>今晚</B>".$i."點</B>的優質節目<BR>將由我與你線上分享。<BR><BR><b><font size='2' color='#808080'>各式最優質節目盡在元智之音。</font></b><BR>".nl2br($today[$i]['showcontent'])."</a></li><BR> <BR></div></ul> </li>";
}
}
echo"</ul></div>";
}
?>	
</td></tr>
</table>　		

<!-- 內文開始 -->
<?echo $index;?>

	
		
<!-- 內文結束 -->
		</td>
		<td width="250" height="500" valign="top"  align="right" style="padding-right: 2px;padding-left: 0px" background="images/indexleftbg.JPG">
		
  <iframe src="http://140.138.5.228:8301/nowplaying.html" TITLE="URL" height="100"
            width="240" frameborder="0"
            marginwidth="0" marginheight="0" vspace="0" hspace="0">
    </iframe>

<img border="0" src="images/indextalk.gif" width="200" height="41">
<?php include 'chat.php';?>

<p align="center">
<img border="0" src="images/radioplurk.jpg" width="200" height="41"><br>
<iframe src="http://www.plurk.com/getWidget?uid=4798431&amp;h=356&amp;w=250&amp;u_info=2&amp;bg=3B5998&tl=F6F6F6" width="250" frameborder="0" height="360" scrolling="no"></iframe></p>
<div style="float: right; padding: 1px;">
 <a href="http://www.plurk.com/yzuradio/invite/4" target="_blank" style="font-size: 10px !important; color: #999;" title="拜訪瑞迪歐的噗浪克">拜訪瑞迪歐的噗浪克</a></div>
<p align="center">
<img border="0" src="images/radioqr.jpg" width="200" height="41"><br>
<img border="0" src="http://chart.apis.google.com/chart?cht=qr&chl=http://www.xn--9iq25es71aqh9b.tw/&chs=120x120
"></p>
<div class="hisconter">
<span class="hisconterword"><? echo $webconter; ?></span>
</div>

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
