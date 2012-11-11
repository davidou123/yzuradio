<?
session_start();
$fp=fopen('count.txt','r');
$count_old=fread($fp,6);
fclose($fp);

if(session_is_registered("cnt")!=1) {
  session_register("cnt");
  $count_old=$count_old+1;
  $fp=fopen('count.txt','w');
      if($count_old<10) $count_old="00000$count_old";
      elseif($count_old<100) $count_old="0000$count_old";
      elseif($count_old<1000) $count_old="000$count_old";
      elseif($count_old<10000) $count_old="00$count_old";
      elseif($count_old<100000) $count_old="0$count_old";
  fputs($fp,$count_old,strlen($count_old));
  fclose($fp);
}

for($ctn=1;$ctn<7;$ctn++) {
     $lum=mysql_query("select mid('$count_old','$ctn',1);");
     $data=mysql_fetch_row($lum);
     //echo "<img border=\"0\" src=\"$data[0].gif\"/>";   //¹Ï§Î¤Æ
	 echo "$data[0]"; 
}

?>
