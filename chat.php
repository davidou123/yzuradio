<?php
date_default_timezone_set( "Asia/Taipei" );
/****************************************
*	Mini AJAX Chatroom By Longbill
*	   http://www.longbill.cn
*	 Longbill all rights reserved
*	         2008-03-26
****************************************/
//****************參數設置****************
//顯示在線用戶
$disonline = true;
//新登陸時顯示最近內容的條數(默認為30條)
$leastnum = 100;
//默認的房間名(默認是每天換一個文件)，如果去掉d，則是每月換一個文件
$room = date("Y-m");   //$room = date("Y-m-d");
//房間保存路徑,必須以/結尾
$roomdir = "chat/";
//編碼方式
$charset = "UTF-8"; 
//客戶端最大顯示內容條數(建議不要太大)
$maxdisplay = 300;


//語言
$lang = array(

//第一個到聊天室的歡迎
"firstone"=>"<b>歡迎來陪瑞迪歐聊天拉</b>", 
//當信息有禁止內容時顯示
"ban"=>"I am a pig!",
//發言提示
"hereyourwords" => "在這裡發言!"
);

//header("content-type:text/html; charset=utf-8");

$get_past_sec = 3; //如果發現丟話，可以適當調大這個值
$touchs = 10; //檢查在線人數的時間間隔
$earlier = 10;

$origroom = $room;
$least = ($_GET["dis"])?intval($_GET["dis"]):$leastnum;
$touchme = $_POST['touchme'];
if (!is_dir($roomdir)) @mkdir($roomdir) or die("error when creating folder $roomdir");
$room = $_GET['room'];
if (!$room) $room = $_POST["room"];
$room = checkfilename($room);
if (!$room) $room = $origroom;
$filename = $roomdir.$room.".dat.php";
$datafile = $roomdir.$room.".php";
if (!file_exists($filename)) @file_put_contents($filename,'<?php die();?>'."\n".time()."|".$lang["firstone"]."\n");
if (!file_exists($datafile)) @file_put_contents($datafile,'<?php die();?>'."\n");
$action = $_POST["action"];

if (!function_exists("file_get_contents"))
{
	function file_get_contents($path)
	{
		if (!file_exists($path)) return false;
		$fp=@fopen($path,"r");
		$all=fread($fp,filesize($path));
		fclose($fp);
		return $all;
	}
}

if (!function_exists("file_put_contents"))
{
	function file_put_contents($path,$val)
	{
		$fp=@fopen($path,"w");
		fputs($fp,$val);
		fclose($fp);
		return true;
	}
}

function checkfilename($file)
{
	if (!$file) return "";
	$file = trim($file);
	$a = substr($file,-1);
	$file = eregi_replace("^[.\\\/]*","",$file);
	$file = eregi_replace("[.\\\/]*$","",$file);
	$arr = array("../","./","/","\\","..\\",".\\");
	$file = str_replace($arr,"",$file);
	return $file;
}

function get_ip()
{
	global $_SERVER;
	if ($_SERVER)
	{
		if ( $_SERVER[HTTP_X_FORWARDED_FOR] )
			$realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		else if ( $_SERVER["HTTP_CLIENT_ip"] )
			$realip = $_SERVER["HTTP_CLIENT_ip"];
		else
			$realip = $_SERVER["REMOTE_ADDR"];
	}
	else
	{
		if ( getenv( 'HTTP_X_FORWARDED_FOR' ) )
			$realip = getenv( 'HTTP_X_FORWARDED_FOR' );
		else if ( getenv( 'HTTP_CLIENT_ip' ) ) 
			$realip = getenv( 'HTTP_CLIENT_ip' );
		else
			$realip = getenv( 'REMOTE_ADDR' );
	}
	return $realip;
}

function array2json($arr)
{
	$keys = array_keys($arr);
	$isarr = true;
	$json = "";
	for($i=0;$i<count($keys);$i++)
	{
		if ($keys[$i] !== $i)
		{
			$isarr = false;
			break;
		}
	}
	$json = $space;
	$json.= ($isarr)?"[":"{";
	for($i=0;$i<count($keys);$i++)
	{
		if ($i!=0) $json.= ",";
		$item = $arr[$keys[$i]];
		$json.=($isarr)?"":$keys[$i].':';
		if (is_array($item))
			$json.=array2json($item);
		else if (is_string($item))
			$json.='"'.str_replace(array("\r","\n"),"",$item).'"';
		else $json.=$item;
	}
	$json.= ($isarr)?"]":"}";
	return $json;
}

function keeponline()
{
	global $disonline,$datafile;
	if (!$disonline) return;
	$name = $_POST['name'];
	$ip = get_ip();
	$onlines = @file_get_contents($datafile);
	$s1 = "|{$name}|{$ip}|";
	if (strpos($onlines,$s1) === false)
	{
		if (strpos($onlines,"|".$name."|") === false)
		{
			$fp = @fopen($datafile,"a+");
			if ($fp)
			{
				if (@flock($fp, LOCK_EX))
				{
					@fputs($fp,time()."|".time().$s1."\n");
					@flock($fp, LOCK_UN);
				}
				@fclose($fp);
			}
		}
		else
		{
			echo "NAME";
			die();
		}
	}
}

if ($action == "write")
{

	$name = htmlspecialchars(str_replace(array("\n","\r"),"",$_POST['name']));
	if (!$name) die("No Name!!");
	$ip = get_ip();
	keeponline();
	
	$s = "";
	$style = "";
	$t = time();
	$arr = explode("\n",$_POST['content']);
	for($i = 0;$i<count($arr);$i++)
	{
		$content = $arr[$i];
		$content = trim($content);
		$content = str_replace(array("\n","\r"),"",$content);
		if (!$content) continue;
		$content = htmlspecialchars($content);
		$content = preg_replace("~\[img\](http:\/\/[a-zA-Z0-9\.-_\+%\?]*)\[\/img\]~i", "<img src='$1' />", $content);
		$content = ($style)?"<span style='{$style}'>{$content}</span>":$content;
		$s.= $t."|<b>".$name."</b>: <font color='#000'>".$content."</font>\n";
	}
	
	if (!$s) die("No Content!!");
	$fp = @fopen($filename,"a+");
	if (!$fp) die("repeat");
	$re_time = 0;
	while(!@flock($fp, LOCK_EX))
	{
		sleep(1);
		$re_time++;
		if ($re_time >=4) break;
	}
	if ($re_time <4)
	{
		@fputs($fp,$s);
		@flock($fp, LOCK_UN);
	}
	else die("repeat");
	@fclose($fp);
	echo "OK";
}
else if ($action == "read")
{
	$first = $_POST["first"];
	$lastmod = intval($_POST["lastmod"]) - $get_past_sec; //得到兩秒以內的所有發言，
	$alastmod = @filemtime($filename);
	$name = $_POST['name'];
	$name = str_replace("\n","",$name);
	$ip = get_ip();
	$json = array();
	$json["lastmod"] = time();
	$item = array();
	$newonline = array();
	$offline = array();

	$fp = @fopen($filename,'r');
	flock($fp,LOCK_EX);
	$s = fread($fp,filesize($filename));
	flock($fp,LOCK_UN);
	fclose($fp);
	$lines = explode("\n",$s);
	
	if ($alastmod >= $lastmod && !$first)
	{
		foreach($lines as $l)
		{
			$item2 = array();
			$l = str_replace(array("\n","\r"),"",$l);
			if (strpos($l,"|") === false) continue;
			$arr = explode("|",$l);
			$t = intval($arr[0]);
			if ($t >= $lastmod)
			{
				$item2["time"] = date("m月d日 H:i",$t);    
				$item2["word"] = addslashes($arr[1]);
				$item[] = $item2;
			}
		}
	}
	else if ($first)
	{
		$item = array();
		$total = count($lines);
		for($i=$total-1;$i>=$total-$least;$i--)
		{
			if ($i<=0) break;
			$item2 = array();
			$l = str_replace(array("\n","\r"),"",$lines[$i]);
			if (strpos($l,"|") === false) continue;
			$arr = explode("|",$l);
			$t = intval($arr[0]);
			$item2["time"] = (date("m-d",time()) == date("m-d",$t))?date("m月d日 H:i",$t):date("m-d H:i",$t);
			$item2["word"] = addslashes($arr[1]);
			$item[] = $item2;
		}
		$item = array_reverse($item);
	}
	
	$s = "";
	$nt = time();
	$onlines = array();
	if($disonline && $touchme)
	{
		$users = @file($datafile);
		foreach($users as $l)
		{
			$l = str_replace(array("\r","\n"),"",$l);
			if (strpos($l,"|") === false)
			{
				$s.=$l."\n";
				continue;
			}
			$arr = explode("|",$l);
			if ($nt - intval($arr[1]) < $touchs*3)
			{
				if (trim($name) == trim($arr[2]))
				{
					$s.= $arr[0]."|".time()."|".$name."|".get_ip()."|\n";
				}
				else $s.=$l."\n";
				$onlines [] = $arr[2];
			}
		}
		@file_put_contents($datafile,$s);
		$json["onlines"] = $onlines;
	}
	$json["lines"] = $item;
	echo array2json($json);
}
else if ($action == "keep" )
{
	keeponline();
	echo "keep ok";
}
else if ($action == "quit")
{
	$name = $_POST['name'];
	if($disonline)
	{
		$users = @file($datafile);
		foreach($users as $l)
		{
			$l = str_replace(array("\r","\n"),"",$l);
			if (strpos($l,"|") === false)
			{
				$s.=$l."\n";
				continue;
			}
			$arr = explode("|",$l);
			if (trim($name) == trim($arr[2])) continue;
			else $s.=$l."\n";
		}
		@file_put_contents($datafile,$s);
		echo "OK";
	}
	die();
}
else
{
?>

<html>
<head>
 <title>YZU RADIO聊天室</title>
 <meta http-equiv='Pragma' content='no-cache' />
 <meta http-equiv=Content-Type content="text/html; charset=<?php echo $charset;?>" />

<style type='text/css'>

a	{ text-decoration:none; color:#a2b700; }
.mydiv	{ text-align:left; width:250px; }
/* 這邊width條寬度 */
.inputtext	{ border:0px; border-bottom:1px solid #333333; background-color:transparent;}
/*送出按鈕的樣式*/
.submit	{
font-family: Arial, sans-serif;font-size: 8pt;background-color: #889AB6;border: #2D4063 1px solid;color: #fff;font-weight: bold;padding-left: 3px;padding-right:3px;vertical-align:top;margin: 2px 2px 2px 2px;
}
.contents	{ border:1px solid #B1B1B1;background-color:#DBE2ED; color:#2D4063;overflow:auto;word-break:break-all;word-wrap :break-word;}
.bg	{ background-color:#ffffff; }
.content	{ border:0px;background-color:transparent;width:auto; font-size:16px; font-family:"新細明體","標楷體"; margin:2px; padding:1px; }
.time	{ color:#aaaaaa; font-size:10px; font-family:Arial;}
.online	{ margin:5px; padding:0px; display:inline; }
.mybut	{ width:20px; height:20px; background-color:#ff8c05; text-align:center; font-size:18px; color: #333333;}
</style>

<script>
function $(obj)
{
	return document.getElementById(obj);
}

function setCookie(name,value,t)
{
	var cookieexp = 5*30*24*60*60*1000; //5 months
	var cookiestr=name+"="+escape(value)+";";
	var expires = "";
	var d = new Date();
	var t2=(!t)?cookieexp:t*60*1000;
	d.setTime( d.getTime() + cookieexp);
	expires = "expires=" + d.toGMTString()+";";
	document.cookie = cookiestr+ expires;
}

function getCookie(name)
{
	var start = document.cookie.indexOf( name + "=" );
	var len = start + name.length + 1;
	if ( ( !start ) && ( name != document.cookie.substring( 0, name.length ) ) ) return "";
	if ( start == -1 ) return "";
	var end = document.cookie.indexOf( ";", len );
	if ( end == -1 ) end = document.cookie.length;
	return unescape( document.cookie.substring( len, end ) );
}

function createAJAX()
{
	if (window.XMLHttpRequest) 
	{
		var oHttp = new XMLHttpRequest();
		return oHttp;
	} 
	else if (window.ActiveXObject) 
	{
		var versions = [
			"MSXML2.XmlHttp.6.0",
			"MSXML2.XmlHttp.3.0"
		];

		for (var i = 0; i < versions.length; i++) 
		{
			try {
				var oHttp = new ActiveXObject(versions[i]);
				return oHttp;
			} catch (error) {}
		}
    	}
	throw new Error("喔喔 你的瀏覽器不支援 XMLHttpRequest 哭哭");
}


var isIE = (document.all && window.ActiveXObject) ? true : false;
</script>
</head>
<body >
<center>

<div class="mydiv rooms" id='div_msg'>
<div class='contents' style='height:350px;' id='div_contents'>Loading...</div>
</div>

<div class="mydiv login" id='div_name' style='display:block;'>

姓名:<input type=text size=8 id='chat_user' value='' maxlength=30 />&nbsp;
<OBJECT id=dlgHelper CLASSID="clsid:3050f819-98b5-11cf-bb82-00aa00bdce0b" WIDTH="0px" HEIGHT="0px"></OBJECT><input type=button class=submit value='送出訊息' onClick="chat_send();$('chat_word').style.height=20;" onFocus="this.blur();"/>

<textarea type=text  rows=1 scrolling=no style='height:20px;overflow:hidden;width:220px;' id='chat_word' onFocus="if (this.value == '<?php echo $lang["hereyourwords"];?>') this.value='';" 
 onkeydown="return check_send(event);" ><?php echo $lang["hereyourwords"];?></textarea>
</div>


<div  style='display:<?php if (!$disonline) echo "none";?>' id='div_online'>Loading online...</div>

<script>
var debug = 0;
var lastmod = <?php echo time()-$earlier*60;?>;
var login = 1;
var loading = false;
var olduser = getCookie('chatusername');
if (olduser != "") $('chat_user').value = olduser;
var room = "<?php echo $room;?>";
var first = 1;
var dis = "<?php echo $least;?>";
var lastword;
var color='';
var touchs = <?php echo $touchs;?>;
var dotouch = true;
var maxdisplay = <?php echo $maxdisplay;?>;
var nowdisplay = 1;
var sending = 0;
var loaded_lines = [];
function encode(s)
{
	return  (encodeURIComponent)? encodeURIComponent(s):s;
}

var keep_ajax;
function keeponline()
{
	var name = $('chat_user').value;
	if (!name) return;
	keep_ajax = createAJAX();
	keep_ajax.open('POST','<?php echo basename(__FILE__);?>',1);
	keep_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	
	keep_ajax.onreadystatechange = function ()
	{
		if (keep_ajax.readyState == 4 && keep_ajax.status == 200)
		{
			//alert(keep_ajax.responseText);
		}
	}
	keep_ajax.send("action=keep&name="+encode(name));
}
setInterval("keeponline()",touchs*1000);



setInterval(" load_word()",(debug)?6000:1000);

var load_word_ajax;

//下載完成後的處理函數
function load_word_change()
{
	if (load_word_ajax.readyState == 4)
	{
		if (load_word_ajax.status != 200)
		{
			load_word_error();
			return;
		}
		window.loading = false;
		var body = $('div_contents');	

		try {
			if (debug) alert(load_word_ajax.responseText);
			eval("var arr = "+load_word_ajax.responseText); 
		} catch(e)
		{
			alert('Error 101\nJSON syntax error!\n\n'+load_word_ajax.responseText);
			return;
		}
		if (!arr || !arr.lastmod || typeof(arr.lastmod) == "undefined" )
		{
			return;
		}

		var html = "";
		var line = arr.lines;
		var i = 0;
		var v1 = 0;
		var div_online = $('div_online');
		if (window.first)
		{
			body.innerHTML = "";
			window.first = false;
		}
		
		if (arr.onlines)
		{
			$('div_online').innerHTML = "";
			for(var i=0;i<arr.onlines.length;i++) addonline(arr.onlines[i]);
		}
		for(var i=0;i<line.length;i++)
		{
			var linekey = line[i].word.substring(line[i].word.length-20,line[i].word.length)+line[i].time;
			if (window.loaded_lines[linekey] === true)
			{
				if (debug) alert("jump:"+linekey);
				continue;
			}
			var div1 = document.createElement("div");
			window.nowdisplay ++;
			if (window.nowdisplay > window.maxdisplay) window.nowdisplay = 1;
			if ($("contentitem"+window.nowdisplay)) body.removeChild($("contentitem"+window.nowdisplay));
			div1.className = "content";
			div1.id = "contentitem"+window.nowdisplay;
			div1.innerHTML = line[i].word+" <span class='time'>("+line[i].time+")</span>";
			body.appendChild(div1);
			
			window.loaded_lines[linekey] = true;
			body.scrollTop = 655350;
			v1 = 1;
		}	

		if (v1) 
		{
			window.focus(); 
			document.body.focus();
			window.lastmod = arr.lastmod;
			if(debug) alert("lastmod = "+arr.lastmod + " \nwindow.lastmod="+window.lastmod);
			if ($('chat_word').disabled == false) $('chat_word').focus();
		}
	}
}

function load_word_error()
{
	window.loading = false;
	window.status = 'Error 102:while loading words';
	setTimeout("window.status = '';",5000);
}

function load_word()
{
	load_word_ajax = createAJAX();
	if (window.loading)
	{
		try
		{
			load_word_ajax.abort();
			window.loading = false;
		}catch(e)	{}
	}
	if (!window.lastmod)
	{
		alert("window.lastmod="+window.lastmod);
		return;
	}
	
	load_word_ajax.open('POST','<?php echo basename(__FILE__);?>',true);
	load_word_ajax.onreadystatechange = load_word_change;
	
	var urlstring = '';
	urlstring += "lastmod="+window.lastmod;
	urlstring+= "&room="+room;
	urlstring+= "&action=read";
	urlstring+= "&name="+encode($('chat_user').value);
	
	if (window.first)
	{
		urlstring+= "&first=true";
		urlstring += "&dis="+dis;
	}
	//如果到了取得在線用戶的時間
	if (window.dotouch) 
	{
		urlstring+= "&touchme=true";
		window.dotouch = false;
		//垃圾內存回收
		try { CollectGarbage(); } catch(e) {}
	}

	window.loading = true;
	if (debug) alert("sending:"+urlstring);
	load_word_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	
	load_word_ajax.send(urlstring);
}

function touchme()
{
	window.dotouch = true;
	setTimeout("touchme()",window.touchs*1000);
}

function showalert(a,n)
{
	if (!n) n=0;
	if (n>3) return;
	if (!a)
	{
		a = 0;
		b = 1;
	}
	else
	{
		a = 1;
		b = 0;
	}
	document.title = mytitle[a];
	setTimeout("showalert("+b+","+(n+1)+");",500);
}

function addonline(name)
{
	if ($(name)) return;
	var d1 = document.createElement("div");
	d1.id = name;
	d1.innerHTML = name;
	d1.className = "online";
	$('div_online').appendChild(d1);
}

touchme();

function check_send(e)
{
	if (!e) e = window.event;
	var obj = $('chat_word');
	if (isIE) obj.style.height = obj.scrollHeight+3;
	if (e.keyCode == 13)
	{
		if ((!e.shiftKey && !e.altKey && !e.ctrlKey) || !isIE)
		{
			chat_send();
			obj.style.height = 20;
			return false;
		}
		else if (isIE) obj.style.height = obj.scrollHeight+18;
	}
	return true;
}

var send_ajax;


send_ajax_change  = function()
{
	if (send_ajax.readyState == 4)
	{
		if (send_ajax.status != 200)
		{
			send_ajax_error();
			return;
		}
		if (debug) alert("send_ajax response:"+send_ajax.responseText);
		if (send_ajax.responseText.indexOf("NAME")!=-1)
		{
			alert('已經有人使用你的暱稱了');
			$('chat_user').value = "";
			$('chat_user').focus();
		}
		else if (send_ajax.responseText.indexOf("repeat")!=-1)
		{
			$('chat_word').value = window.lastcontent;
		}
		
		on_send_ok();
		
		if (!window.loading)
		{
			window.dotouch = true;
			load_word();
		}
	}
}

function on_send_begin()
{
	with($('chat_word'))
	{
		disabled = true;
		style.backgroundColor = "#eeeeee";
	}
	window.sending = 1;
}

function on_send_ok()
{
	window.sending = 0;
	with($('chat_word'))
	{
		value = '';
		disabled = false;
		focus();
		style.backgroundColor = "#ffffff";
	}	
}

function on_send_error()
{
	window.sending = 0;
	with($('chat_word'))
	{
		disabled = false;
		focus();
		style.backgroundColor = "#ffffff";
	}
}

function send_ajax_error()
{
	alert('瑞迪歐錯誤103號\n你可能送太快了\n\n請再送出一次吧!');
	$('chat_word').value = window.lastcontent;
	window.sending = 0;
	on_send_error();
}

function chat_send()
{
	send_ajax = createAJAX();
	send_ajax.open('POST','<?php echo basename(__FILE__);?>',true);
	send_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	send_ajax.onreadystatechange = send_ajax_change;
	var urlstring = '';
	var name = $('chat_user').value.replace("\n","");
	var content = $('chat_word').value; 
	
	if (name == "")
	{
		alert('請填上妳的姓名!!');
		$('chat_user').focus();
		return;
	}
	
	if (content == "" || content == "\n" || content == "\n\n" || content == "\n\n\n")
	{
		alert('請輸入發言內容!');
		$('chat_word').focus();
		$('chat_word').value = "";
		return;
	}

	
	urlstring+= "action=write";
	urlstring+= "&name="+encode(name);
	urlstring+= "&content="+encode(content);
	urlstring+= "&room="+room;

	window.sending = 1;
	window.lastcontent = content;
	on_send_begin();
	if (debug) alert("sending:"+urlstring);
	
	send_ajax.send(urlstring);
	setTimeout("if (window.sending) send_ajax.abort(); on_send_error();",5000);
	setCookie("chatusername",$('chat_user').value);
}

</script>

</center>

</body>
</html>
<?php
}
?>