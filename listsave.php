<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="refresh" content="3; url=userlogin.php?frame=listwrite.php">
<title>元智之音學生廣播電台</title>

</head>

<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#2C2C2C">
<div align="center">
		
節目表存檔中...<p>
<?php
if (!$fp=fopen("show.txt","w")){
       echo "檔案無法開啟";
       exit;
}
//周一
	$len=fputs($fp,$_POST['text00'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text01'] );
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text02'] );
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text03'] );
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text04'] );
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text05'] );
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text06'] );
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text07'] );
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text08'] );
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text09'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text010'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text011'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text012'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text013'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text014'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text015'] ) ;
	$len=fputs($fp,'/') ;			
$len=fputs($fp,"\r\n") ;
//周二
	$len=fputs($fp,$_POST['text10'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text11'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text12'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text13'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text14'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text15'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text16'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text17'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text18'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text19'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text110'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text111'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text112'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text113'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text114'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text115'] ) ;
	$len=fputs($fp,'/') ;			
	$len=fputs($fp,"\r\n") ;	
//周三
	$len=fputs($fp,$_POST['text20'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text21'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text22'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text23'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text24'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text25'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text26'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text27'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text28'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text29'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text210'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text211'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text212'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text213'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text214'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text215'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,"\r\n") ;	
//周四
	$len=fputs($fp,$_POST['text30'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text31'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text32'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text33'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text34'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text35'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text36'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text37'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text38'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text39'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text310'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text311'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text312'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text313'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text314'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text315'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,"\r\n") ;		
//周五
	$len=fputs($fp,$_POST['text40'] ) ;
	$len=fputs($fp,'/') ;	
	$len=fputs($fp,$_POST['text41'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text42'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text43'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text44'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text45'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text46'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text47'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text48'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text49'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text410'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text411'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text412'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text413'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text414'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,$_POST['text415'] ) ;
	$len=fputs($fp,'/') ;
	$len=fputs($fp,"\r\n") ;
//本周時間
	$len=fputs($fp,$_POST['text51'] ) ;
	echo "存檔完成<br>" ;
fclose($fp) ;

?>
寫入成功，3秒後將會幫您轉回元智之音。



</body>

</html>


