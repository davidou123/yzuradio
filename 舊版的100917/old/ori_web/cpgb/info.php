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
<? require("check.php") ;?>
<center>
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
<?$gpic=stripslashes($gpic);?>
<body  background="<? echo $gpic ;?>">
<center>
<table border=0  height=1  style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>">
 <tr>
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="#0099FF">�{�������G</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2">CPGB�d���� V0.89</font></td>
  </tr>
  <tr>
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#0099FF" size="2">�̫��s�G</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2">2006.8.27</font></td>
  </tr>
  <tr>
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#0099FF" size="2">�{����o�G</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2">Cooltey@�H���j��</font></td>
  </tr>
  <tr>
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#0099FF" size="2">E-Mail�G</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2">cooltey@yahoo.com.tw</font></td>
  </tr>
  <tr>
    <td width="30%" height="16"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#0099FF" size="2">HomePage�G</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><a href="http://cooltey.mytw.net"><font color="#009933" size="2">http://cooltey.mytw.net</font></a></td>
  </tr>
  <tr>
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="#0099FF">�{�b�d�����ϥΪ̡G</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2"><? echo $guser ;?></font></td>
  </tr>
  <tr>
  <font size="2" color="#0099FF">Cooltey���ܡG</font>
  </tr>
<tr  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gm_skin;?>">
 <font color="#009933" size="2">�ש�X�Ӥ��í�w�������F�A��쥻��rand();��ƩҲ��ͥX�Ӫ����ҽX�A�令�Q��QuickCaptcha1.0���Ϥ����ҽX�覡��C�ϥ��ª����ϥΪ̻��֧�s�a

�S�O�P�¤j����T�� �Ūۡ�</font>
  </tr>

</body>
</html>