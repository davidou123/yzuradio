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

<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>���i�ǰe</title>
<style type="text/css">
A{ text-decoration: none; }
A:hover { text-decoration: underline; }
</style>
</head>
<body background="snow.gif">
<?
# �P�_�O�_�����Usend���s
if(@$_POST['send']=="�ǰe"){
if(@$_FILES['updata']['name']==""){
    $updname="";
}else{
# �}��data����Ƨ�
$updata_dir="./data";  
$dest="$updata_dir/".$_FILES['updata']['name'].""; 
if(eregi(" ","".$_FILES['updata']['name'].""))
{
echo "<table border=0 width=200><tr><td><fieldset><center><br><font color=Red size=2><legend>�ɮצW�٤���t���ťճ�I</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a></fieldset></td></tr></table>";
exit;
}
# �ƻs�ɮץH�W��
if ( @move_uploaded_file($_FILES['updata']['tmp_name'],$dest)){
    $updname="".$_FILES['updata']['name']."";	 
echo "<br><br><font size=2 color=Green>�A�ҤW�Ǫ��ɮװT���G</font><br><font size=2 color=Green>�ɮצW�١G</font><font color=red size=2 face=Fixedsys>".$_FILES['updata']['name']."�@�@</font><font color=green size=2>�ɮפj�p�G</font><font color=red size=2 face=Fixedsys>".$_FILES['updata']['size']." Byte�@</font><font color=green size=2>�ɮ������G</font><font color=red size=2 face=Fixedsys>".$_FILES['updata']['type']."</font>";
}else{
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>�W�ǥ��ѡI<br>�i���]���G<br>1.data�v���S���令777<br>2.���A�����䴩�����W��</legend></font><br><hr color=#FFBBCC width=150><br><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a></fieldset></td></tr></table>";
exit;
}
}
}
# �U�����O�P�_�ǰe���Ȥ��O�_�O�ŭ�
if(@$_POST['title']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>�z�ѤF���W���D�o�I</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a></fieldset></td></tr></table>";
exit;
}
if(@$_POST['name']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>�z�ѤF���W�m�W�o�I</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a></fieldset></td></tr></table>";
exit;
}
if(@$_POST['note']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>�z�ѤF���W���i�o�I</legend></font><br><hr color=#FFBBCC width=150><br><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a></fieldset></td></tr></table>";
exit;
}else{
echo "<p></p>";
# �ƧǦn�n�s�����ɮסA�Ρ��Ӥ��O
$t=date("Y/m/d");
$kind=str_replace("��","", $_POST['kind']);
$title=str_replace("��","", $_POST['title']);
$url=str_replace("��","", $_POST['url']);
$name=str_replace("��","", $_POST['name']);
$mail=str_replace("��","", $_POST['mail']);
$updname=str_replace("��","", $updname);
@$hidden=str_replace("��","", $hidden);
$note=str_replace("\r\n","<br>", $_POST['note']);
$main=$kind."��".$t."��".$title."��".$url."��".$name."��".$mail."��".$updname."��".$hidden."��".$note."\n";
# �}��sub.dat
$f=fopen("sub.dat","a+");
# �g�Jsub.dat�A�g�J���׬O�W������
fwrite($f,$main);
# ����sub.dat
fclose($f);
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>���i�o�G����</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a><hr color=$menu_bgcolor width=150 size=1><a href=sub.php><font color=$font_link size=2>�^���i����</font></a></fieldset></td></tr></table>";
}

?>
</body>
</html>