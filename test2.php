<?

 require_once("SQLconnection.php");
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  historyshow WHERE usrname='b1ncy'";   
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0) 
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
	$showdate	=$rows['showdate'];
	$showcontent=$rows['showcontent'];
	$showcon[$rows['showdate']]=$rows['showcontent'];
	 }
}
echo $showcon['2010-09-28'];
  mysql_free_result($result);

  ?>
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">