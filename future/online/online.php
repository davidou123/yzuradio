<?php 
/********************************************************************************/

/*MI-2�M�H�� http://liangmi2.24cc.com										*/
/* ---------------------------------------------------				*/
/* -                �եΥN�X	                     -				*/
/* -    usage: <script src="online.php"></script>    -				*/
/* ---------------------------------------------------				*/
          
/* ---------------------------------------------------				*/
/********************************************************************************/

$filename="online.txt"; 
$onlinetime=60; //�P�@IP�b�u�ɶ��A���G��  �Τ�i�ۦ�վ�
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
        // echo  "�b�u�H��:".$total_online;//��ܦb�u�� 
        $total_online=$total_online;
         echo"document.write(\"�b�u�H��:".$total_online."\");";
?> 

