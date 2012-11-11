<?php
session_start();  // 啟動Session
 ob_start(); 
if ($_SESSION["login_session"] != true)
   header("Location:admin.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="menu_style.css" type="text/css" />
	<link rel="stylesheet" href="index.css" type="text/css" />	
<title>元智之音學生廣播電台</title>

<?
if ($_SESSION["bgsound"]=="true"){
$bgsound=rand(1, 8);
echo "<EMBED SRC='sound/login".$bgsound.".mp3' HIDDEN='true' AUTOPLAY='true' LOOP='0'> ";
$_SESSION["bgsound"]="false";
}
?>

<script language="JavaScript">
<!--
function FP_swapImgRestore() {//v1.0
 var doc=document,i; if(doc.$imgSwaps) { for(i=0;i<doc.$imgSwaps.length;i++) {
  var elm=doc.$imgSwaps[i]; if(elm) { elm.src=elm.$src; elm.$src=null; } } 
  doc.$imgSwaps=null; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>
  <style type="text/css"> 
.adminmenu { 
  float:left; 
  background-color:#3B5998;
  padding:0px 5px 0px 5px;  /*內文四周邊界值留白量 [上 右 下 左]*/
  width: 159px;
  margin-top:-4px; 
}
.content { 
  float:left; 
  text-align:left; 
  width: 755px;
    margin-top:-4px; 
}
  </style>
</head>

<body  bgcolor="#2C2C2C">
<div align="center">
<table border="0" width="932" cellspacing="0" cellpadding="0"bgcolor="#FFFFFF">
	<tr><td height="132">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="936" height="132">
          <param name="movie" value="banner.swf">
          <param name="quality" value="high">
          <embed src="banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="936" height="132"></embed></object>

<?php include 'menu_index.php';?>

<!-- 左邊選單 -->
<div class="adminmenu">
	<p align="center">
	<img border="0" src="DJSHOW/<?php echo$_SESSION["usrname"];?>.jpg" width="116" height="122" alt="<?php echo $_SESSION["nickname"]; ?>的大頭照"><BR><BR>
	<font color="#FFFFFF"><B><?php
if($_SESSION["nickname"])
	echo $_SESSION["nickname"]."您好！";
else
echo "閒置過久<BR>請重新登入";
	?></b> </font>
	<br><br>
			<a href="?frame=adminfirst.php"><img border="0" src="images/p_index.gif" width="150" height="26" id="img15" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img15',/*url*/'images/a_index.gif')" alt="首頁"></a>
	<? if($_SESSION["Djrole"]=="admin"){
	echo"<a href='?frame=register.php'><img border='0' src='images/p_register.gif' width='150' height='26' id='img13' onmouseout=\"FP_swapImgRestore()\" onmouseover=\"FP_swapImg(0,1,/*id*/'img13',/*url*/'images/a_register.gif')\" alt='註冊'></a>"
		."<a href='?frame=account.php'><img border='0' src='images/p_account.gif' width='150' height='26' id='img14' onmouseout=\"FP_swapImgRestore()\" onmouseover=\"FP_swapImg(0,1,/*id*/'img14',/*url*/'images/a_account.gif')\" alt='帳號管理'></a>";
		}?>
		
		<a href='?frame=webcontect.php'><img border='0' src='images/p_webcontect.gif' width='150' height='26' id='img16' onmouseout=\"FP_swapImgRestore()\" onmouseover=\"FP_swapImg(0,1,/*id*/'img16',/*url*/'images/a_webcontect.gif')\" alt='修改首頁'></a>
			<a href="?frame=mydj.php"><img border="0" src="images/p_DJRECOM1.gif" width="150" height="26" id="img8" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img8',/*url*/'images/a_DJRECOM1.gif')" alt="歷次節目介紹"></a>
			<a href="?frame=hisshow.php"><img border="0" src="images/p_hisshow.gif" width="150" height="26" id="img12" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img12',/*url*/'images/a_hisshow.gif')" alt="下次節目介紹"></a>

			<a href="?frame=myshow.php"><img border="0" src="images/p_myshow.gif" width="150" height="26" id="img11" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img11',/*url*/'images/a_myshow.gif')" alt="我的DJ介紹"></a>

	<a href="?frame=datasever.php"><img border="0" src="images/p_menubutton1.gif" width="150" height="26" id="img1" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img1',/*url*/'images/a_menubutton1.gif')" alt="廣電檔案伺服器"></a>
	
	<img border="0" src="images/p_ticketsystem1.gif" width="150" height="26" id="img2" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img2',/*url*/'images/a_ticketsystem1.gif')" alt="問卷系統">
	
			<a href="?frame=listwrite.php"><img border="0" src="images/p_weekshow1.gif" width="150" height="26" id="img3" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img3',/*url*/'images/a_weekshow1.gif')" alt="本週節目表"></a>
			
			<a href="?frame=plurk.php"><img border="0" src="images/p_plurk1.gif" width="150" height="26" id="img4" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img4',/*url*/'images/a_plurk1.gif')" alt="噗浪代鋪系統"></a>
			
			<img border="0" src="images/p_nowplay1.gif" width="150" height="26" id="img5" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img5',/*url*/'images/a_nowplay1.gif')" alt="現正播放">
			
			<img border="0" src="images/p_mailsend1.gif" width="150" height="26" id="img6" onmouseout="FP_swapImgRestore()" onmouseover=" FP_swapImg(0,1,/*id*/'img6',/*url*/'images/a_mailsend1.gif')" alt="線上寄信系統">
			
			<a href="?frame=foobarsever.php"><img border="0" src="images/p_foobar1.gif" width="150" height="26" id="img7" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img7',/*url*/'images/a_foobar1.gif')" alt="FOOBAR後台"></a>
				
			<a href="?frame=myinfo.php"><img border="0" src="images/p_reaccount1.gif" width="150" height="26" id="img9" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img9',/*url*/'images/a_reaccount1.gif')"alt="修改帳號資訊">
			<a href="?frame=loginout.php"><img border="0" src="images/p_loginout1.gif" width="150" height="26" id="img10" onmouseout="FP_swapImgRestore()" onmouseover="FP_swapImg(0,1,/*id*/'img10',/*url*/'images/a_loginout1.gif')" alt="登出"></a>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR></p>

</div>

<!-- 右邊資訊 -->
<div class="content">
<?php
if($_GET['frame'])
 include $_GET['frame'];
 else
  include "adminfirst.php";
 ?>
</div>


	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include 'footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>