<?
#  -----------------------------------------  #  
#  �{���W�١GC.P.Gb �d����                    #
#  �]�p�̡GCooltey                            # 
#  E-Mail�Gcooltey@yahoo.com.tw               #
#  HomePage�Ghttp://cooltey.mytw.net            #
#  �{�������GV0.89                            #
#  �̫��s�G2006/8/27                         #
#  �`�N�A�����v�ŧi���o�R���A�{���i���N�ק�I # 
#  �̤U���@�檺 Powered By Cooltey �Ф��n�R�� #
#  -----------------------------------------  #
?>
<? require("gsystem.php") ;?>
<? require("css.php");?>
<?
if($_GET['clear']=="yes")
{
setcookie("user_name");
$_COOKIE['user_name']="";
}
?>
<html>
<?$gname=stripslashes($gname);?>
<?$gup=stripslashes($gup);?>
<?$guser=stripslashes($guser);?>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title><?echo $gname ;?> </title>
<?=$crs ;?>
</head>

<body>
<br>
<br>
<br>
<center>
<form method="post" action="check.php">
<table><tr><td><font size="2" color="<?=$gu_link;?>">�x</font><a href="guest.php"><font color="<?=$gm_link;?>" size="2">�^�d���O</font></a><font size="2" color="<?=$gu_link;?>">�x</font><a href="login.php?clear=yes"><font color="<?=$gm_link;?>" size="2">�M���b��</font></a><font size="2" color="<?=$gu_link;?>">�x</font></tr></table><br>
<table border="1" width="30%" height="41" style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>">
  <tr>
    <td width="20%" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>"><p align="center">�b���G</p></font></td>
    <td width="25%" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="user_name" value="<?=$HTTP_COOKIE_VARS['user_name'];?>" size="20"></td>
 </tr>
 <tr>
    <td width="20%" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>"><p align="center">�K�X�G</p></font></td>
    <td width="25%" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="Password" name="user_passwd" size="20"></td>
  </tr>
 <tr>
    <td width="50%" colspan="4" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><p align="center"><input type="checkbox" value="yes" name="save"><font size="2" color="<?=$go_link;?>">�����ڪ��b��</p></font></td>
  </tr>
  <tr>
    <td width="102%" colspan="4" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>">
      <p align="center"><input type="Submit" value="�i�J�޲z��"></p>
    </td>
  </tr>
</table>
</center>
</form>
</body>

</html>
