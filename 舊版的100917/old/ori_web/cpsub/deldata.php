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
<? # �ɤJcheck.php�A�H�T�{���� ?>
<? require("check.php") ;?>
<? @session_start(); // �}�� session ;?>
<center>

<? 
# �P�_�O�_�����Usend���s
if(@$_POST['send']==""){  
echo"<font color=Red size=2><center>�ЧR���z�Q�n�R�����ɮ�</font>"; 
}else{
unlink("data/".$_GET['deldname'].""); 
echo"<font color=Red size=2><center>�ɮקR�����\�I</font><br>"; 
} 
?> 
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�ϥΪ̧R���ɮװ�</title>
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
    
<center>
<table border="0" width="<?=$form_size;?>"> 
  <tr> 
    <td width="100%" colspan="2" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>"> 
      <p align="center"><font size="2" color="<?=$title_font;?>">�R���ɮװ�</font></td> 
  </tr> 
  <tr> 
    <td width="57%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�ɮצW��</font></td> 
    <td width="11%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�R���C</font></td>  
  </tr> 
<center> 
<?
# �}��data��Ƨ�
$data_file=opendir('./data');
# �B��whileŪ��data�����ɮ�
while($all_file=readdir($data_file)):
# �h��.�M..���s���X�{
if($all_file=="."){
continue;
}
if($all_file==".."){
continue;
}
?>    
  <tr> 
    <td width="57%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><a href="./data/<?= $all_file ;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $all_file;?></font></a></td> 
    <form action="deldata.php?deldname=<?= $all_file;?>" method="post"><td width="11%" align="center" bgcolor="#FFFFFF" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="Submit" name="send" value="�R��" style="background-color: <?=$bgcolor;?>; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="hidden" name="user_com" value="<?=$_GET['user_com'];?>"><input type="hidden" name="user_name" value="<?=$_SESSION['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$_SESSION['user_passwd'];?>">   </td></form>  
  </tr> 
<?
# ����while�P�_�y
endwhile;
# ������Ƨ�
closedir($data_file); 
?>
</table>     
<br>  
<a href="sub.php"><font color="<?=$font_link;?>" size="2">�^���i����</font></a>     
</center>      
�@    
</body>    
    
</html>