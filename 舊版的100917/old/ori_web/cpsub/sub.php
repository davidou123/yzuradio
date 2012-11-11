<?
if($_GET['cookie_clear']=="yes")
{
session_start();
session_destroy();
}
?>
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
<? require("to_set.php");?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>公告區</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>

<body background="<?=$background ;?>" bgcolor="<?=$bgcolor ;?>">
<?

$page=$sub_num;

if(@$_GET[page]==""){
$num=$page;
}else{
$num=$_GET[page]*$sub_num;
}
# 讀取儲存檔案、計算檔案長度
$lines=file("sub.dat");  
$count=count($lines);
for($a=($count-1);$a>=0;$a--){           
$line[]=$lines[$a];           
}
?> 
<center> 
<table border="0" width="<?=$form_size ;?>"> 
  <tr> 
    <td width="125%" colspan="4" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>"> 
      <p align="center"><font size="2" color="<?=$title_font;?>">重要消息</font></td> 
  </tr> 
  <tr> 
    <td width="6%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">編號</font></td> 
    <td width="60%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">公告標題</font></td> 
    <td width="11%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">日期</font></td> 
    <td width="23%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">發布人</font></td> 
  </tr> 
<?
# 用for迴圈來讀取公告筆數
for($i=0;$i<$count;$i++){
# 用if判斷句來擷取公告筆數的顯示範圍
if($i>=($num-$page)&&$i<$num){
# 先用list將sub.dat中的檔案分配好，在將檔案用explode()函數來分割
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("∥",$line[$i]);
$id=$count-$i;
# 去除php中的斜線衝碼 
$url=stripslashes($url);
$name=stripslashes($name);
$mail=stripslashes($mail);
$title=stripslashes($title);
$kind=stripslashes($kind); 
$note=stripslashes($note);
# 判斷$mail的值
if($mail!=""){
	  $person="<a href='mailto:$mail'><font color='$explor_font' size='2' face='Verdana'>$name</font></a>";
	}else{
	  $person="<font color='$explor_font' size='2' face='Verdana'>$name</font>";
	}
# 判斷$style_pic的值
if($style_pic=="open"){
$kind_pic="<img src='$kind'></img>";
}else{
$kind_pic="";
}
# 顯示列串
if($note): 
?> 
  <tr> 
    <td width="6%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $id ;?></font></td> 
    <td width="60%" align="Left" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $kind_pic;?><a href="explor.php?id=<?= $id ;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $title;?></font></a></td> 
    <td width="11%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$explor_font;?>" size="1" face="Verdana"><?= $date ;?></font></td> 
    <td width="23%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $person ;?></td> 
  </tr> 
<? 
# 結束列串
endif;
}
}
?>
<?
echo "<tr>";
echo "<td width='100%' align='right' bgcolor='$all_bgcolor' style='border: $form_line $form_type $form_color' colspan='4'>";
echo "<font size='2' color='$explor_font' face='Verdana'>";

$all = $count;

$c_page = $all/$sub_num;
echo "共有 ".$all." 篇公告||每頁 ".$sub_num." 筆|| ";

if($_GET['page'] == "")
{
  $now = 1;
}else{
   $now = $_GET['page'];
}
if(($_GET['page']-$now) > 5)
{
  $head = $_GET['page'] - 5;
  $last = $c_page - 5;
}
for($i=(1+$head); $i<=(($c_page-$last)+1); $i++)
{
 if(!(($i - $now)>5 || ($now - $i)>5))
{
if($i == $now)
 {
echo "	[".$i."]";
 }else{
echo "	[<a href='sub.php?page=".$i."'><font size='2' color='$all_font' face='Verdana'>".$i."</font></a>]	";
}
}
}
echo "</font></td></tr>";
?>

  <tr> 
    <td width="100%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><a href="login.php"><font size="1" color="<?=$login_font;?>" face="Verdana"><img src="img/admin.gif" border="0">公告管理</font></a></td> 
  </tr> 
  <tr> 
    <td width="100%" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4">
	<font face="Verdana" size="1">元智廣電 網頁公告系統 </font><font size="1" face="Verdana" font="<?=$cooltey_font;?>"> v4.5 Powered By 
	<a href="http://140.138.38.49">YZUradio</a> 
      </font></td> 
  </tr> 
</table> 
</center> 
</body> 
 
</html>