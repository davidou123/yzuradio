<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>元智之音學生廣播電台</title>
<script type="text/javascript"> 
      function send()
      {
        if (document.myForm.plurk.value.length == 0)
          alert("噗的內容不可以空白哦！");
        else
          myForm.submit();
      }
    </script> 
</head>

<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#2C2C2C">
<div align="center">


<p align="center"><b><font size="7">元智之音線上噗浪</font> </b>
</p>
<form method="POST" action="plurksend.php" name="myForm">
	<p align="center">我要噗的內容是:<input type="text" name="plurk" size="60"></p>
	<p align="center">回噗<input type="text" name="plurk0" size="20"></p>
	<p align="center"><input type="button" value="送出" name="B1" onClick="send()"><input type="reset" value="重新設定" name="B2"></p>
</form>&nbsp;<p>使用說明:不需要輸入帳密，即可透過radio帳號噗浪出去</p>
<p>回噗的意思就是在你發的噗上面在回覆一次訊息
	

</body>

</html>