<? ob_start(); ?>
<!-- �{���d�ҡGchatroom.php -->
<html>
<head>
</head>
<body bgcolor="#CCFF99">
<?
session_start();  // �}��Session
$chatfile = 'chatroom.txt';
if (isset($_POST["Clear"])) // �M���ϥΪ�
   session_unregister("user");
// �e�X�d��
if(isset($_POST["Message"]) && isset($_POST["Send"])) {
   if(isset($_POST["Sender"])) {
      session_register("user");  // ���USession�ܼ�
      $_SESSION["user"] = $_POST["Sender"];
   }
   $msgs = "<b>".$_SESSION["user"]."</b>:";
   $msgs .= stripslashes($_POST["Message"])."<br>\n";
   $fdatas = file($chatfile);
   $file = fopen($chatfile,'w');
   fputs($file, $msgs);  // �g�J�T��
   $i=1;
   while (list($linenum, $line) = each($fdatas)) {
      fputs($file, $line);
      $i += 1;
      if ($i >10) break;  // �u�g�J10��
   }
   fclose($file);
}
?>
<form method="post" action="chatform.php">
<table border="0">
<? if (!session_is_registered("user")) { ?>
<tr><td>�ϥΪ̦W�� : </td>
<td><input type="text" name="Sender" size="20"></td></tr>
<tr><td>��ѰT��: </td><td>
<? } else { ?>
<tr><td><? echo $_SESSION["user"] ?>: </td><td>
<? } ?>
<input type="text" size="50" name="Message" value=""></td>
</tr></table>
<input type="submit" name="Send" value="�e�X�T��">
<? if (session_is_registered("user")) { ?>
<input type="submit" name="Clear" value="�n�X�ϥΪ�">
<? } ?>
</form>
</body>
</html>