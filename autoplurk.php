<?php
header("Content-type: text/html; charset=utf-8"); 
date_default_timezone_set("Asia/Taipei");
$date=date("m/d");
 require_once("SQLconnection.php");
// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM  employee WHERE Djrole='onlineDJ' &&showdate='".date('Y-m-d')."'";   
$result = mysql_query($sql); // 執行SQL指令
if (mysql_num_rows($result) != 0) 
{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {

if($rows['showdate2']=="21-00"){  //如果9點有節目就存進去
$today['9']['nickname']=$rows['nickname'];
$today['9']['showname']=$rows['showname'];
}
elseif($rows['showdate2']=="22-00"){ //如果10點有節目就存進去
$today['10']['nickname']=$rows['nickname'];
$today['10']['showname']=$rows['showname'];
}
elseif($rows['showdate2']=="23-00"){ //如果11點有節目就存進去
$today['11']['nickname']=$rows['nickname'];
$today['11']['showname']=$rows['showname'];
}

	 }
}
  mysql_free_result($result);
if($today['9']['nickname']=="" &&$today['10']['nickname']=="" &&$today['11']['nickname']==""){
echo "今天".$date."沒節目";

}
else{

  $pp="http://元智之音.tw (今晚".$date."節目預告)：";
IF($today['9']['nickname']!="" && $today['9']['showname']!=""){
	$taday9= "9點".$today['9']['nickname']."的[".$today['9']['showname']."]";
	$pp=$pp.$taday9;
}
IF($today['10']['nickname']!="" && $today['10']['showname']!=""){
	$taday10=  "，10點".$today['10']['nickname']."的[".$today['10']['showname']."]";
	$pp=$pp.$taday10;

}
IF($today['11']['nickname']!="" && $today['11']['showname']!=""){
	$taday11=  "，11點".$today['11']['nickname']."的[".$today['11']['showname']."]";
	$pp=$pp.$taday11;
}
echo "今天撲浪內容<BR>".$pp;
$message=$pp;
	define('NICKNAME', 'yzuradio');
	define('PASSWORD', 'root 's password');
	define('USER_ID', '4798431');

	$reply ="本plurk為元智之音系統自動發送，歡迎大家收聽，晚上12點後會在自動重播一次。";


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');

	// login
	curl_setopt($ch, CURLOPT_URL, 'http://www.plurk.com/Users/login');
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'nick_name='.NICKNAME.'&password='.PASSWORD);
	curl_exec($ch);

	// post
	curl_setopt($ch, CURLOPT_URL, 'http://www.plurk.com/TimeLine/addPlurk');
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'qualifier=says&content='.urlencode($message).'&lang=tr_ch&no_comments=0&uid='.USER_ID);
	$response = curl_exec($ch);

	$pos_s = strpos($response, '"plurk_id": ') + 12;
	$plurk_id = substr($response, $pos_s, strpos($response, ',', $pos_s) - $pos_s);

	// reply
	curl_setopt($ch, CURLOPT_URL, 'http://www.plurk.com/Responses/add');
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'content='.urlencode($reply).'&lang=tr_ch&p_uid='.USER_ID."&plurk_id=$plurk_id&posted=".date('c').'&qualifier=says&uid='.USER_ID);
	curl_exec($ch);

	curl_close($ch);

	}




?>	