
<?php
$datetime = date ("Y_m_d H_i" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
	  if(file_exists("show/".$_POST['djname'].".txt"))
	  {echo "檔案存在"; 
	   echo "<br>";
	 @ rename("show/".$_POST['djname'].".txt","show/".$_POST['djname'].$datetime.".txt");
if (!$fp=fopen("show/".$_POST['djname'].".txt","w+")){
       echo "檔案無法開啟";
       exit;
}


	$len=fputs($fp,$_POST['T1']) ;
	$len=fputs($fp,"\r\n") ;
	$len=fputs($fp,$_POST['S1'] ) ;
	echo $_POST['djname']."存檔完成<br>" ;
fclose($fp) ;

}else{echo "不存在";};



?>
<html>
<head>
	<meta http-equiv="refresh" content="3; url=showwrite.htm">
</head>
<body>
</body>
</html>

