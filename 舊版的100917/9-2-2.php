<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>發送電子郵件</title>
</head>
<body>

<?php 
//指定郵件所需的相關資料
mb_internal_encoding('UTF-8');
  $us1="davidou123@hotmail.com";
  $us2=" president@yzuradio.gov.tw";
  $subject1="總統府通緝特殊白癡人士郵件通知";
  $subject=mb_encode_mimeheader($subject1, 'UTF-8');
  $content="這是一份由中華民國台灣總統府自動寄發的電子郵件!!!告訴你，你被通緝了";
  
//指定SMTP相關參數
//seed.net.tw是作者環境中的郵件外送伺服器
  ini_set("SMTP","140.138.5.224");
  ini_set("sendmail_from",$us2);
  
//傳送郵件給收件者
  $success=mail($us1,$subject,$content);
  
//判定是否傳送成功
  if($success)
  {
  	echo "主旨 ".$subject1." 的郵件已經傳送成功!";
  }else{
  	echo "主旨 ".$subject1." 的郵件沒有傳送成功!";
  }
?>

</body>
</html>
