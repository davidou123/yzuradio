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
<?
if($_POST['ghtml'] != "")
{
$gname=str_replace("��","", $_POST['gname']);
$gup=str_replace("��","", $_POST['gup']);
$guser=str_replace("��","", $_POST['guser']);
$gmail=str_replace("��","", $_POST['gmail']);
$ghome=str_replace("��","", $_POST['ghome']);
$gwidth=str_replace("��","", $_POST['gwidth']);
$gn=str_replace("��","", $_POST['gn']);
$gnnumber=str_replace("��","", $_POST['gnnumber']);
$ghtml=str_replace("��","", $_POST['ghtml']);
$gup=str_replace("��","", $_POST['gup']);
$gm_link=str_replace("��","", $_POST['gm_link']);
$gu_link=str_replace("��","", $_POST['gu_link']);
$go_link=str_replace("��","", $_POST['go_link']);
$gc_link=str_replace("��","", $_POST['gc_link']);
$gm_line=str_replace("��","", $_POST['gm_line']);
$gi_line=str_replace("��","", $_POST['gi_line']);
$go_skin=str_replace("��","", $_POST['go_skin']);
$gm_skin=str_replace("��","", $_POST['gm_skin']);
$gc_skin=str_replace("��","", $_POST['gc_skin']);
$gf_type=str_replace("��","", $_POST['gf_type']);
$gip=str_replace("��","", $_POST['gip']);
$gt_y=str_replace("��","", $_POST['gt_y']);
$gt_m=str_replace("��","", $_POST['gt_m']);
$gt_d=str_replace("��","", $_POST['gt_d']);
$gt_h=str_replace("��","", $_POST['gt_h']);
$gt_s=str_replace("��","", $_POST['gt_s']);
$g_boy=str_replace("��","", $_POST['g_boy']);
$g_girl=str_replace("��","", $_POST['g_girl']);
$system=$gname."��".$gup."��".$guser."��".$gmail."��".$ghome."��".$gwidth."��".$gnnumber."��".$gn."��".$gm_link."��".$gu_link."��".$go_link."��".$gc_link."��".$gm_line."��".$gi_line."��".$go_skin."��".$gm_skin."��".$gc_skin."��".$gf_type."��".$gip."��".$gt_y."��".$gt_m."��".$gt_d."��".$gt_h."��".$gt_s."��".$g_boy."��".$g_girl."��".$ghtml;
$f=fopen("gtype.dat","w+");
fputs($f,$system);
fclose($f);
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>�s�觹��</legend></font><a href=javascript:history.back(1)><font color=$gm_link size=2>�^�W�@���A�ק�</font></a><hr color=$gu_link width=150 size=1></fieldset></td></tr></table>";
}
?>
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

<body>
<center> 
<form action="system.php?cookie=yes" method="post"> 
<table border="1" width="60%" style="background-color: #FFFFFF; border: 1 solid #FFFFFF"> 
  <tr> 
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">���D�m�W�G</font></td> 
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="guser" size="29" value="<?=$guser;?>"></font></td> 
  </tr> 
  <tr> 
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">���������G</font></td> 
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="ghome" size="29" value="<?=$ghome;?>"></font></td> 
  </tr> 
  <tr> 
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�d����</font><font size="2">�W�١G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gname" size="29" value="<?=$gname;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">���DE-Mail�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gmail" size="29" value="<?=$gmail;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�D�s����r��m�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gm_link" size="29" value="<?=$gm_link;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">����r��m�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gu_link" size="29" value="<?=$gu_link;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">��L��r��m�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="go_link" size="29" value="<?=$go_link;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">���v�ŧi��m�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gc_link" size="29" value="<?=$gc_link;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�D�ؽu��m�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gm_line" size="29" value="<?=$gm_line;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">���ؽu��m�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gi_line" size="29" value="<?=$gi_line;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�~���O��m�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="go_skin" size="29" value="<?=$go_skin;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�D�d�����O��m�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gm_skin" size="29" value="<?=$gm_skin;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�^�Яd�����O��m�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gc_skin" size="29" value="<?=$gc_skin;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�ʧO��m(�k)�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="g_boy" size="29" value="<?=$g_boy;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�ʧO��m(�k)�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="g_girl" size="29" value="<?=$g_girl;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�����e�סG</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gwidth" size="29" value="<?=$gwidth;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�̤j�d���r�ơG</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gnnumber" size="29" value="<?=$gnnumber;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">���A���ɮt�]�w�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2">�~�G<input type="text" name="gt_y" size="2" value="<?=$gt_y;?>">��G<input type="text" name="gt_m" size="2" value="<?=$gt_y;?>">��G<input type="text" name="gt_d" size="2" value="<?=$gt_d;?>">�ɡG<input type="text" name="gt_h" size="2" value="<?=$gt_h;?>">���G<input type="text" name="gt_s" size="2" value="<?=$gt_s;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�ؽu�����G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><select size="1" name="gf_type">
    <option selected  value="solid">��u</option>
    <option value="dotted">�I</option>
    <option value="dashed">�u�q</option>
    <option value="groove">���餺�W</option>
    <option value="ridge">����~�Y</option>
    <option value="inset">���W</option>
    <option value="outset">�~�Y</option>
    </select></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">HTML�y�k�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><select name="ghtml" size="1">
        <option selected value="0">HTML�y�k�}��</option>
        <option value="1">HTML�y�k����</option>
      </select></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">IP���ó]�w�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><select name="gip" size="1">
        <option selected value="0">IP����</option>
        <option value="1">IP���</option>
      </select></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�C����ܵ��ơG</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gn" size="3" value="<?=$gn;?>">�� (�̦n���n�Ӧh��I�_�h�nŪ���ܤ[�C)</font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">�d�����Y�e�y(�i��HTML)�G</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><textarea name="gup" rows="4" cols="28"><?=$gup;?></textarea></td>
  </tr>
  <tr>
    <td width="102%" style="border: 1 solid #C0C0C0" colspan="2">
      <p align="center"><input type="Submit" name="send" value="�x�s�]�w"></p>
    </td>
  </tr>
  <tr>
    <td width="102%" style="border: 1 solid #C0C0C0" colspan="2" >
      <p align="center"><font size="1">C.P.Gb v0.89 Powered By <a href="http://cooltey.mytw.net"><font color="#FF0000">Cooltey</font></a></font></td> 
  </tr> 
</table> 
</form> 
</center> 
</body> 
 
</html> 
