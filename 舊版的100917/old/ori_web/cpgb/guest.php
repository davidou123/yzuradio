<?
if($_GET['cookie_clear']=="yes")
{
setcookie("user_passwd");
}
?>
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
<td aling="left"><? require("count.php");?></td>
<center>
 <tr><td>
      <font size="2" color="<?=$gu_link;?>">│</font><a href="submit.php"><font size="2" color="<?=$gu_link;?>">我要留言</font></a><font size="2" color="<?=$gu_link;?>">│</font>

      <a href="login.php"><font size="2" color="<?=$gu_link;?>">站長管理</a>│</font>
      <a href="mailto:<?=$gmail;?>"?>><font size="2" color="<?=$gu_link;?>">告訴<?= $guser ;?></a>│</font>
      <a href="<?=$ghome ;?>"><font size="2" color="<?=$gu_link;?>">回到首頁</a>│</font>

</center></tr></td>
<center><?echo $gup ;?>
<table width="100%"><tr><td width="184"><font color="<?=$go_link;?>" size="2">共有</font><font color="red" size="2"><? echo $count;?></font><font color="<?=$go_link;?>" size="2">筆留言</font><td align="center" ><font color="<?=$go_link;?>" size="2">每頁顯示</font><font color="Red" size="2"><? echo $gn;?></font><font color="<?=$go_link;?>" size="2">筆</font><td align="right" ><?
if($close_html=="0"){
      echo "<font color=$go_link size=2> HTML語法</font><font color=red size=2>開啟</font> ";
}else{
      echo "<font color=$go_link size=2> HTML語法</font><font color=red size=2>關閉</font> ";
}
?> </tr></table>        
<?        
for($a=($count-1);$a>=0;$a--){        
$line[]=$lines[$a];        
}        
for($i=0;$i<$count;$i++){        
if($i>=($number-$per)&&$i<$number){        
list($name,$submit,$email,$color,$sexual,$ip,$R2,$msn,$home,$homename,$R1,$date,$hidden,$note)=explode("∥",$line[$i]);        
$fun=$count-$i;
if($gip==0)
{
if(ereg(".",$ip)){
 $ip="IP已設定隱藏";
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
$note="<center><font color=Red size=2>這是給".$guser."的悄悄話！</font>";        
}        
if($R2==yes){        
$rebutton="";        
}else{        
$rebutton="<input type=Submit value=回覆留言>";        
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
if($note):        
?></center>        
<center>        
<form action="resubmit.php?id=<?=$fun;?>" method="post">
<table border="1" width="<?=$gwidth;?>" style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>"> 
<tr>           
    <td width="100%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"  colspan="4"><font size="2" color="<?=$gu_link;?>"><b>主題：<?=$submit;?></b></font></td>         
  </tr>       
       
  <tr>         
    <td width="20%" height="1" rowspan="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><center><img border=0 src="<?=$R1;?>" alt="<?=$date;?>"><br><font size="1" color="<?=$go_link;?>">第<?=$fun;?>筆留言</font></center></td>    
    <td width="66%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"  colspan="2"><font size="2" color="<?=$sexual;?>">留言者：<?=$name;?></font></td>        
    <td width="14%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" ><font size="2"><?=$home;?><?=$msn;?><?=$email;?></font></td>          
  </tr>   
    <td width="80%" height="50" colspan="3"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gm_skin;?>"><font size="2" color="<?=$color;?>"><?=$note;?></font></td>       
  </tr>       

  <tr>       
    <td width="66%" height="1"  style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" colspan="2"><font size="1" color="<?=$go_link;?>">留言日期：<?=$date;?></font></td>       
    <td width="14%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="1" color="<?=$go_link;?>"><?=$ip;?></font></td>
 <? 
 for($ra=0;$ra<=($rcount-1);$ra++){        
$rline[]=$rlines[$ra];        
}        
for($ri=0;$ri<$rcount;$ri++){               
list($rname,$remail,$rcolor,$rsexual,$rip,$rmsn,$rhome,$rhomename,$rdate,$id,$rnote)=explode("∥",$rline[$ri]);
if($gip==0){
if(ereg(".",$rip)){
 $rip="IP已設定隱藏";
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
$rmsn="<img border=0 src=image/system/msn.gif alt=msn號碼是：$rmsn>";        
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
    <td width="66%" height="1"  colspan="2" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2"><font color="<?=$rsexual;?>">留言者：<?=$rname;?></font></td>          
    <td width="14%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2"><?=$rhome;?><?=$rmsn;?><?=$remail;?></font></td>        
  </tr>        
  <tr>        
    <td width="80%" height="50" colspan="3" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>" bgcolor="<?=$gc_skin;?>"><font size="2" color="<?=$rcolor;?>"><?=$rnote;?></font></td>      
  </tr>      
  <tr>      
    <td width="66%" height="1" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"colspan="2"><font size="1" color="<?=$go_link;?>">留言日期：<?=$rdate;?></font></td>      
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
echo "<option value='guest.php?number=$pg'>跳到→第 ".$number." 頁</option>";
}
echo "</SELECT>
</FORM>";
?>
<table border="0" width="100%">
<tr>
  <td aling="center" width="100%"><font color="<?=$gc_link;?>" size="1"><center>
	<span lang="zh-tw">廣電留言板</span> v0.89 Powered by
	<a href="http://140.138.38.49" target='_new'>YZUradio</a></font> </td>
</tr>
</table>
</td></tr>
</table>
</body>       
</html>