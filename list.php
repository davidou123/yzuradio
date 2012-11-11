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

  <style type="text/css"> 
.list td:hover {background: #FFF;}  
.list td{background-color: #F8F8F8;  text-align: center;}
.list .tdimportant{background-color: #ECECEC;font-weight:bold;color: #666;width:122px}
td span{font-weight:bold;}
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

<div align="center">
		<BR>
	<b><font size="5"><?php echo $show[5][0] ?>元智之音節目表</font></b>

		<table class="list" border="0" width="800px" cellpadding="2">
		<tr>
			<td class="tdimportant">　</td>
			<td class="tdimportant">星期一</td>
			<td class="tdimportant">星期二</td>
			<td class="tdimportant">星期三</td>
			<td class="tdimportant">星期四</td>
			<td class="tdimportant">星期五</td>
		</tr>
		<tr>
			<td class="tdimportant">00:00~01:00</td>
	
			<td><?php echo $show[0][0] ?><br>	<span>		<?php echo $show[0][1] ?></span></td>
			<td><?php echo $show[1][0] ?><br>	<span>		<?php echo $show[1][1] ?></span></td>
			<td><?php echo $show[2][0] ?><br>	<span>		<?php echo $show[2][1] ?></span></td>
			<td><?php echo $show[3][0] ?><br>	<span>		<?php echo $show[3][1] ?></span></td>
			<td ><?php echo $show[4][0] ?><br>	<span>		<?php echo $show[4][1] ?></span></td>			

		</tr>
		<tr>
			<td class="tdimportant">01:00~02:00</td>
			<td><?php echo $show[0][2] ?><br>	<span>		<?php echo $show[0][3] ?></span></td>
			<td><?php echo $show[1][2] ?><br>	<span>		<?php echo $show[1][3] ?></span></td>
			<td><?php echo $show[2][2] ?><br>	<span>		<?php echo $show[2][3] ?></span></td>
			<td><?php echo $show[3][2] ?><br>	<span>		<?php echo $show[3][3] ?></span></td>
			<td><?php echo $show[4][2] ?><br>	<span>		<?php echo $show[4][3] ?></span></td>
		</tr>
		<tr>
			<td class="tdimportant">02:00~03:00</td>

			<td ><?php echo $show[0][4] ?><br>	<span>		<?php echo $show[0][5] ?></span></td>
			<td ><?php echo $show[1][4] ?><br>	<span>		<?php echo $show[1][5] ?></span></td>
			<td ><?php echo $show[2][4] ?><br>	<span>		<?php echo $show[2][5] ?></span></td>
			<td ><?php echo $show[3][4] ?><br>	<span>		<?php echo $show[3][5] ?></span></td>
			<td ><?php echo $show[4][4] ?><br>	<span>		<?php echo $show[4][5] ?></span></td>
		</tr>
		<tr>
			<td class="tdimportant">03:00~04:00</td>
			<td ><?php echo $show[0][6] ?><br>	<span>		<?php echo $show[0][7] ?></span></td>
			<td ><?php echo $show[1][6] ?><br>	<span>		<?php echo $show[1][7] ?></span></td>
			<td ><?php echo $show[2][6] ?><br>	<span>		<?php echo $show[2][7] ?></span></td>
			<td ><?php echo $show[3][6] ?><br>	<span>		<?php echo $show[3][7] ?></span></td>
			<td ><?php echo $show[4][6] ?><br>	<span>		<?php echo $show[4][7] ?></span></td>
		</tr>
		<tr>
			<td class="tdimportant">04:00~20:00</td>
			<td colspan="5">音 樂 不 間 斷</td>
		</tr>
		<tr>
			<td class="tdimportant">20:00~21:00</td>
			<td ><?php echo $show[0][8] ?><br>	<span>		<?php echo $show[0][9] ?></span></td>
			<td ><?php echo $show[1][8] ?><br>	<span>		<?php echo $show[1][9] ?></span></td>
			<td ><?php echo $show[2][8] ?><br>	<span>		<?php echo $show[2][9] ?></span></td>
			<td ><?php echo $show[3][8] ?><br>	<span>		<?php echo $show[3][9] ?></span></td>
			<td ><?php echo $show[4][8] ?><br>	<span>		<?php echo $show[4][9] ?></span></td>
		</tr>
		<tr>
			<td class="tdimportant">21:00~22:00</td>
			<td ><?php echo $show[0][10] ?><br>	<span>		<?php echo $show[0][11] ?></span></td>
			<td ><?php echo $show[1][10] ?><br>	<span>		<?php echo $show[1][11] ?></span></td>
			<td ><?php echo $show[2][10] ?><br>	<span>		<?php echo $show[2][11] ?></span></td>
			<td ><?php echo $show[3][10] ?><br>	<span>		<?php echo $show[3][11] ?></span></td>
			<td ><?php echo $show[4][10] ?><br>	<span>		<?php echo $show[4][11] ?></span></td>
		</tr>
		<tr>
			<td class="tdimportant">22:00~23:00</td>
			<td ><?php echo $show[0][12] ?><br>	<span>		<?php echo $show[0][13] ?></span></td>
			<td ><?php echo $show[1][12] ?><br>	<span>		<?php echo $show[1][13] ?></span></td>
			<td ><?php echo $show[2][12] ?><br>	<span>		<?php echo $show[2][13] ?></span></td>
			<td ><?php echo $show[3][12] ?><br>	<span>		<?php echo $show[3][13] ?></span></td>
			<td ><?php echo $show[4][12] ?><br>	<span>		<?php echo $show[4][13] ?></span></td>
		</tr>
		<tr>
			<td class="tdimportant">23:00~24:00</td>
			<td ><?php echo $show[0][14] ?><br>	<span>		<?php echo $show[0][15] ?></span></td>
			<td ><?php echo $show[1][14] ?><br>	<span>		<?php echo $show[1][15] ?></span></td>
			<td ><?php echo $show[2][14] ?><br>	<span>		<?php echo $show[2][15] ?></span></td>
			<td ><?php echo $show[3][14] ?><br>	<span>		<?php echo $show[3][15] ?></span></td>
			<td ><?php echo $show[4][14] ?><br>	<span>		<?php echo $show[4][15] ?></span></td>
		</tr>
	</table>


<BR><BR>
</div>
	</td></tr>
	
	<tr><td bgcolor="#114087">		
<?php include 'footer.php';?>
	</td></tr>
</table>
</div>


</body>

</html>