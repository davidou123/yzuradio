<?
@session_start(); // 開啟 session 

if($_GET['cookie']=="")
{
$_SESSION['user_name'] = $_POST['user_name'];
$_SESSION['user_passwd'] = $_POST['user_passwd'];
}
?>
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
<?
if($_GET['cookie']=="yes")
  {
   $user_name=$_SESSION['user_name'];
   $user_passwd=$_SESSION['user_passwd'];
  }else{
   $user_name=$_POST['user_name'];
   $user_passwd=$_POST['user_passwd'];
  }
?>

<? # 將to_set.php檔案導入 ?>
<? require("to_set.php");?>
<html>
<?@$gname=stripslashes($gname);?>
<?@$gup=stripslashes($gup);?>
<?@$guesr=stripslashes($guesr);?>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title><?=@$gname ;?> </title>
<?=@$crs ;?>
</head>
<body>
<?

#  ------------------------------------------------#  
#  多重帳號設定方式....                            #
#  很簡單，只要依序在下面新增一個                  #
#                                                  #
#  $sign_name_編號="帳號";                         #
#  $sign_passwd_編號="密碼";                       #
#                                                  #
#  然後再最下面的$mem_passwd=array();內            #
#  放上你新增的$sign_name_編號=>$sign_passwd_編號  #
#  最重要的是 次級使用者 和 次級使用者 的中間      #
#  一定要加上一個 "," 不然程式會搞亂掉喔！         #
#  ------------------------------------------------#

$sign_name="yzuradio" ;//←主使用者
$sign_passwd="foxboy220" ;//←主使用者密碼

$sign_name_1="lulu" ;//←次級使用者帳號1
$sign_passwd_1="123" ;//←次級使用者密碼1

$sign_name_2="handsome" ;//←次級使用者帳號2
$sign_passwd_2="123" ;//←次級使用者密碼2

$sign_name_3="pinkgirl" ;//←次級使用者帳號3
$sign_passwd_3="123" ;//←次級使用者密碼3

$mem_passwd=array($sign_name_1=>$sign_passwd_1,$sign_name_2=>$sign_passwd_2,$sign_name_3=>$sign_passwd_3,$sign_name=>$sign_passwd);

if($_POST['user_name'] ==$sign_name && $_POST['user_passwd'] ==$sign_passwd)
{
  $user_com = "biggest";
}else{
  $user_com = "second";
} 

$mem=array_keys($mem_passwd);
if(!in_array($user_name,$mem)){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>登錄失敗，帳號不存在！</legend><center>可能原因：<br>1.非法進入管理頁面<br>2.登入已超過10分鐘</font><br><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></center></fieldset></td></tr></table></center>";
        exit;
}

if($user_passwd!=$mem_passwd[$user_name]){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>登錄失敗，密碼與帳號不符！</legend><center>可能原因：<br>1.非法進入管理頁面<br>2.密碼輸入錯誤</font><br></font><a href=javascript:history.back(1)><font color=$font_link size=2><center>回上一頁</font></a></fieldset></td></tr></table></center>";
        exit;
}
?>
</body>
</html>