<?
@session_start(); // �}�� session 

if($_GET['cookie']=="")
{
$_SESSION['user_name'] = $_POST['user_name'];
$_SESSION['user_passwd'] = $_POST['user_passwd'];
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
<?
if($_GET['cookie']=="yes")
  {
   $user_name=$_SESSION['user_name'];
   $user_passwd=$_SESSION['user_passwd'];
  }else{
   $user_name=$_POST['user_name'];
   $user_passwd=$_POST['user_passwd'];
  }
?>

<? # �Nto_set.php�ɮ׾ɤJ ?>
<? require("to_set.php");?>
<html>
<?@$gname=stripslashes($gname);?>
<?@$gup=stripslashes($gup);?>
<?@$guesr=stripslashes($guesr);?>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title><?=@$gname ;?> </title>
<?=@$crs ;?>
</head>
<body>
<?

#  ------------------------------------------------#  
#  �h���b���]�w�覡....                            #
#  ��²��A�u�n�̧Ǧb�U���s�W�@��                  #
#                                                  #
#  $sign_name_�s��="�b��";                         #
#  $sign_passwd_�s��="�K�X";                       #
#                                                  #
#  �M��A�̤U����$mem_passwd=array();��            #
#  ��W�A�s�W��$sign_name_�s��=>$sign_passwd_�s��  #
#  �̭��n���O ���ŨϥΪ� �M ���ŨϥΪ� ������      #
#  �@�w�n�[�W�@�� "," ���M�{���|�d�ñ���I         #
#  ------------------------------------------------#

$sign_name="yzuradio" ;//���D�ϥΪ�
$sign_passwd="foxboy220" ;//���D�ϥΪ̱K�X

$sign_name_1="lulu" ;//�����ŨϥΪ̱b��1
$sign_passwd_1="123" ;//�����ŨϥΪ̱K�X1

$sign_name_2="handsome" ;//�����ŨϥΪ̱b��2
$sign_passwd_2="123" ;//�����ŨϥΪ̱K�X2

$sign_name_3="pinkgirl" ;//�����ŨϥΪ̱b��3
$sign_passwd_3="123" ;//�����ŨϥΪ̱K�X3

$mem_passwd=array($sign_name_1=>$sign_passwd_1,$sign_name_2=>$sign_passwd_2,$sign_name_3=>$sign_passwd_3,$sign_name=>$sign_passwd);

if($_POST['user_name'] ==$sign_name && $_POST['user_passwd'] ==$sign_passwd)
{
  $user_com = "biggest";
}else{
  $user_com = "second";
} 

$mem=array_keys($mem_passwd);
if(!in_array($user_name,$mem)){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>�n�����ѡA�b�����s�b�I</legend><center>�i���]�G<br>1.�D�k�i�J�޲z����<br>2.�n�J�w�W�L10����</font><br><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a></center></fieldset></td></tr></table></center>";
        exit;
}

if($user_passwd!=$mem_passwd[$user_name]){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>�n�����ѡA�K�X�P�b�����šI</legend><center>�i���]�G<br>1.�D�k�i�J�޲z����<br>2.�K�X��J���~</font><br></font><a href=javascript:history.back(1)><font color=$font_link size=2><center>�^�W�@��</font></a></fieldset></td></tr></table></center>";
        exit;
}
?>
</body>
</html>