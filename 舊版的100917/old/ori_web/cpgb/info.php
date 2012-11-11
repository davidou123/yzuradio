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
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="#0099FF">程式版本：</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2">CPGB留言版 V0.89</font></td>
  </tr>
  <tr>
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#0099FF" size="2">最後更新：</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2">2006.8.27</font></td>
  </tr>
  <tr>
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#0099FF" size="2">程式研發：</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2">Cooltey@淡江大學</font></td>
  </tr>
  <tr>
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#0099FF" size="2">E-Mail：</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2">cooltey@yahoo.com.tw</font></td>
  </tr>
  <tr>
    <td width="30%" height="16"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#0099FF" size="2">HomePage：</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><a href="http://cooltey.mytw.net"><font color="#009933" size="2">http://cooltey.mytw.net</font></a></td>
  </tr>
  <tr>
    <td width="30%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="#0099FF">現在留言版使用者：</font></td>
    <td width="50%" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font color="#009933" size="2"><? echo $guser ;?></font></td>
  </tr>
  <tr>
  <font size="2" color="#0099FF">Cooltey的話：</font>
  </tr>
<tr  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gm_skin;?>">
 <font color="#009933" size="2">終於出來比較穩定的版本了，把原本的rand();函數所產生出來的驗證碼，改成利用QuickCaptcha1.0的圖片驗證碼方式喔。使用舊版的使用者趕快更新吧

特別感謝大忠資訊組 溫芝～</font>
  </tr>

</body>
</html>