<?
#  -----------------------------------------  #  
#  程式名稱：C.P.Gb 留言版                    #
#  設計者：Cooltey                            # 
#  E-Mail：cooltey@yahoo.com.tw               #
#  HomePage：http://cooltey.mytw.net            #
#  程式版本：V0.89                            #
#  最後更新：2006/8/27                         #
#  注意，本版權宣告不得刪除，程式可任意修改！ # 
#  最下面一行的 Powered By Cooltey 請不要刪除 #
#  -----------------------------------------  #
?>
<? require("check.php") ;?>
<?
if($_POST['ghtml'] != "")
{
$gname=str_replace("∥","", $_POST['gname']);
$gup=str_replace("∥","", $_POST['gup']);
$guser=str_replace("∥","", $_POST['guser']);
$gmail=str_replace("∥","", $_POST['gmail']);
$ghome=str_replace("∥","", $_POST['ghome']);
$gwidth=str_replace("∥","", $_POST['gwidth']);
$gn=str_replace("∥","", $_POST['gn']);
$gnnumber=str_replace("∥","", $_POST['gnnumber']);
$ghtml=str_replace("∥","", $_POST['ghtml']);
$gup=str_replace("∥","", $_POST['gup']);
$gm_link=str_replace("∥","", $_POST['gm_link']);
$gu_link=str_replace("∥","", $_POST['gu_link']);
$go_link=str_replace("∥","", $_POST['go_link']);
$gc_link=str_replace("∥","", $_POST['gc_link']);
$gm_line=str_replace("∥","", $_POST['gm_line']);
$gi_line=str_replace("∥","", $_POST['gi_line']);
$go_skin=str_replace("∥","", $_POST['go_skin']);
$gm_skin=str_replace("∥","", $_POST['gm_skin']);
$gc_skin=str_replace("∥","", $_POST['gc_skin']);
$gf_type=str_replace("∥","", $_POST['gf_type']);
$gip=str_replace("∥","", $_POST['gip']);
$gt_y=str_replace("∥","", $_POST['gt_y']);
$gt_m=str_replace("∥","", $_POST['gt_m']);
$gt_d=str_replace("∥","", $_POST['gt_d']);
$gt_h=str_replace("∥","", $_POST['gt_h']);
$gt_s=str_replace("∥","", $_POST['gt_s']);
$g_boy=str_replace("∥","", $_POST['g_boy']);
$g_girl=str_replace("∥","", $_POST['g_girl']);
$system=$gname."∥".$gup."∥".$guser."∥".$gmail."∥".$ghome."∥".$gwidth."∥".$gnnumber."∥".$gn."∥".$gm_link."∥".$gu_link."∥".$go_link."∥".$gc_link."∥".$gm_line."∥".$gi_line."∥".$go_skin."∥".$gm_skin."∥".$gc_skin."∥".$gf_type."∥".$gip."∥".$gt_y."∥".$gt_m."∥".$gt_d."∥".$gt_h."∥".$gt_s."∥".$g_boy."∥".$g_girl."∥".$ghtml;
$f=fopen("gtype.dat","w+");
fputs($f,$system);
fclose($f);
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>編輯完成</legend></font><a href=javascript:history.back(1)><font color=$gm_link size=2>回上一頁再修改</font></a><hr color=$gu_link width=150 size=1></fieldset></td></tr></table>";
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
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">版主姓名：</font></td> 
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="guser" size="29" value="<?=$guser;?>"></font></td> 
  </tr> 
  <tr> 
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">網站首頁：</font></td> 
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="ghome" size="29" value="<?=$ghome;?>"></font></td> 
  </tr> 
  <tr> 
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">留言版</font><font size="2">名稱：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gname" size="29" value="<?=$gname;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">版主E-Mail：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gmail" size="29" value="<?=$gmail;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">主連結文字色彩：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gm_link" size="29" value="<?=$gm_link;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">選單文字色彩：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gu_link" size="29" value="<?=$gu_link;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">其他文字色彩：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="go_link" size="29" value="<?=$go_link;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">版權宣告色彩：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gc_link" size="29" value="<?=$gc_link;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">主框線色彩：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gm_line" size="29" value="<?=$gm_line;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">內框線色彩：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gi_line" size="29" value="<?=$gi_line;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">外底板色彩：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="go_skin" size="29" value="<?=$go_skin;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">主留言底板色彩：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gm_skin" size="29" value="<?=$gm_skin;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">回覆留言底板色彩：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gc_skin" size="29" value="<?=$gc_skin;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">性別色彩(男)：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="g_boy" size="29" value="<?=$g_boy;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">性別色彩(女)：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="g_girl" size="29" value="<?=$g_girl;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">版面寬度：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gwidth" size="29" value="<?=$gwidth;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">最大留言字數：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gnnumber" size="29" value="<?=$gnnumber;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">伺服器時差設定：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2">年：<input type="text" name="gt_y" size="2" value="<?=$gt_y;?>">月：<input type="text" name="gt_m" size="2" value="<?=$gt_y;?>">日：<input type="text" name="gt_d" size="2" value="<?=$gt_d;?>">時：<input type="text" name="gt_h" size="2" value="<?=$gt_h;?>">分：<input type="text" name="gt_s" size="2" value="<?=$gt_s;?>"></font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">框線種類：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><select size="1" name="gf_type">
    <option selected  value="solid">單線</option>
    <option value="dotted">點</option>
    <option value="dashed">線段</option>
    <option value="groove">立體內凹</option>
    <option value="ridge">立體外凸</option>
    <option value="inset">內凹</option>
    <option value="outset">外凸</option>
    </select></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">HTML語法：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><select name="ghtml" size="1">
        <option selected value="0">HTML語法開啟</option>
        <option value="1">HTML語法關閉</option>
      </select></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">IP隱藏設定：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><select name="gip" size="1">
        <option selected value="0">IP隱藏</option>
        <option value="1">IP顯示</option>
      </select></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">每頁顯示筆數：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><font size="2"><input type="text" name="gn" size="3" value="<?=$gn;?>">筆 (最好不要太多喔！否則要讀取很久。)</font></td>
  </tr>
  <tr>
    <td width="55%" style="border: 1 solid #C0C0C0"><font size="2">留言版頭前語(可用HTML)：</font></td>
    <td width="47%" style="border: 1 solid #C0C0C0"><textarea name="gup" rows="4" cols="28"><?=$gup;?></textarea></td>
  </tr>
  <tr>
    <td width="102%" style="border: 1 solid #C0C0C0" colspan="2">
      <p align="center"><input type="Submit" name="send" value="儲存設定"></p>
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
