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
<? # 將to_set.php檔案導入 ?>
<? require("to_set.php");?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>使用者登錄區</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>

<body background="<?=$background;?>" bgcolor="<?=$bgcolor;?>">
<center>
<form action="check.php" method="post">
<table border="0" width="40%">
  <tr>
    <td width="100%" colspan="2" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>">
      <p align="center"><font size="2" color="<?=$title_font;?>">使用者系統登錄區</font></td>
  </tr>
  <tr>
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">帳號：</font></td>
    <td width="80%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="text" name="user_name" size="30" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></td>
  </tr>
  <tr>
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">密碼：</font></td>
    <td width="80%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="Password" name="user_passwd" size="30" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></td>
  </tr>
  <tr>
    <td width="100%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="2"><input type="Submit" name="send" value="登入" style="background-color: <?=$bgcolor;?>; color: <?=$login_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></td>
  </tr>
</table>
</form>
<br>
<a href="sub.php"><font color="<?=$font_link;?>" size="2">回公告首頁</font></a>
</center>
　
</body>

</html>
