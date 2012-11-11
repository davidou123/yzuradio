<?
if($_GET['cookie']=="")
{
if(@$_POST['save']=="yes")
{
setcookie("user_name","".$_POST['user_name']."",time()+360000000);
}else{
setcookie("user_name","".$_POST['user_name']."",time()+600);
}
setcookie("user_passwd","".$_POST['user_passwd']."",time()+600);
}
?>
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
<?
if($_GET['cookie']=="yes")
  {
   $user_name=$_COOKIE['user_name'];
   $user_passwd=$_COOKIE['user_passwd'];
  }else{
   $user_name=$_POST['user_name'];
   $user_passwd=$_POST['user_passwd'];
  }
?>
<? require("gsystem.php") ;?>
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
<?
$sign_name="yzuradio" ;//←輸入帳號
$sign_passwd="foxboy220" ;//←輸入密碼

$mem_passwd=array($sign_name=>$sign_passwd);

$mem=array_keys($mem_passwd);
if(!in_array($user_name,$mem)){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>登錄失敗，帳號不存在！</legend><center>可能原因：<br>1.非法進入管理頁面<br>2.登入已超過10分鐘</font><br><a href=javascript:history.back(1)><font color=$gm_link size=2>回上一頁</font></a></center></fieldset></td></tr></table></center>";
        exit;
}

if($user_passwd!=$mem_passwd[$user_name]){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>登錄失敗，密碼與帳號不符！</legend><center>可能原因：<br>1.非法進入管理頁面<br>2.密碼輸入錯誤</font><br></font><a href=javascript:history.back(1)><font color=$gm_link size=2><center>回上一頁</font></a></fieldset></td></tr></table></center>";
        exit;
}

?>
</body>
</html>