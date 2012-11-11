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
if($_GET['clear']==yes)
{
setcookie("name");
setcookie("email");
setcookie("homename");
setcookie("home");
setcookie("msn");
echo "<font color='$go_link' size='2'><center>留言紀錄清除成功！</font>
";
$_COOKIE['name']="";
$_COOKIE['email']="";
$_COOKIE['homename']="";
$_COOKIE['home']="";
$_COOKIE['msn']="";
}
?>
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
<center>
<table><tr><td><font size="2" color="<?=$gu_link;?>">│</font><a href="guest.php"><font color="<?=$gm_link;?>" size="2">回留言板</font></a><font size="2" color="<?=$gu_link;?>">│</font><a href="<?=$HTTP_SERVER_VARS['PHP_SELF'];?>?clear=yes"><font color="<?=$gm_link;?>" size="2">清除留言紀錄</font></a><font size="2" color="<?=$gu_link;?>">│</font></tr></table><br>
<form action="result.php" method="post">
<table border="1" width="58%" style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>">
  <tr>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">留言主題：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="submit" size="19"></td>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">姓名：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="name" size="19" value="<?=$_COOKIE['name'];?>"></td>
  </tr>
  <tr>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">性別：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><select name="sexual" size="1"><option value="<?=$g_boy;?>">帥哥</option><option value="<?=$g_girl;?>">美女</option></select></td>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">E-Mail：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="email" size="19" value="<?=$_COOKIE['email'];?>"></td>
  </tr>
  <tr>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">網站網址：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="home" size="19"  value="<?=$_COOKIE['home'];?>"></td>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">網站名稱：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="homename" size="19" value="<?=$_COOKIE['homename'];?>"></td>
  </tr>
  <tr>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">MSN：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="msn" size="19"  value="<?=$_COOKIE['msn'];?>"></td>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">文字色彩：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><select name="color" size="1"><option value="FFFFFF">FFFFFF
		<option value="FF5096" style="background-color:FF5096 ;color: FF5096">FF5096    
		<option value="FF5084" style="background-color:FF5084 ;color: FF5084">FF5084    
		<option value="FF5073" style="background-color:FF5073 ;color: FF5073">FF5073    
		<option value="FF5061" style="background-color:FF5061 ;color: FF5061">FF5061    
		<option value="FF5050" style="background-color:FF5050 ;color: FF5050">FF5050    
		<option value="FF6250" style="background-color:FF6250 ;color: FF6250">FF6250    
		<option value="FF7C50" style="background-color:FF7C50 ;color: FF7C50">FF7C50    
		<option value="FF8550" style="background-color:FF8550 ;color: FF8550">FF8550    
		<option value="FF8050" style="background-color:FF8050 ;color: FF8050">FF8050    
		<option value="FF9650" style="background-color:FF9650 ;color: FF9650">FF9650    
		<option value="FF9F50" style="background-color:FF9F50 ;color: FF9F50">FF9F50    
		<option value="FFA850" style="background-color:FFA850 ;color: FFA850">FFA850    
		<option value="FFB050" style="background-color:FFB050 ;color: FFB050">FFB050    
		<option value="FFB950" style="background-color:FFB950 ;color: FFB950">FFB950    
		<option value="FFC250" style="background-color:FFC250 ;color: FFC250">FFC250    
		<option value="FFCB50" style="background-color:FFCB50 ;color: FFCB50">FFCB50    
		<option value="FFD350" style="background-color:FFD350 ;color: FFD350">FFD350    
		<option value="FFDD78" style="background-color:FFDD78 ;color: FFDD78">FFDD78    
		<option value="FFEB78" style="background-color:FFEB78 ;color: FFEB78">FFEB78    
		<option value="FFF278" style="background-color:FFF278 ;color: FFF278">FFF278    
		<option value="FFF878" style="background-color:FFF878 ;color: FFF878">FFF878    
		<option value="FFFF78" style="background-color:FFFF78 ;color: FFFF78">FFFF78    
		<option value="F8FF78" style="background-color:F8FF78 ;color: F8FF78">F8FF78    
		<option value="F1FF78" style="background-color:F1FF78 ;color: F1FF78">F1FF78    
		<option value="EBFF78" style="background-color:EBFF78 ;color: EBFF78">EBFF78    
		<option value="E4FF78" style="background-color:E4FF78 ;color: E4FF78">E4FF78    
		<option value="DDFF78" style="background-color:DDFF78 ;color: DDFF78">DDFF78    
		<option value="D2FF78" style="background-color:D2FF78 ;color: D2FF78">D2FF78    
		<option value="C0FF78" style="background-color:C0FF78 ;color: C0FF78">C0FF78    
		<option value="AEFF78" style="background-color:AEFF78 ;color: AEFF78">AEFF78    
		<option value="9CFF78" style="background-color:9CFF78 ;color: 9CFF78">9CFF78    
		<option value="8AFF78" style="background-color:8AFF78 ;color: 8AFF78">8AFF78    
		<option value="78FF78" style="background-color:78FF78 ;color: 78FF78">78FF78    
		<option value="78FF8A" style="background-color:78FF8A ;color: 78FF8A">78FF8A    
		<option value="78FF9C" style="background-color:78FF9C ;color: 78FF9C">78FF9C    
		<option value="78FFAE" style="background-color:78FFAE ;color: 78FFAE">78FFAE    
		<option value="78FFC0" style="background-color:78FFC0 ;color: 78FFC0">78FFC0    
		<option value="78FFD2" style="background-color:78FFD2 ;color: 78FFD2">78FFD2    
		<option value="78FFDD" style="background-color:78FFDD ;color: 78FFDD">78FFDD    
		<option value="78FFE4" style="background-color:78FFE4 ;color: 78FFE4">78FFE4    
		<option value="78FFEB" style="background-color:78FFEB ;color: 78FFEB">78FFEB    
		<option value="78FFF2" style="background-color:78FFF2 ;color: 78FFF2">78FFF2    
		<option value="78FFF8" style="background-color:78FFF8 ;color: 78FFF8">78FFF8    
		<option value="78FFFF" style="background-color:78FFFF ;color: 78FFFF">78FFFF    
		<option value="78F8FF" style="background-color:78F8FF ;color: 78F8FF">78F8FF    
		<option value="78F1FF" style="background-color:78F1FF ;color: 78F1FF">78F1FF    
		<option value="78EBFF" style="background-color:78EBFF ;color: 78EBFF">78EBFF    
		<option value="78E4FF" style="background-color:78E4FF ;color: 78E4FF">78E4FF    
		<option value="78DDFF" style="background-color:78DDFF ;color: 78DDFF">78DDFF    
		<option value="78D2FF" style="background-color:78D2FF ;color: 78D2FF">78D2FF    
		<option value="78C0FF" style="background-color:78C0FF ;color: 78C0FF">78C0FF    
		<option value="78AEFF" style="background-color:78AEFF ;color: 78AEFF">78AEFF    
		<option value="789CFF" style="background-color:789CFF ;color: 789CFF">789CFF    
		<option value="788AFF" style="background-color:788AFF ;color: 788AFF">788AFF    
		<option value="7878FF" style="background-color:7878FF ;color: 7878FF">7878FF    
		<option value="8A78FF" style="background-color:8A78FF ;color: 8A78FF">8A78FF    
		<option value="9C78FF" style="background-color:9C78FF ;color: 9C78FF">9C78FF    
		<option value="AE78FF" style="background-color:AE78FF ;color: AE78FF">AE78FF    
		<option value="C778FF" style="background-color:C778FF ;color: C778FF">C778FF    
		<option value="D278FF" style="background-color:D278FF ;color: D278FF">D278FF    
		<option value="DD78FF" style="background-color:DD78FF ;color: DD78FF">DD78FF    
		<option value="E978FF" style="background-color:E978FF ;color: E978FF">E978FF    
		<option value="F478FF" style="background-color:F478FF ;color: F478FF">F478FF    
		<option value="FF78F4" style="background-color:FF78F4 ;color: FF78F4">FF78F4    
		<option value="FF78E8" style="background-color:FF78E8 ;color: FF78E8">FF78E8    
		<option value="FF78DD" style="background-color:FF78DD ;color: FF78DD">FF78DD    
		<option value="FF78D2" style="background-color:FF78D2 ;color: FF78D2">FF78D2    
		<option value="FF78C7" style="background-color:FF78C7 ;color: FF78C7">FF78C7    
		<option value="000000" style="background-color:000000 ;color: 000000" selected>000000    </select></td>
  </tr>
  <tr>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">留言性質：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><select name="R2" size="1">
        <option selected>一般留言</option>
        <option value="yes">悄悄話</option>
      </select></td>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">心情圖片：</font></td>
    <td width="33%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><select name="R1"  onChange="document.images['R1'].src=options[selectedIndex].value;" style="BACKGROUND-COLOR: #ffffff; BORDER-BOTTOM: 1px double; BORDER-LEFT: 1px double; BORDER-RIGHT: 1px double; BORDER-TOP: 1px double; COLOR: #000000">
<?
$data_file=opendir('./image/face');  
while($all_file=readdir($data_file)): 
if($all_file=="."){
continue;
}
if($all_file==".."){
continue;
}
$lines=file("pn_list.dat");
$count=count($lines);
for($a=($count-1);$a>=0;$a--){        
$line[]=$lines[$a];        
}
for($i=0;$i<$count;$i++){
list($pic_name,$pic_cname)=explode("∥",$line[$i]);
$pic_name=stripslashes($pic_name);
$pic_cname=stripslashes($pic_cname);
if($pic_name==$all_file){
$pic_name=ereg_replace($all_file,$pic_cname,$pic_name);
echo "<option value='image/face/".$all_file."'>$pic_name";
}
}
endwhile;  
closedir($data_file); 
?>

</select></td>
  </tr>
  <tr>
    <td width="17%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">留言內容：</font></td>
    <td width="83%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="3"><center><textarea name="note" cols="50" rows="7"></textarea>　</td>
  </tr>
  <tr>
    <td width="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="4"><center><input type="Submit" name="send" value="傳送留言"><input type="reset" value="清除重寫"></center></td>
  </tr>
  <tr>
    <td width="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="4"><center><font size="2" color="<?=$go_link;?>">請輸入驗證碼：</font><img src="imagebuilder.php" border="1"><input maxlength=8 size=8 name="userstring" type="text" value=""></center></td>
  </tr>
</table>
</form>
<img id="R1" src="image/face/p1.gif"><br><font color="red" size="2">圖片預覽</font>
</center>
 
</body> 
 
</html> 