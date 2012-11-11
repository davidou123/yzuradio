<?
$name=$_POST['name'];
$email=$_POST['email'];
$homename=$_POST['homename'];
$home=$_POST['home'];
$msn=$_POST['msn'];
setcookie("name","".$_POST['name']."",time()+360000000);
setcookie("email","".$_POST['email']."",time()+360000000);
setcookie("homename","".$_POST['homename']."",time()+360000000);
setcookie("home","".$_POST['home']."",time()+360000000);
setcookie("msn","".$_POST['msn']."",time()+360000000);
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
<?
/*
============================
QuickCaptcha 1.0 - A bot-thwarting text-in-image web tool.
Copyright (c) 2006 Web 1 Marketing, Inc.
============================
*/
include "settings.php";

@session_start();
$string = strtoupper($_SESSION['string']);
$userstring = strtoupper($_POST['userstring']); 
@session_destroy();   

if (($string != $userstring) || (strlen($string) <= 4)) {

echo "<center><br><br><br><br><br><br><br><font color=red size=2>驗証碼錯誤！</font><br><a href=javascript:history.back(1)><font color=$gm_link size=2><center>回上一頁</font></a>";

exit();

}
if($_POST['submit']==""){
echo "<center><br><br><br><br><br><br><br><font color=red size=2>您忘記寫主題了！</font><br><a href=javascript:history.back(1)><font color=$gm_link size=2><center>回上一頁</font></a>";
exit;
}
if($_POST['name']==""){
echo "<center><br><br><br><br><br><br><br><font color=red size=2>您的大名漏掉囉！</font><br><a href=javascript:history.back(1)><font color=$gm_link size=2><center>回上一頁</font></a>";
exit;
}
if(strlen($_POST['note'])>$gnnumber){
echo "<center><br><br><br><br><br><br><br><font color=red size=2>您的留言超過".$gnnumber."字元了！</font><br><a href=javascript:history.back(1)><font color=$gm_link size=2><center>回上一頁</font></a>";
exit;
}
$wrong="<xmp>";
if(eregi($wrong,$_POST['note'])){
echo "<center><br><br><br><br><br><br><br><font color=red size=2>請不要破壞版面！</font><br><a href=javascript:history.back(1)><font color=$gm_link size=2><center>回上一頁</font></a>";
exit;
}
$wrong2="<meta";
if(eregi($wrong2,$_POST['note'])){
echo "<center><br><br><br><br><br><br><br><font color=red size=2>請不要破壞版面！</font><br><a href=javascript:history.back(1)><font color=$gm_link size=2><center>回上一頁</font></a>";
exit;
}
elseif($_POST['note']==""){
echo "<center><br><br><br><br><br><br><br><font color=red size=2>您忘了留言囉！</font><br><a href=javascript:history.back(1)><font color=$gm_link size=2><center>回上一頁</font></a>";
exit;
}else{
echo "<p></p>";
$ip=str_replace("∥","", $HTTP_SERVER_VARS['REMOTE_ADDR']);
$y=date("Y")+$gt_y;
$m=date("n")+$gt_m;
$d=date("d")+$gt_d;
$h=date("G")+$gt_h;
$i=date("i")+$gt_s;
$s=date("s");
$note=str_replace("∥","", $_POST['note']);
$name=str_replace("∥","", $_POST['name']);
$submit=str_replace("∥","", $_POST['submit']);
$email=str_replace("∥","", $_POST['email']);
$home=str_replace("∥","", $_POST['home']);
$sexual=str_replace("∥","", $_POST['sexual']);
$msn=str_replace("∥","", $_POST['msn']);
$homename=str_replace("∥","", $_POST['homename']);
$color=str_replace("∥","", $_POST['color']);
$R1=str_replace("∥","", $_POST['R1']);
$R2=str_replace("∥","", $_POST['R2']);
$hidden=str_replace("∥","", $_POST['hidden']);
$note=str_replace("\r\n","<br>", $_POST['note']);
$t="".$y."/".$m."/".$d."  ".$h.":".$i.":".$s."";
$main=$name."∥".$submit."∥".$email."∥".$color."∥".$sexual."∥".$ip."∥".$R2."∥".$msn."∥".$home."∥".$homename."∥".$R1."∥".$t."∥".$hidden."∥".$note."\n";
$f=fopen("guest.dat","a+");
fwrite($f,$main);
fclose($f);
echo "<center><br><br><br><br><br><br><br><meta http-equiv=REFRESH CONTENT=1;url=guest.php><font color=Green size=2>謝謝您的留言！</font><br>";
}
?>
</body>
</html>