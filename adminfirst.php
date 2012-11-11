
<?
//-------------------------判斷DJ有沒有沒打的帳號資訊----------------------------
require_once("SQLconnection.php");
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  employee WHERE usrname='".$_SESSION["usrname"]."'";
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0)
{
  $rows = mysql_fetch_array($result, MYSQL_BOTH);
}
      mysql_query($sql);
      mysql_close($link);
?>
<? if($rows["showname"]==""){?>
<script>
alert('瑞迪歐幹部系統提醒公告: \n\n   您尚未輸入您的 [節目名稱]，請快至帳戶資訊去正確填寫 \n 沒有填寫會讓網站不知道您的節目是哪個 會讓你的節目資訊錯誤喔\n\n                           來自技術部的溫馨提醒');
location.href="?frame=myinfo.php";
</script>;
<?}?>
<? if($rows["showinfo"]==""){?>
<script>
alert('瑞迪歐幹部系統提醒公告: \n\n   您尚未輸入您的 [節目介紹]，請快至我的DJ介紹去正確填寫\n 網站上這樣才會有您的DJ個人介紹喔\n\n                           來自技術部的溫馨提醒');
location.href="?frame=myshow.php";
</script>;
<?}?>

<? if($rows["phone"]==""){?>
<script>
alert('瑞迪歐幹部系統提醒公告: \n\n   您尚未輸入您的 [手機]，請快至帳戶資訊去正確填寫\n 以方便日後有緊急連絡事情時可以連絡 \n\n                           來自技術部的溫馨提醒');
location.href="?frame=myinfo.php";
</script>;
<?}?>
<? if($rows["birth"]=="0000-00-00"){?>
<script>
alert('瑞迪歐幹部系統提醒公告: \n\n   您尚未輸入您的 [生日]，請快至帳戶資訊去正確填寫\n 給大家個機會幫你慶生一下嘛 \n\n                           來自技術部的溫馨提醒');
location.href="?frame=myinfo.php";
</script>;
<?}?>
<? if($rows["msn"]==""){?>
<script>
alert('瑞迪歐幹部系統提醒公告: \n\n   您尚未輸入您的 [msn]，請快至帳戶資訊去正確填寫\n之後有任何開會訊息或緊急連絡比較方便\n\n                           來自技術部的溫馨提醒');
location.href="?frame=myinfo.php";
</script>;
<?}
//-------------------------判斷DJ有沒有沒打的帳號資訊----------------------------
?>


	<p align="center"><BR>
<img border="0" src="images/loginheader.gif" width="381" height="45" alt="元智之音幹部系統"></p>
<br>
<HR>
<?php
   	  require_once("function.php");
  $ip = getip();
  $ipinfo="今天為:".date("<b>Y</b>年<b>m</b>月<b>d</b>日，").
  "您目前的IP為:<B>".$ip."</b> 歡迎<B>".$_SESSION["nickname"]."</b>登入本系統，希望您有個愉快的一天。";
  echo $ipinfo;
  ?>
<BR><BR>
<?php include 'djguestbook.php';?>