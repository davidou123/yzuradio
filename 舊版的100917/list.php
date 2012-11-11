<?php
$filename="show.txt";
         $fl=file($filename);
         for($i=0;$i<count($fl);$i++){
          $a=preg_split('/\//',$fl[$i]);
          $show[$i][]=$a[0];
          $show[$i][]=$a[1];
          $show[$i][]=$a[2];
          $show[$i][]=$a[3];
          $show[$i][]=$a[4];
          $show[$i][]=$a[5];
          $show[$i][]=$a[6];
          $show[$i][]=$a[7];
          $show[$i][]=$a[8];
          $show[$i][]=$a[9];
          $show[$i][]=$a[10];
          $show[$i][]=$a[11];
          $show[$i][]=$a[12];
          $show[$i][]=$a[13];
          $show[$i][]=$a[14];
          $show[$i][]=$a[15];

         } 
		 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="menu_style.css" type="text/css" />
	<link rel="stylesheet" href="index.css" type="text/css" />	
<title>元智之音學生廣播電台</title>

<style>
<!--
.font0
	{color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:新細明體, serif;
	}
.font5
	{color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:新細明體, serif;
	}
-->
</style>

</head>

<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#2C2C2C">
<div align="center">

<table border="0" cellpadding="0" cellspacing="0" width="956">
	<tr>
		<td valign="top" background="images/b01.gif" align="center" width="956">
		
<div align="center" id="layer1">
<table border="0" width="932" cellspacing="0" cellpadding="0">

	<tr>
    <td height="132">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="936" height="132">
          <param name="movie" value="banner.swf">
          <param name="quality" value="high">
          <embed src="banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="936" height="132"></embed></object>
		</td>
	</tr>
	<tr><td valign="top" align="center" >
       <script src="menu_index.js" type="text/javascript"></script>		
	</td></tr>
	<tr>
		<td width="788" height="557" valign="top" align="center" style="padding-right: 20px;padding-left: 20px">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<BR>
		&nbsp;<div align="center">
	<b><font face="細明體" size="5"><?php echo $show[5][0] ?>元智之音節目表</font></b><font color="#FFFFFF"> </font>
	<font color="#FF0000">&nbsp;</font><font color="#FFFF00"><a href="list2.htm"><font color="#FF0000">&lt;按我看月份節目表&gt;</font></a></font><table border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
		<tr>
			<td align="center" bgcolor="#FFFFFF">&nbsp;</td>
			<td align="center" bgcolor="#FFFFFF">星期一</td>
			<td align="center" bgcolor="#FFFFFF">星期二</td>
			<td align="center" bgcolor="#FFFFFF">星期三</td>
			<td align="center" bgcolor="#FFFFFF">星期四</td>
			<td align="center" bgcolor="#FFFFFF">星期五</td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">00:00~01:00</td>
			<td align="center" bgcolor="#C0C0C0"><?php echo $show[0][0] ?><br>
			<?php echo $show[0][1] ?></td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[1][0] ?><br>
			<?php echo $show[1][1] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[2][0] ?><br>
			<?php echo $show[2][1] ?></td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[3][0] ?><br>
			<?php echo $show[3][1] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[4][0] ?><br>
			<?php echo $show[4][1] ?></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">01:00~02:00</td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[0][2] ?><br>
			<?php echo $show[0][3] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[1][2] ?><br>
			<?php echo $show[1][3] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[2][2] ?><br>
			<?php echo $show[2][3] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[3][2] ?><br>
			<?php echo $show[3][3] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[4][2] ?><br>
			<?php echo $show[4][3] ?></td>
		</tr>
		<tr>
			<td height="19" align="center" bgcolor="#FFFFFF">02:00~03:00</td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[0][4] ?><br>
			<?php echo $show[0][5] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[1][4] ?><br>
			<?php echo $show[1][5] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[2][4] ?><br>
			<?php echo $show[2][5] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[3][4] ?><br>
			<?php echo $show[3][5] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[4][4] ?><br>
			<?php echo $show[4][5] ?></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">0<font class="font0">3:00~04:00</font></td>
			<td align="center" bgcolor="#C0C0C0"><?php echo $show[0][6] ?><br>
			<?php echo $show[0][7] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[1][6] ?><br>
			<?php echo $show[1][7] ?></td>
			<td align="center" bgcolor="#C0C0C0"><?php echo $show[2][6] ?><br>
			<?php echo $show[2][7] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[3][6] ?><br>
			<?php echo $show[3][7] ?></td>
			<td align="center" bgcolor="#C0C0C0"><?php echo $show[4][6] ?><br>
			<?php echo $show[4][7] ?></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">04:00~20:00</td>
			<td align="center" colspan="5" bgcolor="#C0C0C0">音樂不間斷</font></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF" height="34">20:00~21:00</td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[0][8] ?><br>
			<?php echo $show[0][9] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[1][8] ?><br>
			<?php echo $show[1][9] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[2][8] ?><br>
			<?php echo $show[2][9] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[3][8] ?><br>
			<?php echo $show[3][9] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[4][8] ?><br>
			<?php echo $show[4][9] ?></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">21:00~22:00</td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[0][10] ?><br>
			<?php echo $show[0][11] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[1][10] ?><br>
			<?php echo $show[1][11] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[2][10] ?><br>
			<?php echo $show[2][11] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[3][10] ?><br>
			<?php echo $show[3][11] ?></td>
			<td align="center" bgcolor="#FFFFFF"><?php echo $show[4][10] ?><br>
			<?php echo $show[4][11] ?></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">22:00~23:00</td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[0][12] ?><br>
			<?php echo $show[0][13] ?></td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[1][12] ?><br>
			<?php echo $show[1][13] ?></td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[2][12] ?><br>
			<?php echo $show[2][13] ?></td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[3][12] ?><br>
			<?php echo $show[3][13] ?></td>
			<td align="center" bgcolor="#FFFF99"><?php echo $show[4][12] ?><br>
			<?php echo $show[4][13] ?></td>
		</tr>
		<tr>
			<td align="center" height="51" bgcolor="#FFFFFF">23:00~24:00</td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[0][14] ?><br>
			<?php echo $show[0][15] ?></td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[1][14] ?><br>
			<?php echo $show[1][15] ?></td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[2][14] ?><br>
			<?php echo $show[2][15] ?></td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[3][14] ?><br>
			<?php echo $show[3][15] ?></td>
			<td align="center" bgcolor="#CCFFFF"><?php echo $show[4][14] ?><br>
			<?php echo $show[4][15] ?></td>
		</tr>
	</table>
</div>

<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" width="543" style="border-collapse:
 collapse;width:408pt">
		<colgroup>
			<col width="130" style="width: 98pt">
			<col width="135" style="width: 101pt">
			<col width="140" style="width: 105pt">
			<col width="138" style="width: 104pt">
		</colgroup>
		<tr height="22" style="height:16.5pt">
			<td height="22" width="130" style="height: 16.5pt; width: 98pt; text-align: center; color: windowtext; font-size: 12.0pt; font-weight: 400; font-style: normal; text-decoration: none; font-family: 新細明體, serif; vertical-align: middle; white-space: nowrap; border: .5pt solid windowtext; padding-left: 1px; padding-right: 1px; padding-top: 1px; background: #CCFFFF">
			首播</td>
			<td width="135" style="width: 101pt; text-align: center; color: windowtext; font-size: 12.0pt; font-weight: 400; font-style: normal; text-decoration: none; font-family: 新細明體, serif; vertical-align: middle; white-space: nowrap; border-left: medium none; border-right: .5pt solid windowtext; border-top: .5pt solid windowtext; border-bottom: .5pt solid windowtext; padding-left: 1px; padding-right: 1px; padding-top: 1px" bgcolor="#FFFFFF">
			重播</td>
			<td width="140" style="width: 105pt; text-align: center; color: windowtext; font-size: 12.0pt; font-weight: 400; font-style: normal; text-decoration: none; font-family: 新細明體, serif; vertical-align: middle; white-space: nowrap; border-left: medium none; border-right: .5pt solid windowtext; border-top: .5pt solid windowtext; border-bottom: .5pt solid windowtext; padding-left: 1px; padding-right: 1px; padding-top: 1px; background: silver">
			音樂</td>
			<td width="138" style="width: 104pt; text-align: center; color: windowtext; font-size: 12.0pt; font-weight: 400; font-style: normal; text-decoration: none; font-family: 新細明體, serif; vertical-align: middle; white-space: nowrap; border-left: medium none; border-right: .5pt solid windowtext; border-top: .5pt solid windowtext; border-bottom: .5pt solid windowtext; padding-left: 1px; padding-right: 1px; padding-top: 1px; background: #FFFF99">
			特輯、新聲</td>
		</tr>
	</table>
</div>
		</td>
	</tr>
	<tr>
	<td bgcolor="#114087" align="center" colspan="2">		

				<p align="center">		
	    <script src="footer.js" type="text/javascript"></script>
		</td>
	</tr>
</table>
</table>
</div>

</body>

</html>