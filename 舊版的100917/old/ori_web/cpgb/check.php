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
<? require("sign.php");?>
<? require("gsystem.php") ;?>
<? require("css.php");?>
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
<font color="<?=$gm_link;?>" size"2">│</font><a href="look.php?cookie=yes"><font color="<?=$gm_link;?>" size="2">觀看悄悄話</font></a><font color="<?=$gm_link;?>" size"2">│</font>
<a href="del.php?cookie=yes"><font color="<?=$gm_link;?>" size="2">刪除留言</font></a><font color="<?=$gm_link;?>" size"2">│</font>
<a href="system.php?cookie=yes"><font color="<?=$gm_link;?>" size="2">留言版設定</font></a><font color="<?=$gm_link;?>" size"2">│</font>
<a href="css_edit.php?cookie=yes"><font color="<?=$gm_link;?>" size="2">CSS編輯</font></a><font color="<?=$gm_link;?>" size"2">│</font>
<a href="c_pic.php?cookie=yes"><font color="<?=$gm_link;?>" size="2">圖檔更名系統</font></a><font color="<?=$gm_link;?>" size"2">│</font>
<a href="info.php?cookie=yes"><font color="<?=$gm_link;?>" size="2">版本說明</font></a><font color="<?=$gm_link;?>" size"2">│</font>
<a href="guest.php?cookie_clear=yes"><font color="<?=$gm_link;?>" size="2"><b>登出並回到留言版</b></font></a><font color="<?=$gm_link;?>" size"2">│</font>
</body>
</html>