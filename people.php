<html>
<head>
<meta http-equiv="refresh" content="10; url=people.php">
</head>
<body>
<center>
<?
$time=gettimeofday(void);
$tmp=file("time.txt");
if ($tmp[0]=="")
{

  $fopen0=fopen("time.txt","w+");
  fputs($fopen0,$time[sec]);
  fclose($fopen0);

  $fopen1=fopen("ip.txt","w+");
  fputs($fopen1,"");
  fclose($fopen1);
}


$tmp1=file("time.txt");
$equal=($time[sec]-$tmp1[0]);
if ($equal>60)
{

  $fopen0=fopen("time.txt","w+");
  fputs($fopen0,"");
  fclose($fopen0); 
}

$fopen=fopen("ip.txt","a+");
$ip=$REMOTE_ADDR;

$flag=1;
$tmp2=file("ip.txt");
$con=count($tmp2);

for ($i=0;$i<$con;$i++)
{
  if ($ip."\n"==$tmp2[$i])
  {
    $flag=0;
    break;
  }
}

if ($flag==1)
{
  $ipstring=$ip."\n";
  fputs($fopen,$ipstring);
}
fclose($fopen);

$tmp3=file("ip.txt");
$value=count($tmp3);
echo "�ثe�u�W�H�ơG".$value;
?>
</center>
</body>
</html>