<?
require_once("SQLconnection.php");
if($content){//存檔區------
  date_default_timezone_set('Asia/Taipei');
   $postdate	=date ("m/d H:i:s"); 
   $content		=$_POST["content"];

       // 建立SQL字串
         $sql="INSERT INTO djguestbook(usrname,postdate,content)".
           " VALUES('".$_SESSION["nickname"]."','".$postdate."','".$content."')";
	  // 建立MySQL資料庫連結
    $link = create_connection();
      mysql_query($sql);}
//存檔區end------

//如果超過筆數 將刪除最舊的
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT id FROM djguestbook";
$result = mysql_query($sql); // 執行SQL指令
if (mysql_num_rows($result) != 0){
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
if($idmin==""){
$idmin=$rows["id"];
$idMAX=$rows["id"];}
if($idmin>$rows["id"]){  //找出最小值
$idmin=$rows["id"];}
if($idMAX<$rows["id"]){   //找出最大值
$idMAX=$rows["id"];}
     }}
$rownumber=$idMAX-$idmin;
if($rownumber>25){ //超過比數刪除最小id值
//刪除區----
      // 建立SQL字串
	  $sql = "DELETE FROM djguestbook where id='".$idmin."' LIMIT 1";
// 建立MySQL資料庫連結
    $link = create_connection();
      // 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
//刪除區----	
}
 mysql_free_result($result);
 //如果超過筆數 將刪除最舊的
?>
<div align="center">
<img border="0" src="images/djtalk.png" width="650" height="27">
<br>
想跟各DJ聊聊天嗎，這邊都可以隨意聊天大家討論討論喔。:)
	<form method="POST" action="userlogin.php?frame=adminfirst.php">


<table border="0"  cellspacing="0" cellpadding="0"  ><tr>
<td>
<?php echo $_SESSION["nickname"]; ?>說:
</td>
<td background="images/talkbg.jpg" height="63" width="491">　
<textarea rows="2" name="content" cols="48"   style="border:0;background:transparent;"></textarea>
<input type="submit" value="送出" name="submit">
</td></tr>
</table>


</form>
<br>
<table border="0" width="80%" cellspacing="0" cellpadding="0">
<?php
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  djguestbook ORDER BY id DESC";
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0)
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
  $i++;
  $i%2==0 ? $color="#006600" : $color="#000099";
	 echo"<tr><td width='20%' valign='top'><B>".$rows["usrname"]."</b> 說:</td><td width='50%'><font color=".$color." size='2'>"
	 .nl2br($rows["content"])."</font></td><td valign='top'><font size='2' color='#808080'>".$rows["postdate"]."</td></tr>";
 
     }
}
  mysql_free_result($result);
  ?>
  </table>
  </div>