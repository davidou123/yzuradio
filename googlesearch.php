<?php
 $url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&"
    . "q=davidou&key=ABQIAAAA1OQ5vG9u4olaQnHXB3iBshQspPZNwLKdgORntdONMIGi2hgm_hQAASrH5dhTMmoCsjL5uNLF9bXzkQ&userip=140.138.5.228";
 
// sendRequest
// note how referer is set manually
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, "http://140.138.5.228");
$body = curl_exec($ch);
curl_close($ch);
 
// now, process the JSON string
$json = json_decode($body);
// now have some fun with the results...
 $obj= json_encode($json);
ECHO $obj->responseData;
//echo eval($obj );
 ?>