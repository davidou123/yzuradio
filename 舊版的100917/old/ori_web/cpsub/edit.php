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
# 判斷$editid的值
if(@$_POST['editid']==""){  
echo"<font color=Red size=2><center>請編輯公告</font>"; 
}else{ 
# 取得需要更新的公告ID
$edit_id= $_POST['editid']; 

# 下面都是判斷傳送的值中是否是空值
if(@$_POST['title']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>您忘了打上標題囉！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
if(@$_POST['name']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>您忘了打上姓名囉！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
if(@$_POST['note']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>您忘了打上公告囉！</legend></font><br><hr color=#FFBBCC width=150><br><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}else{
echo "<p></p>";
# 排序好要存取的檔案，用∥來分別
	if($_POST[date_option] == "1")
	{
	$t= $_POST['date'];
	}else{
	$t= date("Y/m/d");
	}
	$kind=str_replace("∥","", $_POST['kind']);
	$title=str_replace("∥","", $_POST['title']);
	$url=str_replace("∥","", $_POST['url']);
	$name=str_replace("∥","", $_POST['name']);
	$mail=str_replace("∥","", $_POST['mail']);
	$updname=str_replace("∥","", $_POST['updname']);
	@$hidden=str_replace("∥","", $hidden);
	$note=str_replace("\r\n","<br>", $_POST['note']);
	$new_sub=$kind."∥".$t."∥".$title."∥".$url."∥".$name."∥".$mail."∥".$updname."∥".$hidden."∥".$note."\n";

      	$edit_file = "sub.dat"; 
        $edit_files = file($edit_file); 
        $edit_count = count($edit_files); 
        for($i = 0; $i < $edit_count; $i++){ 
                if($i == $edit_id)
		{ 		
                        @$edit_filez[] = $new_sub;
                }else{
		        @$edit_filez[] = $edit_files[$i]; 
		}
        } 
        if($edit_open = fopen($edit_file, "w+")){ 
                $fop_count = count(@$edit_filez); 
                for($i = 0; $i < $fop_count; $i++){ 
                        $new_file = $edit_filez[$i]; 
                        fputs($edit_open, $new_file); 
 
                } 
 		echo"<font color=Red size=2><center>公告編輯成功！</font><br>"; 
		$_GET['editid'] = $edit_id+1;
        } else { 
                echo "<center><font color=Red size=2>無法編輯公告！</font>"; 
                exit; 
        } 
	} 
}
?>
<? 
# 開啟sub.dat的檔案
$lines=file("sub.dat");  
$count=count($lines);  
?> 
<p> 
<center> 
<? 
$n_id=$_GET['editid'];
$newid = $n_id-1;
# 直接分割不用for()來重複分割，直接取某列的值來顯示其存取的值
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("∥",$lines[$n_id-1]); 
# 去除php中的斜線衝碼 
$url=stripslashes($url);
$name=stripslashes($name);
$mail=stripslashes($mail);
$title=stripslashes($title);
$kind=stripslashes($kind); 
$note=stripslashes($note);  
# 判斷$updname的值
if($updname==""){ 
$updname_link="<font color=#CC6600 size=1 face=Verdana>沒有相關檔案</font>"; 
}else{
$updname_link="<a href=./data/$updname target='_new'><font size=1 color=$login_font face='Verdana'>$updname</font></a>";
}

$note = str_replace("<br>", "\r\n", $note);
?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>編輯公告</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>
<body background="<?=$background;?>" bgcolor="<?=$bgcolor;?>">
<center>   
<form action="edit.php" method="post">
<input type="hidden" name="user_com" value="<?=$_GET['user_com'];?>"><input type="hidden" name="user_name" value="<?=$_SESSION['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$_SESSION['user_passwd'];?>"><input type="hidden" name="editid" value="<?=$newid;?>">   
<table border="0" width="<?=$form_size;?>">   
  <tr>   
    <td width="102%" colspan="4" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>">   
      <p align="center"><font size="2" color="<?=$title_font;?>">使用者編輯公告區</font></td>   
  </tr>   
  <tr>   
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">公告標題</font><font size="2">：</font></td>   
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font size="2" color="<?=$explor_font;?>"><input type="text" name="title" value="<?=$title;?>"  size="52" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
  </tr>
    <tr>   
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">公告人姓名：</font></td>   
    <td width="30%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$explor_font;?>"><input type="text" name="name" value="<?=$name;?>" size="15" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">公告人信箱：</font></td>  
    <td width="30%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$explor_font;?>"><input type="text" name="mail" value="<?=$mail;?>" size="15" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
  </tr>   
  <tr>  
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">心情圖像：</font></td>  
</center>   
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3">  
    <p align="left">  
    <input type="radio" name="kind" value="img/01.gif" checked><img src="img/01.gif"> 
    <input type="radio" name="kind" value="img/02.gif"><img src="img/02.gif">      
    <input type="radio" name="kind" value="img/03.gif"><img src="img/03.gif">      
    <input type="radio" name="kind" value="img/04.gif"><img src="img/04.gif">      
    <input type="radio" name="kind" value="img/05.gif"><img src="img/05.gif">      
    <input type="radio" name="kind" value="img/06.gif"><img src="img/06.gif">      
    <input type="radio" name="kind" value="img/07.gif"><img src="img/07.gif">     
    <input type="radio" name="kind" value="img/08.gif"><img src="img/08.gif">       
      
    <input type="radio" name="kind" value="img/09.gif"><img src="img/09.gif">      
    <input type="radio" name="kind" value="img/10.gif"><img src="img/10.gif">      
    <input type="radio" name="kind" value="img/11.gif"><img src="img/11.gif">      
    <input type="radio" name="kind" value="img/12.gif"><img src="img/12.gif">      
    <input type="radio" name="kind" value="img/13.gif"><img src="img/13.gif">      
    <input type="radio" name="kind" value="img/14.gif"><img src="img/14.gif">      
    <input type="radio" name="kind" value="img/15.gif"><img src="img/15.gif">      
    <input type="radio" name="kind" value="img/16.gif"><img src="img/16.gif">       
    </p>      
    </td>       
  </tr>       
<center>      
  <tr>       
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">相關連結：</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"><input type="text" name="url" value="<?=$url;?>"  size="52" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>      
  </tr>      
  <tr>       
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">上傳檔案：</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"> <?=$updname_link;?><input type="hidden" name="updname" value="<?=$updname;?>" size="52"></font></td>      
  </tr>   
  <tr>       
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">發佈時間：</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"><input type="radio" name="date_option" value="1" checked><font size="2" color="<?=$menu_font;?>">使用原始發佈時間：</font><?=$date;?><br><input type="radio" name="date_option" value="2"><font size="2" color="<?=$menu_font;?>">使用目前時間：</font><?=date("Y/m/d");?></font><input type="hidden" name="date" value="<?=$date;?>"></td>      
  </tr>   
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><font size="2" color="<?=$menu_font;?>">公告內容</font></td>      
  </tr>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><font size="2" color="<?=$explor_font;?>"><textarea rows="7" cols="65" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" name="note"><?=$note;?></textarea></font></td>      
  </tr>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><input type="Submit" name="send" value="傳送" style="background-color: <?=$bgcolor;?>; color: <?=$login_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></td>      
  </tr>      
</table>      
</form>   
<br>  
<a href="sub.php"><font color="<?=$font_link;?>" size="2">回公告首頁</font></a>     
</center>      
　    
</body>    
    
</html>