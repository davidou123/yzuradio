<?
if($_GET['cookie_clear']=="yes")
{
setcookie("user_passwd");
}
?>
<?
#  -----------------------------------------  #  
#  �{���W�١GC.P.Gb �d����                    #
#  �]�p�̡GCooltey                            # 
#  E-Mail�Gcooltey@yahoo.com.tw               #
#  HomePage�Ghttp://cooltey.mytw.net            #
#  �{�������GV0.89                            #
#  �̫��s�G2006/8/27                         #
#  �`�N�A�����v�ŧi���o�R���A�{���i���N�ק�I # 
#  �̤U���@�檺 Powered By Cooltey �Ф��n�R�� #
#  -----------------------------------------  #
?>
<? require("gsystem.php") ;?>
<? require("css.php");?>
<html>
<? $gname=stripslashes($gname) ;?>
<? $gup=stripslashes($gup) ;?>
<? $guser=stripslashes($guser) ;?>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title><?echo $gname ;?> </title>
<?=$crs ;?>
<SCRIPT LANGUAGE="JavaScript">

function formHandler(form) {
var windowprops = "height=90,width=500,location=yes,"
+ "scrollbars=yes,menubars=no,toolbars=no,resizable=yes";
var URL = form.site.options[form.site.selectedIndex].value;
popup = window.open(URL,"_self",windowprops);
}

</SCRIPT>


</head>
<body>
<p>      
   
<p>      
<?        
$close_html=$ghtml; //�y�k����        
$per=$gn; //�C�����
$number=$_GET['number'];        
if($number==""){        
$number=$per;        
}        
$lines=file("guest.dat");        
$count=count($lines);        
$truecount=$count-1;

$rlines=file("re.dat");        
$rcount=count($rlines);        
$rtruecount=$rcount-1;         
?>
<td aling="left"><? require("count.php");?></td>
<center>
 <tr><td>
      <font size="2" color="<?=$gu_link;?>">�x</font><a href="submit.php"><font size="2" color="<?=$gu_link;?>">�ڭn�d��</font></a><font size="2" color="<?=$gu_link;?>">�x</font>

      <a href="login.php"><font size="2" color="<?=$gu_link;?>">�����޲z</a>�x</font>
      <a href="mailto:<?=$gmail;?>"?>><font size="2" color="<?=$gu_link;?>">�i�D<?= $guser ;?></a>�x</font>
      <a href="<?=$ghome ;?>"><font size="2" color="<?=$gu_link;?>">�^�쭺��</a>�x</font>

</center></tr></td>
<center><?echo $gup ;?>
<table width="100%"><tr><td width="184"><font color="<?=$go_link;?>" size="2">�@��</font><font color="red" size="2"><? echo $count;?></font><font color="<?=$go_link;?>" size="2">���d��</font><td align="center" ><font color="<?=$go_link;?>" size="2">�C�����</font><font color="Red" size="2"><? echo $gn;?></font><font color="<?=$go_link;?>" size="2">��</font><td align="right" ><?
if($close_html=="0"){
      echo "<font color=$go_link size=2> HTML�y�k</font><font color=red size=2>�}��</font> ";
}else{
      echo "<font color=$go_link size=2> HTML�y�k</font><font color=red size=2>����</font> ";
}
?> </tr></table>        
<?        
for($a=($count-1);$a>=0;$a--){        
$line[]=$lines[$a];        
}        
for($i=0;$i<$count;$i++){        
if($i>=($number-$per)&&$i<$number){        
list($name,$submit,$email,$color,$sexual,$ip,$R2,$msn,$home,$homename,$R1,$date,$hidden,$note)=explode("��",$line[$i]);        
$fun=$count-$i;
if($gip==0)
{
if(ereg(".",$ip)){
 $ip="IP�w�]�w����";
}
}
if($close_html==1)
{ 
$note=eregi_replace("<br>","\n",$note);
$note=nl2br(htmlspecialchars($note)); 
$name=htmlspecialchars($name);    
$submit=htmlspecialchars($submit);   
$email=htmlspecialchars($email); 
$home=htmlspecialchars($home);
$msn=htmlspecialchars($msn);        
}elseif($close_html==0){
$note=nl2br($note);        
}        
$name=stripslashes($name);        
$home=stripslashes($home);        
$homename=stripslashes($homename);        
$submit=stripslashes($submit);        
$note=stripslashes($note);        
if($email){        
$email="<a href=mailto:$email><img border=0 src=image/system/mail.gif></a>";        
}else{
$email="<img border=0 src=image/system/n_mail.gif>";
}        
if($R2==yes){        
$note="<center><font color=Red size=2>�o�O��".$guser."�������ܡI</font>";        
}        
if($R2==yes){        
$rebutton="";        
}else{        
$rebutton="<input type=Submit value=�^�Яd��>";        
}        
if($msn){        
$msn="<img border=0 src=image/system/msn.gif alt=msn���X�O�G$msn>";        
}else{
$msn="<img border=0 src=image/system/n_msn.gif>";
}
if($home){        
$home="<a href=$home target='_new'><img border=0 src=image/system/home.gif alt=$homename></a>";        
}else{
$home="<img border=0 src=image/system/n_home.gif>";
}    
if($note):        
?></center>        
<center>        
<form action="resubmit.php?id=<?=$fun;?>" method="post">
<table border="1" width="<?=$gwidth;?>" style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>"> 
<tr>           
    <td width="100%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"  colspan="4"><font size="2" color="<?=$gu_link;?>"><b>�D�D�G<?=$submit;?></b></font></td>         
  </tr>       
       
  <tr>         
    <td width="20%" height="1" rowspan="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><center><img border=0 src="<?=$R1;?>" alt="<?=$date;?>"><br><font size="1" color="<?=$go_link;?>">��<?=$fun;?>���d��</font></center></td>    
    <td width="66%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"  colspan="2"><font size="2" color="<?=$sexual;?>">�d���̡G<?=$name;?></font></td>        
    <td width="14%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" ><font size="2"><?=$home;?><?=$msn;?><?=$email;?></font></td>          
  </tr>   
    <td width="80%" height="50" colspan="3"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gm_skin;?>"><font size="2" color="<?=$color;?>"><?=$note;?></font></td>       
  </tr>       

  <tr>       
    <td width="66%" height="1"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="2"><font size="1" color="<?=$go_link;?>">�d������G<?=$date;?></font></td>       
    <td width="14%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="1" color="<?=$go_link;?>"><?=$ip;?></font></td>
 <? 
 for($ra=0;$ra<=($rcount-1);$ra++){        
$rline[]=$rlines[$ra];        
}        
for($ri=0;$ri<$rcount;$ri++){               
list($rname,$remail,$rcolor,$rsexual,$rip,$rmsn,$rhome,$rhomename,$rdate,$id,$rnote)=explode("��",$rline[$ri]);
if($gip==0){
if(ereg(".",$rip)){
 $rip="IP�w�]�w����";
}
}
if($close_html){
$rnote=eregi_replace("<br>","\n",$rnote);
$rnote=nl2br(htmlspecialchars($rnote));
$rname=htmlspecialchars($rname);    
$remail=htmlspecialchars($remail); 
$rhome=htmlspecialchars($rhome);
$rmsn=htmlspecialchars($rmsn);        
}else{        
$rnote=nl2br($rnote);        
}        
$rname=stripslashes($rname);        
$rhome=stripslashes($rhome);        
$rhomename=stripslashes($rhomename);            
$rnote=stripslashes($rnote);        

if($remail){        
$remail="<a href=mailto:$remail><img border=0 src=image/system/mail.gif></a>";        
}else{
$remail="<img border=0 src=image/system/n_mail.gif>";
}       
if($rmsn){        
$rmsn="<img border=0 src=image/system/msn.gif alt=msn���X�O�G$rmsn>";        
}else{
$rmsn="<img border=0 src=image/system/n_msn.gif>";
}          
if($rhome){        
$rhome="<a href=$rhome target='_new'><img border=0 src=image/system/home.gif alt=$rhomename></a>";        
}else{
$rhome="<img border=0 src=image/system/n_home.gif>";
}  
if($date==$id):
 ?>
  <tr>     
    <td width="66%" height="1"  colspan="2" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2"><font color="<?=$rsexual;?>">�d���̡G<?=$rname;?></font></td>          
    <td width="14%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2"><?=$rhome;?><?=$rmsn;?><?=$remail;?></font></td>        
  </tr>        
  <tr>        
    <td width="80%" height="50" colspan="3" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gc_skin;?>"><font size="2" color="<?=$rcolor;?>"><?=$rnote;?></font></td>      
  </tr>      
  <tr>      
    <td width="66%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"colspan="2"><font size="1" color="<?=$go_link;?>">�d������G<?=$rdate;?></font></td>      
    <td width="14%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="1" color="<?=$go_link;?>"><?=$rip;?></font></td>      
  </tr>
 <?
 endif;
 }
 ?>
      
</center>       
      
  <tr>      
    <td width="100%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="100%">
      <p align="right"><?=$rebutton;?></p>
    </td>      
  </tr>     
     
</table>
</form>
<center>       
    
<?        
endif;        
}        
}        
?>        
</center>        
<table width="100%>
<tr>
 <td aling="right">
<?    
echo "<FORM NAME=FORM><select name=site onChange='formHandler(this.form)'><option value='#'>����ܭ�����";
$a=$count%$gn;
$b=($count-$a)+$gn;
if($a==0){
$page=$count/$gn;
}else{
$page=$b/$gn;
}
$n=$number/$gn;
echo "<option selected>�{�b�b�� $n ��</option>";
for($number=1;$number!=$count;$number++){      
$pg=$number*$gn;       
if($pg>($count+$gn)){       
break;
}
echo "<option value='guest.php?number=$pg'>������� ".$number." ��</option>";
}
echo "</SELECT>
</FORM>";
?>
<table border="0" width="100%">
<tr>
  <td aling="center" width="100%"><font color="<?=$gc_link;?>" size="1"><center>
	<span lang="zh-tw">�s�q�d���O</span> v0.89 Powered by
	<a href="http://140.138.38.49" target='_new'>YZUradio</a></font> </td>
</tr>
</table>
</td></tr>
</table>
</body>       
</html>