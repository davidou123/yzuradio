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
<? require("check.php") ;?>
<center>
<html>
<?$gname=stripslashes($gname);?>
<?$gup=stripslashes($gup);?>
<?$guser=stripslashes($guser);?>
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
$close_html=$ghtml; //語法部分        
$per=$gn; //每頁顯示        
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
list($name,$submit,$email,$color,$sexual,$ip,$R2,$msn,$home,$homename,$R1,$date,$hidden,$note)=explode("∥",$line[$i]);        
$fun=$count-$i;        
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
if($msn){        
$msn="<img border=0 src=image/system/msn.gif alt=msn號碼是：$msn>";        
}else{
$msn="<img border=0 src=image/system/n_msn.gif>";
}
if($home){        
$home="<a href=$home target='_new'><img border=0 src=image/system/home.gif alt=$homename></a>";        
}else{
$home="<img border=0 src=image/system/n_home.gif>";
}   
if($R2=="yes"){      
if($note):        
?></center>        
<center>        
<form action="resubmit.php?id=<?=$fun;?>" method="post">
<table border="1" width="<?=$gwidth;?>"  style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>"> 
<tr>           
    <td width="100%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"  colspan="4"><font size="2" color="<?=$gu_link;?>"><b>主題：<?=$submit;?></b></font></td>         
  </tr>       
       
  <tr>         
    <td width="20%" height="1" rowspan="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><center><img border=0 src="<?=$R1;?>" alt="<?=$date;?>"><br><font size="1" color="<?=$go_link;?>">第<?=$fun;?>筆留言</font></center></td>    

    <td width="62%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"  colspan="2"><font size="2" color="<?=$sexual;?>">留言者：<?=$name;?></font></td>        
    <td width="18%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" ><font size="2"><?=$home;?><?=$msn;?><?=$email;?></font></td>          
  </tr>   
    <td width="84%" height="50" colspan="3"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gm_skin;?>"><font size="2" color="<?=$color;?>"><?=$note;?></font></td>       
  </tr>       

  <tr>       
    <td width="62%" height="1"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="2"><font size="1" color="<?=$go_link;?>">留言日期：<?=$date;?></font></td>       
    <td width="18%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="1" color="<?=$go_link;?>"><?=$ip;?></font></td>
 <? 
 for($ra=0;$ra<=($rcount-1);$ra++){      
$rline[]=$rlines[$ra];        
}        
for($ri=0;$ri<$rcount;$ri++){               
list($rname,$remail,$rcolor,$rsexual,$rip,$rmsn,$rhome,$rhomename,$rdate,$id,$rnote)=explode("∥",$rline[$ri]);
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
$remail="　";
}       
if($rmsn){        
$rmsn="<img border=0 src=image/system/msn.gif alt=msn號碼是：$rmsn>";        
}        
if($rhome){        
$rhome="<a href=$rhome target='_new'><img border=0 src=image/system/home.gif alt=$rhomename></a>";        
}
if($date==$id):
 ?>
  <tr>     
    <td width="26%" height="1"  colspan="2" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2"><font color="<?=$rsexual;?>"><?=$rname;?></font></td>          
    <td width="18%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2"><?=$rhome;?><?=$rmsn;?><?=$remail;?></font></td>        
  </tr>        
  <tr>        
    <td width="84%" height="50" colspan="3" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gc_skin;?>"><font size="2" color="<?=$rcolor;?>"><?=$rnote;?></font></td>      
  </tr>      
  <tr>      
    <td width="66%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"colspan="2"><font size="1" color="<?=$go_link;?>">留言日期：<?=$rdate;?></font></td>      
    <td width="18%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="1" color="<?=$go_link;?>"><?=$rip;?></font></td>      
  </tr>
 <?
 endif;
 }
 ?>
      
</center>       
      
  <tr>      
    <td width="100%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="100%">
      <p align="right"><input type="Submit" value="回覆留言"></p>
    </td>      
  </tr>     
     
</table>
</form>
<center>       
    
<?        
endif;
}        
}        
}        
?>        
</center>        
<table width="100%>
<tr>
 <td aling="right">
<?    
echo "<FORM NAME=FORM><select name=site onChange='formHandler(this.form)'><option value='#'>●選擇頁次○";
$a=$count%$gn;
$b=($count-$a)+$gn;
if($a==0){
$page=$count/$gn;
}else{
$page=$b/$gn;
}
$n=$number/$gn;
echo "<option selected>現在在第 $n 頁</option>";
for($number=1;$number!=$count;$number++){      
$pg=$number*$gn;       
if($pg>($count+$gn)){       
break;
}
echo "<option value='look.php?number=$pg&cookie=yes'>跳到→第 ".$number." 頁</option>";
}
echo "</SELECT>
</FORM>";
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