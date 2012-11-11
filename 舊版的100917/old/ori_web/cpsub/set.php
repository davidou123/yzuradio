<?
#  -----------------------------------------  #  
#  程式名稱：C.P.Sub公告系統                  #
#  設計者：Cooltey                            # 
#  E-Mail：coolteygame@gmail.com             #
#  HomePage：http://www.cooltey.org            #
#  程式版本：V4.5                            #
#  最後更新：2008/9/1                         #
#  注意，本版權宣告不得刪除，程式可任意修改！ # 
#  最下面一行的 Powered By Cooltey 請不要刪除 #
#  -----------------------------------------  #
?>
<? # 導入check.php，以確認身分 ?>
<? require("check.php") ;?>
<? @session_start(); // 開啟 session ;?>
<center>
<?
if($_POST['set_start']=="yes")
{
# 去除PHP中的衝碼
$background=stripslashes($_POST['background']);
$background=str_replace("∥","", $_POST['background']);
$bgcolor=str_replace("∥","", $_POST['bgcolor']);
$style_pic=str_replace("∥","", $_POST['style_pic']);
$form_size=str_replace("∥","", $_POST['form_size']);
$sub_num=str_replace("∥","", $_POST['sub_num']);
$form_type=str_replace("∥","", $_POST['form_type']);
$form_line=str_replace("∥","", $_POST['form_line']);
$form_color=str_replace("∥","", $_POST['form_color']);
$title_bgcolor=str_replace("∥","", $_POST['title_bgcolor']);
$title_font=str_replace("∥","", $_POST['title_font']);
$menu_bgcolor=str_replace("∥","", $_POST['menu_bgcolor']);
$menu_font=str_replace("∥","", $_POST['menu_font']);
$explor_bgcolor=str_replace("∥","", $_POST['explor_bgcolor']);
$explor_font=str_replace("∥","", $_POST['explor_font']);
$all_bgcolor=str_replace("∥","", $_POST['all_bgcolor']);
$all_font=str_replace("∥","", $_POST['all_font']);
$login_bgcolor=str_replace("∥","", $_POST['login_bgcolor']);
$login_font=str_replace("∥","", $_POST['login_font']);
$cooltey_bgcolor=str_replace("∥","", $_POST['cooltey_bgcolor']);
$cooltey_font=str_replace("∥","", $_POST['cooltey_font']);
$font_link=str_replace("∥","", $_POST['font_link']);
# 排列各項資料
$set=$background."∥".$bgcolor."∥".$style_pic."∥".$sub_num."∥".$form_size."∥".$form_type."∥".$form_line."∥".$form_color."∥".$title_bgcolor."∥".$title_font."∥".$menu_bgcolor."∥".$menu_font."∥".$explor_bgcolor."∥".$explor_font."∥".$all_bgcolor."∥".$all_font."∥".$login_bgcolor."∥".$login_font."∥".$cooltey_bgcolor."∥".$cooltey_font."∥".$font_link;
# 開啟set.dat檔案，以覆蓋形式開啟
$f=fopen("set.dat","w+");
# 寫入資料
fputs($f,$set);
# 關閉set.dat檔案
fclose($f);
 echo "<center><font size=2 color=red>儲存完畢！</font></center>";
}
?>
<html>
<? require("to_set.php");?>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>版面設定</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>

<body bgcolor="#FFFFFF">
<center>
<font color="#CC6600" size="2">本頁面沒有套用設定喔！</font>
<form action="set.php" method="post">
<input type="hidden" name="user_com" value="<?=$_GET['user_com'];?>"><input type="hidden" name="user_name" value="<?=$_SESSION['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$_SESSION['user_passwd'];?>"><input type="Hidden" name="set_start" value="yes">   
<table border="1" style="border-collapse: collapse; border-style: dotted; border-width: 1" bordercolor="#111111" width="61%" id="AutoNumber1" height="477">
  <tr>
    <td width="100%" style="border-style: solid; border-width: 1" colspan="2" height="8" bgcolor="#3399FF">
    <p align="center"><font size="2" face="Verdana" color="#FFFFFF">版面設定</font></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">背景圖片</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="background" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$background ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">背景色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$bgcolor ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="16" align="center">
    <font size="2" face="Verdana" color="#0033CC">個性圖片</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="16" align="center">
    <select size="1" name="style_pic" style="font-size: 10 pt; color: #996633; border-style: dashed; border-width: 1; background-color: #FFFFCC"><option value="open">使用個性圖片</option><option value="close">關閉個性圖片</option></select></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">每頁顯示公告數量(請輸入數字)</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="sub_num" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$sub_num ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">版面大小</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="form_size" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$form_size ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="16" align="center">
    <font size="2" face="Verdana" color="#0033CC">框線+表單形式</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="16" align="center">
    <select size="1" name="form_type" style="font-size: 10 pt; color: #996633; border-style: dashed; border-width: 1; background-color: #FFFFCC">
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
    <td width="42%" style="border-style: solid; border-width: 1" height="16" align="center">
    <font size="2" face="Verdana" color="#0033CC">框線+表單粗細</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="16" align="center">
    <select size="1" name="form_line" style="font-size: 10 pt; color: #996633; border-style: dashed; border-width: 1; background-color: #FFFFCC">
    <option value="0">無</option>
    <option selected value="1">粗度一</option>
    <option value="2">粗度二</option>
    <option value="3">粗度三</option>
    </select></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">框線+表單色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="form_color" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$form_color ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">標題列背景色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="title_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$title_bgcolor ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">標題列文字色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="title_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$title_font ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">項目列背景色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="menu_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$menu_bgcolor ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">項目列文字色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="menu_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$menu_font ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">顯示列背景色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="explor_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$explor_bgcolor ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">顯示列文字色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="explor_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$explor_font ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">「顯示全部公告」列背景色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="all_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$all_bgcolor ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">「顯示全部公告」列文字色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="all_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$all_font ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">「進入使用者系統」列背景色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="login_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$login_bgcolor ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">「進入使用者系統」列文字色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="login_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$login_font ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">本程式版權宣告列背景色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="cooltey_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$cooltey_bgcolor ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">本程式版權宣告列文字色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="cooltey_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$cooltey_font ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">主連結文字色彩</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="font_link" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$font_link ;?>"></td>
  </tr>
  <tr>
    <td width="114%" style="border-style: solid; border-width: 1" height="16" colspan="2">
    <p align="center">
    <input type="submit" name="send" value="設定完成" style="font-family: Verdana; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7"></td>
  </tr>
  <tr>
    <td width="114%" style="border-style: solid; border-width: 1" height="16" colspan="2" bgcolor="#FFFFCC">
    <p align="center"><font size="2" face="Verdana">C.P.Sub 公告系統 
      </font><font size="1" face="Verdana"> v4.5 Powered By <a href="http://www.cooltey.org">Cooltey</a> 
      </font></td>
  </tr>
</table>
</form>
</center>
<center>
<table border="0" style="border-collapse: collapse" bordercolor="#111111" width="9%" id="AutoNumber2">
  <tr>
    <td width="100%"><font size="2"><a href="sub.php"><font color="<?=$font_link;?>">回公告首頁</font></a></font></td>
  </tr>
</table>
</center>
</body>

</html>