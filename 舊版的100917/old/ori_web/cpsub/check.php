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
<? # �Nto_set.php�ɮ׾ɤJ ?>
<? require("to_set.php");?>
<? require("sign.php");?>
<? @session_start(); // �}�� session ;?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�ϥΪ��ˬd��</title>
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
<?
if($_GET[user_com] != "")
{
  $user_com = $_GET[user_com];
}elseif($_POST[user_com] != "")
{
  $user_com = $_POST[user_com];
}
if($user_com == "biggest")
{
?>
<font color="<?=$font_link;?>" size="2"><b>[ <?=$user_name;?> ]</b>�o�G�v���G</font><font color="Red" size="2">�̤j</font><br>
<font color="<?=$font_link;?>" size="2">�x</font>
<a href="submit.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">�o�����i</font></a><font color="<?=$font_link;?>" size"2">�x</font>
<a href="del.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">�R��/�s�褽�i</font></a><font color="<?=$font_link;?>" size"2">�x</font>
<a href="deldata.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">�R���ɮ�</font></a><font color="<?=$font_link;?>" size"2">�x</font>
<a href="set.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">�]�w����</font></a><font color="<?=$font_link;?>" size"2">�x</font>
<a href="info.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">�{����T</font></a><font color="<?=$font_link;?>" size"2">�x</font>
<a href="sub.php?cookie_clear=yes"><font color="<?=$font_link;?>" size="2"><b>�n�X�æ^�줽�i�{��</b></font></a><font color="<?=$font_link;?>" size"2">�x</font>
<?
}else{
?>
<font color="<?=$font_link;?>" size="2"><b>[ <?=$user_name;?> ]</b>�o�G�v���G</font><font color="Red" size="2">�̧C</font><br>
<font color="<?=$font_link;?>" size="2">�x</font>
<a href="submit.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">�o�����i</font></a><font color="<?=$font_link;?>" size"2">�x</font>
<a href="del.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">�R�����i</font></a><font color="<?=$font_link;?>" size"2">�x</font>
<a href="info.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">�{����T</font></a><font color="<?=$font_link;?>" size"2">�x</font>
<a href="sub.php?cookie_clear=yes"><font color="<?=$font_link;?>" size="2"><b>�n�X�æ^�줽�i�{��</b></font></a><font color="<?=$font_link;?>" size"2">�x</font>
<?
}
?>
<br><br>
</body>

</html>
