<?
if($_GET['cookie']=="")
{
if(@$_POST['save']=="yes")
{
setcookie("user_name","".$_POST['user_name']."",time()+360000000);
}else{
setcookie("user_name","".$_POST['user_name']."",time()+600);
}
setcookie("user_passwd","".$_POST['user_passwd']."",time()+600);
}
?>
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
<?
if($_GET['cookie']=="yes")
  {
   $user_name=$_COOKIE['user_name'];
   $user_passwd=$_COOKIE['user_passwd'];
  }else{
   $user_name=$_POST['user_name'];
   $user_passwd=$_POST['user_passwd'];
  }
?>
<? require("gsystem.php") ;?>
<? require("css.php");?>
<html>
<?$gname=stripslashes($gname);?>
<?$gup=stripslashes($gup);?>
<?$guesr=stripslashes($guesr);?>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title><?echo $gname ;?> </title>
<?=$crs ;?>
</head>
<body>
<?
$sign_name="yzuradio" ;//����J�b��
$sign_passwd="foxboy220" ;//����J�K�X

$mem_passwd=array($sign_name=>$sign_passwd);

$mem=array_keys($mem_passwd);
if(!in_array($user_name,$mem)){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>�n�����ѡA�b�����s�b�I</legend><center>�i���]�G<br>1.�D�k�i�J�޲z����<br>2.�n�J�w�W�L10����</font><br><a href=javascript:history.back(1)><font color=$gm_link size=2>�^�W�@��</font></a></center></fieldset></td></tr></table></center>";
        exit;
}

if($user_passwd!=$mem_passwd[$user_name]){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>�n�����ѡA�K�X�P�b�����šI</legend><center>�i���]�G<br>1.�D�k�i�J�޲z����<br>2.�K�X��J���~</font><br></font><a href=javascript:history.back(1)><font color=$gm_link size=2><center>�^�W�@��</font></a></fieldset></td></tr></table></center>";
        exit;
}

?>
</body>
</html>