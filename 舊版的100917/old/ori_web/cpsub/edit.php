<?
#  -----------------------------------------  #  
#  �{���W�١GC.P.Sub���i�t��                  #
#  �]�p�̡GCooltey                            # 
#  E-Mail�Gcoolteygame@gmail.com             #
#  HomePage�Ghttp://www.cooltey.org            #
#  �{�������GV4.5                            #
#  �̫��s�G2008/9/1                         #
#  �`�N�A�����v�ŧi���o�R���A�{���i���N�ק�I # 
#  �̤U���@�檺 Powered By Cooltey �Ф��n�R�� #
#  -----------------------------------------  #
?>
<? # �ɤJcheck.php�A�H�T�{���� ?>
<? require("check.php") ;?>
<? @session_start(); // �}�� session ;?>
<center>
<?
# �P�_$editid����
if(@$_POST['editid']==""){  
echo"<font color=Red size=2><center>�нs�褽�i</font>"; 
}else{ 
# ���o�ݭn��s�����iID
$edit_id= $_POST['editid']; 

# �U�����O�P�_�ǰe���Ȥ��O�_�O�ŭ�
if(@$_POST['title']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>�z�ѤF���W���D�o�I</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a></fieldset></td></tr></table>";
exit;
}
if(@$_POST['name']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>�z�ѤF���W�m�W�o�I</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a></fieldset></td></tr></table>";
exit;
}
if(@$_POST['note']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>�z�ѤF���W���i�o�I</legend></font><br><hr color=#FFBBCC width=150><br><a href=javascript:history.back(1)><font color=$font_link size=2>�^�W�@��</font></a></fieldset></td></tr></table>";
exit;
}else{
echo "<p></p>";
# �ƧǦn�n�s�����ɮסA�Ρ��Ӥ��O
	if($_POST[date_option] == "1")
	{
	$t= $_POST['date'];
	}else{
	$t= date("Y/m/d");
	}
	$kind=str_replace("��","", $_POST['kind']);
	$title=str_replace("��","", $_POST['title']);
	$url=str_replace("��","", $_POST['url']);
	$name=str_replace("��","", $_POST['name']);
	$mail=str_replace("��","", $_POST['mail']);
	$updname=str_replace("��","", $_POST['updname']);
	@$hidden=str_replace("��","", $hidden);
	$note=str_replace("\r\n","<br>", $_POST['note']);
	$new_sub=$kind."��".$t."��".$title."��".$url."��".$name."��".$mail."��".$updname."��".$hidden."��".$note."\n";

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
 		echo"<font color=Red size=2><center>���i�s�覨�\�I</font><br>"; 
		$_GET['editid'] = $edit_id+1;
        } else { 
                echo "<center><font color=Red size=2>�L�k�s�褽�i�I</font>"; 
                exit; 
        } 
	} 
}
?>
<? 
# �}��sub.dat���ɮ�
$lines=file("sub.dat");  
$count=count($lines);  
?> 
<p> 
<center> 
<? 
$n_id=$_GET['editid'];
$newid = $n_id-1;
# �������Τ���for()�ӭ��Ƥ��ΡA�������Y�C���Ȩ���ܨ�s������
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("��",$lines[$n_id-1]); 
# �h��php�����׽u�ĽX 
$url=stripslashes($url);
$name=stripslashes($name);
$mail=stripslashes($mail);
$title=stripslashes($title);
$kind=stripslashes($kind); 
$note=stripslashes($note);  
# �P�_$updname����
if($updname==""){ 
$updname_link="<font color=#CC6600 size=1 face=Verdana>�S�������ɮ�</font>"; 
}else{
$updname_link="<a href=./data/$updname target='_new'><font size=1 color=$login_font face='Verdana'>$updname</font></a>";
}

$note = str_replace("<br>", "\r\n", $note);
?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�s�褽�i</title>
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
      <p align="center"><font size="2" color="<?=$title_font;?>">�ϥΪ̽s�褽�i��</font></td>   
  </tr>   
  <tr>   
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">���i���D</font><font size="2">�G</font></td>   
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font size="2" color="<?=$explor_font;?>"><input type="text" name="title" value="<?=$title;?>"  size="52" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
  </tr>
    <tr>   
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">���i�H�m�W�G</font></td>   
    <td width="30%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$explor_font;?>"><input type="text" name="name" value="<?=$name;?>" size="15" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">���i�H�H�c�G</font></td>  
    <td width="30%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$explor_font;?>"><input type="text" name="mail" value="<?=$mail;?>" size="15" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
  </tr>   
  <tr>  
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�߱��Ϲ��G</font></td>  
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
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�����s���G</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"><input type="text" name="url" value="<?=$url;?>"  size="52" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>      
  </tr>      
  <tr>       
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�W���ɮסG</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"> <?=$updname_link;?><input type="hidden" name="updname" value="<?=$updname;?>" size="52"></font></td>      
  </tr>   
  <tr>       
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�o�G�ɶ��G</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"><input type="radio" name="date_option" value="1" checked><font size="2" color="<?=$menu_font;?>">�ϥέ�l�o�G�ɶ��G</font><?=$date;?><br><input type="radio" name="date_option" value="2"><font size="2" color="<?=$menu_font;?>">�ϥΥثe�ɶ��G</font><?=date("Y/m/d");?></font><input type="hidden" name="date" value="<?=$date;?>"></td>      
  </tr>   
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><font size="2" color="<?=$menu_font;?>">���i���e</font></td>      
  </tr>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><font size="2" color="<?=$explor_font;?>"><textarea rows="7" cols="65" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" name="note"><?=$note;?></textarea></font></td>      
  </tr>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><input type="Submit" name="send" value="�ǰe" style="background-color: <?=$bgcolor;?>; color: <?=$login_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></td>      
  </tr>      
</table>      
</form>   
<br>  
<a href="sub.php"><font color="<?=$font_link;?>" size="2">�^���i����</font></a>     
</center>      
�@    
</body>    
    
</html>