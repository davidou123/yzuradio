<?
#  -----------------------------------------  #  
#  �{���W�١GC.P.Gb �d����                    #
#  �]�p�̡GCooltey                            # 
#  E-Mail�Gcooltey@yahoo.com.tw               #
#  HomePage�Ghttp://cooltey.mytw.net            #
#  �{�������GV0.89                            #
#  �̫��s�G2006/8/27                         #
#  �`�N�A�����v�ŧi���o�R���A�{���i���N�ק�I # 
#  �̤U���@�檺 Powered By Cooltey �Ф��n�R�� #
#  -----------------------------------------  #
?>
<?
$data="count.txt";
if(filesize($data)){
        $file=fopen($data,"r");
        $old_count=fread($file,filesize($data));
        fclose($file);
}
$new_count=$old_count+1;
$file=fopen($data,"w");
fputs($file,$new_count);
fclose($file);
for($i=0;$i<strlen($new_count);$i++){
         $img_num=substr($new_count,$i,1);
         echo "<img src='image/count/$img_num.gif' border=0>";
}

?>
