<?php
	define('NICKNAME', 'yzuradio');
	define('PASSWORD', 'root 's password');
	define('USER_ID', '4798431');

	$message = $_POST['plurk'];
	$reply = $_POST['plurk0'];

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
	echo $PASSWORD;
?>
<html>
<head>
<meta http-equiv="refresh" content="3; url=userlogin.php?frame=plurk.php">
</head>
<body>
發送成功，將會您跳轉回。 :)