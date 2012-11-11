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
<? # 導入check.php，以確認身分 ?>
<? require("check.php") ;?>
<? @session_start(); // 開啟 session ;?>
<center>


<?
# 判斷$delid的值
if(@$_POST['delid']==""){  
echo"<font color=Red size=2><center>請刪除公告</font>"; 
}else{ 
# 將$del_id的值帶入delete()自訂函數當中
$del_id=delete($_POST['delid']); 
echo"<font color=Red size=2><center>公告刪除成功！</font><br>"; 
} 
?> 
<?
# 自訂函數delete()以便刪除，以下程式碼不再說明
function delete($del_id){ 
        $del_file = "sub.dat"; 
        $del_files = file($del_file); 
        $del_count = count($del_files); 
        for($i = 0; $i < $del_count; $i++){ 
                if($i != $del_id){ 
                        @$del_filez[] = $del_files[$i]; 
                } 
        } 
        if($del_open = fopen($del_file, "w+")){ 
                $fop_count = count(@$del_filez); 
                for($i = 0; $i < $fop_count; $i++){ 
                        $new_file = $del_filez[$i]; 
                        fputs($del_open, $new_file); 
 
                } 
 
        } else { 
                echo "<center><font color=Red size=2>無法刪除公告！</font>"; 
                exit; 
        } 
} 
?>

<HTML>
<HEAD>
<TITLE>刪除公告區</TITLE>
<META http-equiv=Content-Type content="text/html; charset=big5">
<style type="text/css">
A{ text-decoration: none; }
A:hover { text-decoration: underline; }
</style>
</HEAD>
<body background="<?=$background;?>" bgcolor="<?=$bgcolor;?>">
</center>
<? 
# 開啟sub.dat的檔案並且判斷長度
$lines=file("sub.dat");  
$count=count($lines);
$delcount=$count-1; 
for($a=($count-1);$a>=0;$a--){ 
$line[]=$lines[$a]; 
} 
?> 
<center>  
<table border="0" width="<?=$form_size;?>"> 
  <tr> 
    <td width="100%" colspan="6" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>"> 
      <p align="center"><font size="2" color="<?=$title_font;?>">公告區</font></td> 
  </tr> 
  <tr> 
    <td width="6%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">編號</font></td> 
    <td width="60%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">公告標題</font></td> 
    <td width="11%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">日期</font></td> 
    <td width="23%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">發布人</font></td> 
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">編輯</font></td> 
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">刪除</font></td> 
  </tr> 
<? 
# 將檔案用explode()函數來分割
for($i=0;$i<$count;$i++){ 
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("∥",$line[$i]); 
$id=$count-$i; 
$delid=$delcount-$i;
$editid=$delid+1;
# 去除php中的斜線衝碼 
$url=stripslashes($url);
$name=stripslashes($name);
$mail=stripslashes($mail);
$title=stripslashes($title);
$kind=stripslashes($kind); 
$note=stripslashes($note);
# 判斷$mail的值
if($mail!=""){
	  $person="<a href='mailto:$mail'><font color='$explor_font' size='2' face='Verdana'>$name</font></a>";
	}else{
	  $person="<font color='$explor_font' size='2' face='Verdana'>$name</font>";
	}
# 判斷$style_pic的值
if($style_pic=="open"){
$kind_pic="<img src='$kind'></img>";
}else{
$kind_pic="";
}
#  顯示列串
if($note): 
?> 
  <tr> 
    <td width="6%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $id ;?></font></td> 
    <td width="60%" align="Left" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $kind_pic;?><a href="explor.php?id=<?= $id ;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $title;?></font></a></td> 
    <td width="11%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$explor_font;?>" size="1" face="Verdana"><?= $date ;?></font></td> 
    <td width="23%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $person ;?></td> 
<form action="edit.php?editid=<?= $editid ;?>" method="post"><td width="10%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="Submit" name="send" value="編輯" style="background-color: <?=$bgcolor;?>; color: <?=$explor_font;?>; border: border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="hidden" name="user_com" value="<?=$_GET['user_com'];?>"><input type="hidden" name="user_name" value="<?=$_SESSION['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$_SESSION['user_passwd'];?>"></td></form>  
<form action="del.php" method="post"><td width="10%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="Hidden" name="delid" value="<?= $delid ;?>"><input type="Submit" name="send" value="刪除" style="background-color: <?=$bgcolor;?>; color: <?=$explor_font;?>; border: border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="hidden" name="user_com" value="<?=$_GET['user_com'];?>"><input type="hidden" name="user_name" value="<?=$_SESSION['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$_SESSION['user_passwd'];?>"></td></form> 
  </tr> 
<?
# 結束列串
endif;
}
?>
  <tr> 
    <td width="100%" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="6"><font size="1" face="Verdana">C.P.Sub 公告系統 
      </font><font size="1" face="Verdana" font="<?=$cooltey_font;?>"> v4.5 Powered By <a href="http://www.cooltey.org">Cooltey</a> 
      </font></td> 
  </tr> 
</table> 
<br>
<font color="<?=$font_link;?>" size="2"><a href="sub.php">回公告首頁</a></font>
</center> 
</body> 
 
</html>