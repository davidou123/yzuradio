<?php 
/********************************************************************************/

/*MI-2烘焙雞 http://liangmi2.24cc.com										*/
/* ---------------------------------------------------				*/
/* -                調用代碼	                     -				*/
/* -    usage: <script src="online.php"></script>    -				*/
/* ---------------------------------------------------				*/
          
/* ---------------------------------------------------				*/
/********************************************************************************/

$filename="online.txt"; 
$onlinetime=60; //同一IP在線時間，單位：秒  用戶可自行調整
$online_id=file($filename); 
$total_online=count($online_id); 
$ip=getenv("REMOTE_ADDR");
$nowtime=time(); 
  for($i=0;$i<$total_online;$i++){ 
         $oldip=explode("||",$online_id[$i]); 
         $hasonlinetime=$nowtime-$oldip[0]; 
  if($hasonlinetime<$onlinetime and $ip!=$oldip[1]) $nowonline[]=$online_id[$i]; 
                                  } 
         $nowonline[]=$nowtime."||".$ip."||"; 
         $total_online=count($nowonline); 
         $fp=fopen($filename,"w"); 
         rewind($fp); 
         for($i=0;$i<$total_online;$i++){ 
         fputs($fp,$nowonline[$i]); 
         fputs($fp,"\n"); 
                                 } 
  fclose($fp); 
      if($total_online==0)$total_online=1; 
        // echo  "在線人數:".$total_online;//顯示在線數 
        $total_online=$total_online;
         echo"document.write(\"在線人數:".$total_online."\");";
?> 

