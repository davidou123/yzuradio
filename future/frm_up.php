<?php  
// 本函式轉換圖檔, 並設定大小輸出到目的圖檔 
//Convert image size. true color  
//$src         來源檔案  
//$dest        目的檔案  
//$maxWidth    縮圖寬度  
//$maxHeight   縮圖高度  
//$quality     JPEG品質  
//＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ 
function MakeThumb($src,$dest,$maxWidth,$maxHeight,$quality=100) {  

//檢查檔案是否存在  
if (file_exists($src)  && isset($dest)) {  
    $destInfo  = pathInfo($dest);  
    $srcSize   = getImageSize($src); //圖檔-相關資訊  
    $srcRatio  = $srcSize[0]/$srcSize[1]; // 計算寬/高  
    $destRatio = $maxWidth/$maxHeight;  
    if ($destRatio > $srcRatio) {  
        $destSize[1] = $maxHeight;  
        $destSize[0] = $maxHeight*$srcRatio;  
    }else {  
        $destSize[0] = $maxWidth;  
        $destSize[1] = $maxWidth/$srcRatio;  
    }  
echo "999";
 //GIF 檔不支援輸出，因此將GIF轉成JPEG  
 if ($destInfo['extension'] == "gif") $dest = substr_replace($dest, 'jpg', -3);  
echo "888";
 //建立一個 True Color 的影像  
 $destImage = imageCreateTrueColor($destSize[0],$destSize[1]); 
echo "777"; 
 //根據副檔名讀取圖檔  
    switch ($srcSize[2]) {  
    case 1: $srcImage = imageCreateFromGif($src); break;  
    case 2: $srcImage = imageCreateFromJpeg($src); break;  
    case 3: $srcImage = imageCreateFromPng($src); break;  
    default: return false; break;  
    }  
echo "666";
//取樣縮圖  
    ImageCopyResampled($destImage, $srcImage, 0, 0, 0, 0,$destSize[0],$destSize[1],$srcSize[0],$srcSize[1]);  
echo "555";
//輸出圖檔  
    switch ($srcSize[2]) {  
    case 1: imagegif($destImage,$dest,$quality); break;  
    case 2: imageJpeg($destImage,$dest,$quality); break;  
    case 3: imagePng($destImage,$dest); break;  
    }  
    return true;  
}else {  
    return false;  
}  
} //end func MakeThumb 

if(!empty($_FILES['frm_up']['name'])) {  
    $upfile  = "data/" . $_FILES['frm_up']['name'] ;  
    //上傳檔案 
    copy($_FILES['frm_up']['tmp_name'],$upfile); 
          echo "1111";
    //設定檔名 
    $srcFile  = "data/{$_FILES['frm_up']['name']}"; 
    $dstFile = "data/" . 's' . "{$_FILES['frm_up']['name']}"; 
          echo "22222";
    //進行縮圖 
    MakeThumb($srcFile,$dstFile,120,80) ;  
               echo "3333";
    //輸出 
    $s_picinfo = getimagesize($srcFile); 
    $d_picinfo = getimagesize($dstFile); 
    echo "原圖：{$srcFile} 尺寸：$s_picinfo[3]<br>"; 
    echo "<img src=\"{$srcFile}\"><br>"; 
     
    echo "縮圖：{$dstFile} 尺寸：$d_picinfo[3]<br>"; 
    echo "<img src=\"{$dstFile }\"><br>"; 
    exit(); 
} 

?> 
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="input_frm"> 
<table width="411" border="1" cellspacing="0" cellpadding="2" align="center" bordercolorlight="#808080" bordercolordark="#FFFFFF"> 
    <tr> <input name="flag" type="hidden" value="1"> 
      <td width="403" height="17" bgcolor="#CCCCCC">  
        <div align="center" class="style1">自動裁切圖片</div> 
      </td> 
    </tr> 
    <tr>  
      <td bgcolor="#f8f8f8" height="85">  
        <p align="center">上傳檔案： 
          <input name="frm_up" type="file" id="frm_up"> 
          <input type="submit" name="Submit" value="確定上傳"></p> 
        </td> 
    </tr> 
  </table> 
</form> 