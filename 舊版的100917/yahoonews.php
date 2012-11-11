<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="900; url=yahoonews.php">
</head>
<body background="http://140.138.5.224/kkk.JPG">

<marquee scrollamount='2' scrolldelay='150' direction= 'up' id=xiaoqing height='600' onmouseover=xiaoqing.stop() 
onmouseout=xiaoqing.start() style="color: #FFFFFF; font-size: 18pt; font-weight: bold;">
<?php 

//----- 定義要擷取的網頁地址
$url = "http://tw.news.yahoo.com/rss/politics";

//----- 讀取網頁源始碼
$fp = file_get_contents($url);
preg_match_all ( "|<title>(.*)</title>|U" ,$fp, $title , PREG_PATTERN_ORDER ); 
preg_match_all ( "|<link>(.*)</link>|U" ,$fp, $link , PREG_PATTERN_ORDER );  
preg_match_all ( "|<pubDate>(.*)GMT</pubDate>|U" ,$fp, $pubDate , PREG_PATTERN_ORDER );  

/*for($i=0;$i<22;$i++)
{
echo"<a target='_blank' href=".$link[1][$i].">".$title[1][$i]."</a>";
echo"<BR>";
}*/
 
//echo"<BR><BR><HR><BR>";
for($i=2;$i<22;$i++)
{
echo $title[1][$i];
  $qq=split(" ",$pubDate[1][$i]);
//echo "  ".$pubDate[1][$i];
echo "  ".$qq[4];
echo "<br>";
// echo $link[1][$i];  
echo"<BR>";
}
?>

</marquee>
</body>
</html>
