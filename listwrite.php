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
<title>元智之音學生廣播電台</title>
</head>

<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#2C2C2C">
		<BR>
<div align="center">
		<font  color="#FF0000">注意!! 請勿輸入 </font>
<span style="background-color: #FFFF00">&nbsp;/ </span><font color="#FF0000">
這個符號，會照成php程式的判斷錯誤!!</font>
		<form method="POST" action="userlogin.php?frame=listsave.php">
	<b><font size="5"><input type="text" name="text51" size="15" value="<?php echo $show[5][0] ?>">元智之音節目表</font></b>
	<table border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
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
			<td align="center" bgcolor="#C0C0C0"><input type="text" name="text00" size="15" value="<?php echo $show[0][0] ?>"><br>
			<input type="text" name="text01" size="15" value="<?php echo $show[0][1] ?>"></td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text10" size="15" value="<?php echo $show[1][0] ?>"><br>
			<input type="text" name="text11" size="15" value="<?php echo $show[1][1] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text20" size="15" value="<?php echo $show[2][0] ?>"><br>
			<input type="text" name="text21" size="15" value="<?php echo $show[2][1] ?>"></td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text30" size="15" value="<?php echo $show[3][0] ?>"><br>
			<input type="text" name="text31" size="15" value="<?php echo $show[3][1] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text40" size="15" value="<?php echo $show[4][0] ?>"><br>
			<input type="text" name="text41" size="15" value="<?php echo $show[4][1] ?>"></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">01:00~02:00</td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text02" size="15" value="<?php echo $show[0][2] ?>"><br>
			<input type="text" name="text03" size="15" value="<?php echo $show[0][3] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text12" size="15" value="<?php echo $show[1][2] ?>"><br>
			<input type="text" name="text13" size="15" value="<?php echo $show[1][3] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text22" size="15" value="<?php echo $show[2][2] ?>"><br>
			<input type="text" name="text23" size="15" value="<?php echo $show[2][3] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text32" size="15" value="<?php echo $show[3][2] ?>"><br>
			<input type="text" name="text33" size="15" value="<?php echo $show[3][3] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text42" size="15" value="<?php echo $show[4][2] ?>"><br>
			<input type="text" name="text43" size="15" value="<?php echo $show[4][3] ?>"></td>
		</tr>
		<tr>
			<td height="19" align="center" bgcolor="#FFFFFF">02:00~03:00</td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text04" size="15" value="<?php echo $show[0][4] ?>"><br>
			<input type="text" name="text05" size="15" value="<?php echo $show[0][5] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text14" size="15" value="<?php echo $show[1][4] ?>"><br>
			<input type="text" name="text15" size="15" value="<?php echo $show[1][5] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text24" size="15" value="<?php echo $show[2][4] ?>"><br>
			<input type="text" name="text25" size="15" value="<?php echo $show[2][5] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text34" size="15" value="<?php echo $show[3][4] ?>"><br>
			<input type="text" name="text35" size="15" value="<?php echo $show[3][5] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text44" size="15" value="<?php echo $show[4][4] ?>"><br>
			<input type="text" name="text45" size="15" value="<?php echo $show[4][5] ?>"></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">0<font class="font0">3:00~04:00</font></td>
			<td align="center" bgcolor="#C0C0C0"><input type="text" name="text06" size="15" value="<?php echo $show[0][6] ?>"><br>
			<input type="text" name="text07" size="15" value="<?php echo $show[0][7] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text16" size="15" value="<?php echo $show[1][6] ?>"><br>
			<input type="text" name="text17" size="15" value="<?php echo $show[1][7] ?>"></td>
			<td align="center" bgcolor="#C0C0C0"><input type="text" name="text26" size="15" value="<?php echo $show[2][6] ?>"><br>
			<input type="text" name="text27" size="15" value="<?php echo $show[2][7] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text36" size="15" value="<?php echo $show[3][6] ?>"><br>
			<input type="text" name="text37" size="15" value="<?php echo $show[3][7] ?>"></td>
			<td align="center" bgcolor="#C0C0C0"><input type="text" name="text46" size="15" value="<?php echo $show[4][6] ?>"><br>
			<input type="text" name="text47" size="15" value="<?php echo $show[4][7] ?>"></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">04:00~20:00</td>
			<td align="center" colspan="5" bgcolor="#C0C0C0">音樂不間斷</font></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF" height="34">20:00~21:00</td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text08" size="15" value="<?php echo $show[0][8] ?>"><br>
			<input type="text" name="text09" size="15" value="<?php echo $show[0][9] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text18" size="15" value="<?php echo $show[1][8] ?>"><br>
			<input type="text" name="text19" size="15" value="<?php echo $show[1][9] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text28" size="15" value="<?php echo $show[2][8] ?>"><br>
			<input type="text" name="text29" size="15" value="<?php echo $show[2][9] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text38" size="15" value="<?php echo $show[3][8] ?>"><br>
			<input type="text" name="text39" size="15" value="<?php echo $show[3][9] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text48" size="15" value="<?php echo $show[4][8] ?>"><br>
			<input type="text" name="text49" size="15" value="<?php echo $show[4][9] ?>"></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">21:00~22:00</td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text010" size="15" value="<?php echo $show[0][10] ?>"><br>
			<input type="text" name="text011" size="15" value="<?php echo $show[0][11] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text110" size="15" value="<?php echo $show[1][10] ?>"><br>
			<input type="text" name="text111" size="15" value="<?php echo $show[1][11] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text210" size="15" value="<?php echo $show[2][10] ?>"><br>
			<input type="text" name="text211" size="15" value="<?php echo $show[2][11] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text310" size="15" value="<?php echo $show[3][10] ?>"><br>
			<input type="text" name="text311" size="15" value="<?php echo $show[3][11] ?>"></td>
			<td align="center" bgcolor="#FFFFFF"><input type="text" name="text410" size="15" value="<?php echo $show[4][10] ?>"><br>
			<input type="text" name="text411" size="15" value="<?php echo $show[4][11] ?>"></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FFFFFF">22:00~23:00</td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text012" size="15" value="<?php echo $show[0][12] ?>"><br>
			<input type="text" name="text013" size="15" value="<?php echo $show[0][13] ?>"></td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text112" size="15" value="<?php echo $show[1][12] ?>"><br>
			<input type="text" name="text113" size="15" value="<?php echo $show[1][13] ?>"></td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text212" size="15" value="<?php echo $show[2][12] ?>"><br>
			<input type="text" name="text213" size="15" value="<?php echo $show[2][13] ?>"></td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text312" size="15" value="<?php echo $show[3][12] ?>"><br>
			<input type="text" name="text313" size="15" value="<?php echo $show[3][13] ?>"></td>
			<td align="center" bgcolor="#FFFF99"><input type="text" name="text412" size="15" value="<?php echo $show[4][12] ?>"><br>
			<input type="text" name="text413" size="15" value="<?php echo $show[4][13] ?>"></td>
		</tr>
		<tr>
			<td align="center" height="51" bgcolor="#FFFFFF">23:00~24:00</td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text014" size="15" value="<?php echo $show[0][14] ?>"><br>
			<input type="text" name="text015" size="15" value="<?php echo $show[0][15] ?>"></td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text114" size="15" value="<?php echo $show[1][14] ?>"><br>
			<input type="text" name="text115" size="15" value="<?php echo $show[1][15] ?>"></td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text214" size="15" value="<?php echo $show[2][14] ?>"><br>
			<input type="text" name="text215" size="15" value="<?php echo $show[2][15] ?>"></td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text314" size="15" value="<?php echo $show[3][14] ?>"><br>
			<input type="text" name="text315" size="15" value="<?php echo $show[3][15] ?>"></td>
			<td align="center" bgcolor="#CCFFFF"><input type="text" name="text414" size="15" value="<?php echo $show[4][14] ?>"><br>
			<input type="text" name="text415" size="15" value="<?php echo $show[4][15] ?>"></td>
		</tr>
	</table>
	<input type="submit" value="送出" name="B1"></form>
</div>

<div align="center">
	<table border="1" width="52%" cellspacing="0" cellpadding="0" id="table1" bordercolor="#000000">
		<tr><td align="center" bgcolor="#CCFFFF">首播</td>
			<td align="center">重播</td>
			<td align="center" bgcolor="#C0C0C0">音樂</td>
			<td align="center" bgcolor="#FFFF99" width="173">特輯、新聲</td>
		</tr></table>
</div>


</body>

</html>