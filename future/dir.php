<?php
if($_POST["dir"]=="")
{
$_POST["dir"]="d:hisshow/b1ncy";
}
if ($handle = opendir($_POST["dir"])) {
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
        echo  $_POST["dir"]." / $file <BR>";
		$rr[]=$file;
    }



    closedir($handle);
}
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>新增網頁1</title>
</head>

<body>
<hr>
請輸入資料夾目錄
<form method="POST" action="dir.php">

	<p><input type="text" name="dir" size="20" value="<?echo $_POST["dir"];?>"><input type="submit" value="送出" name="B1"></p>
</form>
<hr>
<? 
foreach($rr as $key=>$value)
{
if($key>1)
{
echo $key;
echo "<BR>";
$msg=$value;

echo $msg."<bR>";
$day= substr($msg,-13,2);
$month= substr($msg,-16,2);
$year= substr($msg,-21,4);
$show=substr($msg,6);  //從[節目]往後取 中文雙字元
$show=substr($show,0,-21);
echo $day."日";
echo $month."月";
echo $year."年";
echo $show."<hR>";


}
}
?>

</body>

</html>
