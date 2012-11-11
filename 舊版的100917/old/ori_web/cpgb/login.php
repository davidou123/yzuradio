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
<? require("gsystem.php") ;?>
<? require("css.php");?>
<?
if($_GET['clear']=="yes")
{
setcookie("user_name");
$_COOKIE['user_name']="";
}
?>
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
<br>
<br>
<br>
<center>
<form method="post" action="check.php">
<table><tr><td><font size="2" color="<?=$gu_link;?>">│</font><a href="guest.php"><font color="<?=$gm_link;?>" size="2">回留言板</font></a><font size="2" color="<?=$gu_link;?>">│</font><a href="login.php?clear=yes"><font color="<?=$gm_link;?>" size="2">清除帳號</font></a><font size="2" color="<?=$gu_link;?>">│</font></tr></table><br>
<table border="1" width="30%" height="41" style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>">
  <tr>
    <td width="20%" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>"><p align="center">帳號：</p></font></td>
    <td width="25%" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="user_name" value="<?=$HTTP_COOKIE_VARS['user_name'];?>" size="20"></td>
 </tr>
 <tr>
    <td width="20%" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>"><p align="center">密碼：</p></font></td>
    <td width="25%" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="Password" name="user_passwd" size="20"></td>
  </tr>
 <tr>
    <td width="50%" colspan="4" height="13" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><p align="center"><input type="checkbox" value="yes" name="save"><font size="2" color="<?=$go_link;?>">紀錄我的帳號</p></font></td>
  </tr>
  <tr>
    <td width="102%" colspan="4" height="16" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>">
      <p align="center"><input type="Submit" value="進入管理區"></p>
    </td>
  </tr>
</table>
</center>
</form>
</body>

</html>
