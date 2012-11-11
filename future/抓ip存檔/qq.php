<?php

        $headers = apache_request_headers();
        if (array_key_exists('X-Forwarded-For', $headers)) {
                $hostname = $headers['X-Forwarded-For'];
        } else {
                $hostname = $_SERVER['REMOTE_ADDR'];
        }

echo $hostname ;
echo"<hr>";
                if (getenv("HTTP_CLIENT_IP"))
                $ip = getenv("HTTP_CLIENT_IP");
                else if(getenv("HTTP_X_FORWARDED_FOR"))
                $ip = getenv("HTTP_X_FORWARDED_FOR");
                else if(getenv("REMOTE_ADDR"))
                $ip = getenv("REMOTE_ADDR");
                else $ip = "Unknow";
echo$ip;


$fa=fopen("1.txt","a"); 
fwrite($fa,"$ip");
fwrite($fa,"\r\n");
fclose($fa);


?>