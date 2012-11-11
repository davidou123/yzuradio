<?
#  -----------------------------------------  #  
#  程式名稱：C.P.Gb 留言版                    #
#  設計者：Cooltey                            # 
#  E-Mail：cooltey@yahoo.com.tw               #
#  HomePage：http://cooltey.mytw.net            #
#  程式版本：V0.89                            #
#  最後更新：2006/8/27                         #
#  注意，本版權宣告不得刪除，程式可任意修改！ # 
#  最下面一行的 Powered By Cooltey 請不要刪除 #
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
