<? ob_start(); ?>
<!-- 程式範例：chatroom.php -->
<html>
<head>
</head>
<body bgcolor="#CCFF99">
<?
session_start();  // 開啟Session
$chatfile = 'chatroom.txt';
if (isset($_POST["Clear"])) // 清除使用者
   session_unregister("user");
// 送出留言
if(isset($_POST["Message"]) && isset($_POST["Send"])) {
   if(isset($_POST["Sender"])) {
      session_register("user");  // 註冊Session變數
      $_SESSION["user"] = $_POST["Sender"];
   }
   $msgs = "<b>".$_SESSION["user"]."</b>:";
   $msgs .= stripslashes($_POST["Message"])."<br>\n";
   $fdatas = file($chatfile);
   $file = fopen($chatfile,'w');
   fputs($file, $msgs);  // 寫入訊息
   $i=1;
   while (list($linenum, $line) = each($fdatas)) {
      fputs($file, $line);
      $i += 1;
      if ($i >10) break;  // 只寫入10行
   }
   fclose($file);
}
?>
<form method="post" action="chatform.php">
<table border="0">
<? if (!session_is_registered("user")) { ?>
<tr><td>使用者名稱 : </td>
<td><input type="text" name="Sender" size="20"></td></tr>
<tr><td>聊天訊息: </td><td>
<? } else { ?>
<tr><td><? echo $_SESSION["user"] ?>: </td><td>
<? } ?>
<input type="text" size="50" name="Message" value=""></td>
</tr></table>
<input type="submit" name="Send" value="送出訊息">
<? if (session_is_registered("user")) { ?>
<input type="submit" name="Clear" value="登出使用者">
<? } ?>
</form>
</body>
</html>