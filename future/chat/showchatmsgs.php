<? header("Refresh:5;url=showchatmsgs.php"); ?>
<!-- 程式範例：showchatmsgs.php -->
<html>
<body bgcolor="#FFCC99">
<center><font color="red">聊天訊息</font></center><hr>
<small>
<?
$chatfile = "chatroom.txt";
if (!file_exists($chatfile)) {
   $file = fopen($chatfile, "w"); // 建立檔案
   fclose($file);
} else {  // 顯示所有的訊息
   readfile($chatfile);
}
?>
</small>
</body>
</html> 