<?
if($_GET['cookie_clear']=="yes")
{
session_start();
session_destroy();
}
?>
<?
#  -----------------------------------------  #  
#  �{���W�١GC.P.Sub���i�t��                  #
#  �]�p�̡GCooltey                            # 
#  E-Mail�Gcoolteygame@gmail.com             #
#  HomePage�Ghttp://www.cooltey.org            #
#  �{�������GV4.5                            #
#  �̫��s�G2008/9/1                         #
#  �`�N�A�����v�ŧi���o�R���A�{���i���N�ק�I # 
#  �̤U���@�檺 Powered By Cooltey �Ф��n�R�� #
#  -----------------------------------------  #
?>
<? require("to_set.php");?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>���i��</title>
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
# Ū���x�s�ɮסB�p���ɮת���
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
      <p align="center"><font size="2" color="<?=$title_font;?>">���n����</font></td> 
  </tr> 
  <tr> 
    <td width="6%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">�s��</font></td> 
    <td width="60%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">���i���D</font></td> 
    <td width="11%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">���</font></td> 
    <td width="23%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">�o���H</font></td> 
  </tr> 
<?
# ��for�j���Ū�����i����
for($i=0;$i<$count;$i++){
# ��if�P�_�y���^�����i���ƪ���ܽd��
if($i>=($num-$page)&&$i<$num){
# ����list�Nsub.dat�����ɮפ��t�n�A�b�N�ɮץ�explode()��ƨӤ���
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("��",$line[$i]);
$id=$count-$i;
# �h��php�����׽u�ĽX 
$url=stripslashes($url);
$name=stripslashes($name);
$mail=stripslashes($mail);
$title=stripslashes($title);
$kind=stripslashes($kind); 
$note=stripslashes($note);
# �P�_$mail����
if($mail!=""){
	  $person="<a href='mailto:$mail'><font color='$explor_font' size='2' face='Verdana'>$name</font></a>";
	}else{
	  $person="<font color='$explor_font' size='2' face='Verdana'>$name</font>";
	}
# �P�_$style_pic����
if($style_pic=="open"){
$kind_pic="<img src='$kind'></img>";
}else{
$kind_pic="";
}
# ��ܦC��
if($note): 
?> 
  <tr> 
    <td width="6%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $id ;?></font></td> 
    <td width="60%" align="Left" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $kind_pic;?><a href="explor.php?id=<?= $id ;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $title;?></font></a></td> 
    <td width="11%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$explor_font;?>" size="1" face="Verdana"><?= $date ;?></font></td> 
    <td width="23%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $person ;?></td> 
  </tr> 
<? 
# �����C��
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
echo "�@�� ".$all." �g���i||�C�� ".$sub_num." ��|| ";

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
    <td width="100%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><a href="login.php"><font size="1" color="<?=$login_font;?>" face="Verdana"><img src="img/admin.gif" border="0">���i�޲z</font></a></td> 
  </tr> 
  <tr> 
    <td width="100%" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4">
	<font face="Verdana" size="1">�����s�q �������i�t�� </font><font size="1" face="Verdana" font="<?=$cooltey_font;?>"> v4.5 Powered By 
	<a href="http://140.138.38.49">YZUradio</a> 
      </font></td> 
  </tr> 
</table> 
</center> 
</body> 
 
</html>