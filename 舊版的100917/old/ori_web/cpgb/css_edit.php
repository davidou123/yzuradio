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
<? require("check.php");?>
<center>
<? 
if($_POST['send']=="�x�s�]�w"){ 
$css_save=trim($_POST['css']); 
$f=fopen("css.dat","w+"); 
fwrite($f,$css_save); 
fclose($f); 
echo "<center><font color='red' size='2'>�z���]�w�w�x�s�����I</font>"; 
}else{ 
echo "<center><font color='red' size='2'>�жi��s��I</font>"; 
}
?>    
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
<center>    
<form action="css_edit.php?cookie=yes" method="post"> 
<table border="1" width="60%" style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>">    
  <tr>    
    <td width="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">�Ъ`�N�GCSS���s�ưO�o�n�J���ˬd��A�n���M��ɭԯd�����N�|�ǩǪ���I</font><br><center><font color="Red" size="2">���������M�γ]�w��I</font></td>    
  </tr>    
  <tr>    
    <td width="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><textarea name="css" rows="12" cols="72"><?= $crs ;?></textarea></td>    
  </tr>    
  <tr>    
    <td width="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>">    
      <p align="center"><input type="Submit" name="send" value="�x�s�]�w"></p>    
    </td>    
  </tr>    
</table>    
</form>   
</center>    
</body>    
    
</html> 