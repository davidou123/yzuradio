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
if($_POST['send']=="儲存設定"){ 
$css_save=trim($_POST['css']); 
$f=fopen("css.dat","w+"); 
fwrite($f,$css_save); 
fclose($f); 
echo "<center><font color='red' size='2'>您的設定已儲存完畢！</font>"; 
}else{ 
echo "<center><font color='red' size='2'>請進行編輯！</font>"; 
}
?>    
<? require("css.php");?>
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
<form action="css_edit.php?cookie=yes" method="post"> 
<table border="1" width="60%" style="border: 1 <?=$gf_type;?> <?=$gm_line;?>" bgcolor="<?=$go_skin;?>">    
  <tr>    
    <td width="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><font size="2" color="<?=$go_link;?>">請注意：CSS的編排記得要仔細檢查喔，要不然到時候留言版就會怪怪的喔！</font><br><center><font color="Red" size="2">本頁面不套用設定喔！</font></td>    
  </tr>    
  <tr>    
    <td width="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>"><textarea name="css" rows="12" cols="72"><?= $crs ;?></textarea></td>    
  </tr>    
  <tr>    
    <td width="100%" style="border: 1 <?=$gf_type;?> <?=$gi_line;?>">    
      <p align="center"><input type="Submit" name="send" value="儲存設定"></p>    
    </td>    
  </tr>    
</table>    
</form>   
</center>    
</body>    
    
</html> 