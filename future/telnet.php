<?
error_reporting(-1);
class Telnet {
 var $sock = NULL;
 
 function telnet($host,$port) {
  $this->sock = fsockopen($host,$port);
  socket_set_timeout($this->sock,2,0);
 }
 function close() {
  if ($this->sock)  fclose($this->sock);
  $this->sock = NULL;
 }
 
 function writeQ($buffer) {
 // $buffer = str_replace(chr(255),chr(255).chr(255),$buffer);
  fwrite($this->sock,$buffer);
 }
 
 function getc() {
  return fgetc($this->sock); 
 }
 function read_till($what) {
 echo$what;
  $buf = '';
  while (1) {
   $IAC = chr(255);
   
   $DONT = chr(254);
   $DO = chr(253);
   
   $WONT = chr(252);
   $WILL = chr(251);
   
   $theNULL = chr(0);
 
   $c = $this->getc();
   
   if ($c === false) return $buf;
   if ($c == $theNULL) {
    continue;
   }
 
   if ($c == "1") {
    continue;
   }
   if ($c != $IAC) {
    $buf .= $c;
  
    if ($what == (substr($buf,strlen($buf)-strlen($what)))) {
     return $buf;
    }
    else {
     continue;
    }
   }
   $c = $this->getc();
   
   if ($c == $IAC) {
   $buf .= $c;
   }
   else if (($c == $DO) || ($c == $DONT)) {
    $opt = $this->getc();
     echo "we wont ".ord($opt)."\n";
    fwrite($this->sock,$IAC.$WONT.$opt);
   }
   elseif (($c == $WILL) || ($c == $WONT)) {
    $opt = $this->getc();
     echo "we dont ".ord($opt)."\n";
    fwrite($this->sock,$IAC.$DONT.$opt);
   }
   else {
     echo "where are we? c=".ord($c)."\n";
   }
  }
 }
}
$telnet = new telnet("140.138.145.235",23);
echo $telnet->read_till("請輸入代號：");
ECHO"有跑到這";
$tn->writeQ("davidou");
ECHO"有跑到這2";
echo $telnet->read_till("請輸入密碼：");
$tn->writeQ("davideric\r\n\r\nf\r\n10\r\n\r\n\r\np1\r\n123\r\n");

echo $telnet->read_till(":> ");
echo $telnet->close();
?>