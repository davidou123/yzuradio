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
$gf=fopen("gtype.dat","r");
$gr=fread($gf,filesize("gtype.dat"));
list($gname,$gup,$guser,$gmail,$ghome,$gwidth,$gnnumber,$gn,$gm_link,$gu_link,$go_link,$gc_link,$gm_line,$gi_line,$go_skin,$gm_skin,$gc_skin,$gf_type,$gip,$gt_y,$gt_m,$gt_d,$gt_h,$gt_s,$g_boy,$g_girl,$ghtml)=explode("∥",$gr);
?>
