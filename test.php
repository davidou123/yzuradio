<?php

if ($uploadedfile<>"none" &&$_POST["uploadphoto"]=="uploadphoto") {
 if (!copy($uploadedfile, "is it.jpg")) {
    echo "<font face='arial' size='2'> $name 檔案上傳失敗 ,也可能是檔案太大 請使用 back 按鍵再試一次";
 } else {
    echo "<font face='arial' size='2'>檔案上傳成功 ! 檔案型態：$uploadedfile_type ";
    echo "檔案大小：";
    printf("%.2f",$uploadedfile_size/1024);
    echo "  KB <BR>";
 }
}
?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>我的節目資訊</title>

</head>

<body>
<form method="post" enctype="multipart/form-data" action ="test.php">
<BR>
<INPUT TYPE="hidden" NAME="uploadphoto" VALUE="uploadphoto">
<input type = "file" name="uploadedfile" size="30">
<input type = "hidden" name = "max_file_size" value="400000">
<input type = "submit" value = "上傳檔案">
</form>

</body>

</html>