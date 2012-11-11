<?
#  -----------------------------------------  #  
#  程式名稱：C.P.Sub公告系統                  #
#  設計者：Cooltey                            # 
#  E-Mail：coolteygame@gmail.com             #
#  HomePage：http://www.cooltey.org            #
#  程式版本：V4.5                            #
#  最後更新：2008/9/1                         #
#  注意，本版權宣告不得刪除，程式可任意修改！ # 
#  最下面一行的 Powered By Cooltey 請不要刪除 #
#  -----------------------------------------  #
?>
<?
# 開啟set.dat檔案，以純讀取方式開啟
$sf=fopen("set.dat","r");
# 利用fread()函數來計算set.dat的長度
$sr=fread($sf,filesize("set.dat"));
# 利用explode()函數來導出資料
list($background,$bgcolor,$style_pic,$sub_num,$form_size,$form_type,$form_line,$form_color,$title_bgcolor,$title_font,$menu_bgcolor,$menu_font,$explor_bgcolor,$explor_font,$all_bgcolor,$all_font,$login_bgcolor,$login_font,$cooltey_bgcolor,$cooltey_font,$font_link)=explode("∥",$sr);
$form_line = "".$form_line."pt";
?>