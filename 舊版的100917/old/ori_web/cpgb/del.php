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
<?
if($n==$n && $m==$m){
 require("check.php");
}
?>
<center>
<?
if($_POST['id']==""){
echo"<font color=Blue size=2><center>�ЧR���D�d��</font>";
}else{
$del_id=delete($_POST['id']);
echo"<font color=Blue size=2><center>�D�d���R�����\�I</font>";
}
?>

<?function delete($del_id){
        $del_file = "guest.dat";

        $del_files = file($del_file);
        $del_count = count($del_files);
        for($i = 0; $i < $del_count; $i++){
                if($i != $del_id){
                        $del_filez[] = $del_files[$i];
                }
        }
        if($del_open = fopen($del_file, "w+")){
                $fop_count = count($del_filez);
                for($i = 0; $i < $fop_count; $i++){
                        $new_file = $del_filez[$i];
                        fputs($del_open, $new_file);

                }

        } else {
                echo "<center><font color=Green size=2>�L�k�R���ɮסI</font>";
                exit;
        }
}
?><?
if($_POST['r_id']==""){
echo"<font color=Blue size=2><center>�ЧR���^�Яd��</font>";
}else{
$rdel_id=rdelete($_POST['r_id']);
echo"<font color=Blue size=2><center>�^�Яd���R�����\�I</font>";
}
?>

<?function rdelete($rdel_id){
        $rdel_file = "re.dat";

        $rdel_files = file($rdel_file);
        $rdel_count = count($rdel_files);
        for($ri = 0; $ri < $rdel_count; $ri++){
                if($ri != $rdel_id){
                        $rdel_filez[] = $rdel_files[$ri];
                }
        }
        if($rdel_open = fopen($rdel_file, "w+")){
                $rfop_count = count($rdel_filez);
                for($ri = 0; $ri < $rfop_count; $ri++){
                        $rnew_file = $rdel_filez[$ri];
                        fputs($rdel_open, $rnew_file);

                }

        } else {
                echo "<center><font color=Green size=2>�L�k�R���ɮסI</font>";
                exit;
        }
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
<?$gname=stripslashes($gname);?>      
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

<?$gup=stripslashes($gup);?>

<center>
       
<?        
for($a=($count-1);$a>=0;$a--){        
$line[]=$lines[$a];        
}        
for($i=0;$i<$count;$i++){        
if($i>=($number-$per)&&$i<$number){        
list($name,$submit,$email,$color,$sexual,$ip,$R2,$msn,$home,$homename,$R1,$date,$hidden,$note)=explode("��",$line[$i]);        
$fun=$count-$i;
$id=$fun-1;        
if($close_html==1)
{ 
$note=eregi_replace("<br>","\n",$note);
$note=nl2br(htmlspecialchars($note)); 
$name=htmlspecialchars($name);    
$submit=htmlspecialchars($submit);   
$email=htmlspecialchars($email); 
$home=htmlspecialchars($home);        
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
$email="<img src=image/system/n_mail.gif>";
}     
if($R2==yes){        
$rebutton="";        
}else{        
$rebutton="<input type=submit name=report value=�^�Яd��>";        
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
<form action="del.php?cookie=yes" method="post">
<table border="1" width="<?=$gwidth;?>"  style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>"> 
<tr>           
    <td width="100%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"  colspan="4"><font size="2" color="<?=$gu_link;?>"><b>�D�D�G<?=$submit;?></b></font></td>         
  </tr>       
       
  <tr>         
    <td width="20%" height="1" rowspan="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><center><img border=0 src="<?=$R1;?>" alt="<?=$date;?>"><br><font size="1" color="<?=$go_link;?>">��<?=$fun;?>���d��</font></center></td>    

    <td width="62%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"  colspan="2"><font size="2" color="<?=$sexual;?>">�d���̡G<?=$name;?></font></td>        
    <td width="18%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" ><font size="2"><?=$home;?><?=$msn;?><?=$email;?></font></td>          
  </tr>   
    <td width="84%" height="50" colspan="3"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gm_skin;?>"><font size="2" color="<?=$color;?>"><?=$note;?></font></td>       
  </tr>       

  <tr>       
    <td width="62%" height="1"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="2"><font size="1" color="<?=$go_link;?>">�d������G<?=$date;?></font></td>       
    <td width="18%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="1" color="<?=$go_link;?>"><?=$ip;?></font></td>
 <? 
 for($ra=($rcount-1);$ra>=0;$ra--){        
$rline[]=$rlines[$ra];        
}        
for($ri=$rcount;$ri>=0;$ri--){               
list($rname,$remail,$rcolor,$rsexual,$rip,$rmsn,$rhome,$rhomename,$rdate,$rid,$rnote)=explode("��",$rline[$ri]);
$rfun=$rcount-1-$ri;
if(eregi("-",$rfun)){
  continue;
}else{
  $r_id=$rfun;
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
$rsubmit=stripslashes($rsubmit);        
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
if($date==$rid):
 ?>
  <tr>     
    <td width="26%" height="1"  colspan="2" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2"><font color="<?=$rsexual;?>">�d���̡G<?=$rname;?></font></td>          
    <td width="18%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2"><?=$rhome;?><?=$rmsn;?><?=$remail;?></font></td>        
  </tr>        
  <tr>        
    <td width="84%" height="50" colspan="3" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gc_skin;?>"><font size="2" color="<?=$rcolor;?>"><?=$rnote;?></font></td>      
  </tr>        <tr>      
    <td width="100%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="100%">
      <p align="center"><form action="del.php?cookie=yes" method="post"><input type="hidden" name="r_id" value="<?=$r_id;?>"><input type="Submit" value="�R���^�Яd��" OnClick="alert('�A�n�R�� �D�D�G<?=$submit;?> ���^�Яd���F��~�R�����ܴN�ݳ̫�@���a�I')"></form></p>
    </td>      
  </tr>
  <tr>      
    <td width="66%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"colspan="2"><font size="1" color="<?=$go_link;?>">�d������G<?=$rdate;?></font></td>      
    <td width="18%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="1" color="<?=$go_link;?>"><?=$rip;?></font></td>      
  </tr>
 <?
 endif;
 }
 ?>
      
</center>       
      
  <tr>      
    <td width="100%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="100%">
      <p align="right"><input type="hidden" name="id" value="<?=$id;?>"><input type="Submit" value="�R����g�d��" OnClick="alert('�R���D�d���e�A���ˬd�ۤv���^�Яd�����S���M�ų�I')"></p>
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
echo "<FORM NAME=FORM>
<select name=site onChange='formHandler(this.form)'><option value='#'>����ܭ�����";
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
echo "<option value='del.php?number=$pg&cookie=yes'>������� ".$number." ��</option>";
}
echo "</SELECT></FORM>";
?>
<table border="0" width="100%">
<tr>
  <td aling="center" width="100%"><font color="<?=$gc_link;?>" size="1"><center>C.P.Gb v0.89 Powered by <a href="http://cooltey.mytw.net" target='_new'>Cooltey</a></font> </td>
</tr>
</table>
</td></tr>
</table>
</body>       
</html>