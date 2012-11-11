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
<? # 將to_set.php檔案導入 ?>
<? require("to_set.php");?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>觀看公告區</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>

<body background="<?=$background;?>" bgcolor="<?=$bgcolor;?>">
<? 
# 開啟sub.dat的檔案
$lines=file("sub.dat");  
$count=count($lines);  
?> 
<p> 
<center> 
<? 
$n_id=$_GET['id'];
# 直接分割不用for()來重複分割，直接取某列的值來顯示其存取的值
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("∥",$lines[$n_id-1]); 
# 去除php中的斜線衝碼 
$url=stripslashes($url);
$name=stripslashes($name);
$mail=stripslashes($mail);
$title=stripslashes($title);
$kind=stripslashes($kind); 
$note=stripslashes($note);  
# 判斷$updname的值
if($updname==""){ 
$updname="<font color=#CC6600 size=1 face=Verdana>沒有相關檔案</font>"; 
}else{
$updname="<a href=./data/$updname target='_new'><font size=1 color=$login_font face='Verdana'>$updname</font></a>";
}
# 判斷$url
if($url==""){ 
$url="<font color=#CC6600 size=1 face=Verdana>沒有相關連結</font>"; 
}else{
$url="<a href=$url target='_new'><font size=1 color=$login_font face='Verdana'>$url</font></a>";
}
# 判斷$mail的值
if($mail!=""){
	  $person="<a href='mailto:$mail'><font color='$menu_font' size='1' face='Verdana'>$name</font></a>";
	}else{
	  $person="<font color='$menu_font' size='1' face='Verdana'>$name</font>";
	}
if($style_pic=="open"){
          $kind_pic="<img src='$kind'></img>";
        }else{
          $kind_pic="";
}
?> 
<table border="0" width="<?=$form_size;?>"> 
  <tr> 
    <td width="100%" colspan="3" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>"> 
      <p align="center"><font size="2" color="<?=$title_font;?>">觀看公告區</font></td> 
  </tr> 
  <tr> 
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" rowspan="2"><font size="2" color="<?=$menu_font;?>">公告內容：</font></td> 
    <td width="56%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $kind_pic ;?><font size="2" color="<?=$menu_font;?>" face="Verdana"><?= $title ;?></font></td>  
    <td width="24%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>" face="Verdana">From</font><font size="2" color="<?=$menu_font;?>">：</font><?= $person ;?></td> 
  </tr> 
<center>    
  <tr> 
    <td width="80%" height="50" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="2"><font size="2" color="<?=$explor_font;?>" face="Verdana"><?= $note ;?></font></td> 
  </tr> 
  <tr> 
    <td width="20%" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">公告日期：</font></td> 
    <td width="80%" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="2"><font color="<?=$menu_font;?>" size="1" face="Verdana"><?= $date ;?></font></td>  
  </tr>  
  <tr>  
    <td width="20%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">相關檔案：</font></td> 
    <td width="80%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="2"><?= $updname ;?></td> 
  </tr> 
  <tr> 
    <td width="20%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">相關連結：</font></td> 
    <td width="80%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="2"><?= $url ;?></td> 
  </tr> 
</table> <br>
<a href="sub.php"><font color="<?=$font_link;?>" size="2">回公告首頁</font></a> 
</center>   
　  
</body>  
  
</html>  