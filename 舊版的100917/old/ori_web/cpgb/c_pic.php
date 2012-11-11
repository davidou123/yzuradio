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
<? require("check.php");?>
<center>
<?
if($_POST['send']!=""){
if($_POST['pic_name']==""){
  echo "<font color=$go_link size=2><br>你忘記打上圖檔名稱！</font>";
  exit;
}elseif($_POST['pic_cname']==""){
  echo "<font color=$go_link size=2><br>你忘記打上圖檔中文名稱！</font>";
  exit;
}
$pic_name=str_replace("∥","", $_POST['pic_name']);
$pic_cname=str_replace("∥","", $_POST['pic_cname']);
$main=$pic_name."∥".$pic_cname."\n";
$f=fopen("pn_list.dat","a+");
fwrite($f,$main);
fclose($f);
echo "<font color=$go_link size=2>更名成功！</font><br><font color='red' size='2'>".$_POST['pic_name']."轉換成→".$_POST['pic_cname']."</font>";
}
if($_POST['send_text']!=""){
$main=trim($_POST['main']); 
$f=fopen("pn_list.dat","w+");
fwrite($f,$main);
fclose($f);
echo "<font color=$go_link size=2>修改成功！</font>";
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
<form action="c_pic.php?cookie=yes" method="post">
<table border="1" width="56%"  style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>">
  <tr>
    <td width="54%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">圖檔檔案名稱〈原檔名〉：</font></td>
    <td width="71%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="pic_name" size="30"> </td>
  </tr>
  <tr>
    <td width="54%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">圖檔代替名稱〈可打中文〉：</font></td>
    <td width="71%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><input type="text" name="pic_cname" size="30"></td>
  </tr>
  <tr>
    <td width="100%" colspan="2" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>">
      <p align="center"><input type="Submit" name="send" value="更名！"></p>
    </td>
  </tr>
  <tr>
    <td width="54%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">圖檔預覽：</font></td>
    <td width="71%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><select name="R1"  onChange="document.images['R1'].src=options[selectedIndex].value;" style="BACKGROUND-COLOR: #ffffff; BORDER-BOTTOM: 1px double; BORDER-LEFT: 1px double; BORDER-RIGHT: 1px double; BORDER-TOP: 1px double; COLOR: #000000">
<?
$data_file=opendir('./image/face');  
while($all_file=readdir($data_file)): 
if($all_file=="."){
continue;
}
if($all_file==".."){
continue;
}
echo "<option value='image/face/".$all_file."'>$all_file";
endwhile;  
closedir($data_file); 
?>

</select><img id="R1" src="image/face/p1.gif"></td>
  </tr>
<?
$f=fopen("pn_list.dat","r");
$r=fread($f,filesize("pn_list.dat"));
$main=stripslashes($r);
?>
  <tr>
    <td width="54%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">修改檔案：</font></td>
    <td width="71%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><textarea name="main" rows="6" cols="30"><?=$main;?></textarea></td>
  </tr>
  <tr>
    <td width="100%" colspan="2" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>">
      <p align="center"><input type="Submit" name="send_text" value="修改！"></p>
    </td>
  </tr>
</table>
</form>
</center>
</body>

</html>