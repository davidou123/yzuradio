<? header("Refresh:5;url=showchatmsgs.php"); ?>
<!-- �{���d�ҡGshowchatmsgs.php -->
<html>
<body bgcolor="#FFCC99">
<center><font color="red">��ѰT��</font></center><hr>
<small>
<?
$chatfile = "chatroom.txt";
if (!file_exists($chatfile)) {
   $file = fopen($chatfile, "w"); // �إ��ɮ�
   fclose($file);
} else {  // ��ܩҦ����T��
   readfile($chatfile);
}
?>
</small>
</body>
</html> 