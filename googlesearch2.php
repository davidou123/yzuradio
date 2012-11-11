<?

function google_search_api($args, $referer = 'http://www.yahoo.com.tw/', $endpoint = 'web'){
    $url = "http://ajax.googleapis.com/ajax/services/search/".$endpoint;
    if ( !array_key_exists('v', $args) )
        $args['v'] = '1.0';
    $url .= '?'.http_build_query($args, '', '&');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    $body = curl_exec($ch);
    curl_close($ch);
    return json_decode($body);
}
 
// 使用示例
$rez = google_search_api(array(
    'q' => '班西', // 查詢內容
    'key' => 'ABQIAAAA1OQ5vG9u4olaQnHXB3iBshQspPZNwLKdgORntdONMIGi2hgm_hQAASrH5dhTMmoCsjL5uNLF9bXzkQ',
    'userip' => '140.138.5.228',
	'hl'=>'zh-TW',
 ));


$aa= $rez->responseData->results;

for($i=0;$i<4;$i++)
{
	$aa[$i]->title= str_replace("<b>", "",$aa[$i]->title);  
	$aa[$i]->title= str_replace("</b>", "",$aa[$i]->title);  	
echo"\r\n";
echo $aa[$i]->url ." (".$aa[$i]->title.")";
echo"<br>";
}


?>
<Html>
<head>
</head>
<body>
</body>