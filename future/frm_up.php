<?php  
// ���禡�ഫ����, �ó]�w�j�p��X��ت����� 
//Convert image size. true color  
//$src         �ӷ��ɮ�  
//$dest        �ت��ɮ�  
//$maxWidth    �Y�ϼe��  
//$maxHeight   �Y�ϰ���  
//$quality     JPEG�~��  
//�סססססססססססססססססססססססס� 
function MakeThumb($src,$dest,$maxWidth,$maxHeight,$quality=100) {  

//�ˬd�ɮ׬O�_�s�b  
if (file_exists($src)  && isset($dest)) {  
    $destInfo  = pathInfo($dest);  
    $srcSize   = getImageSize($src); //����-������T  
    $srcRatio  = $srcSize[0]/$srcSize[1]; // �p��e/��  
    $destRatio = $maxWidth/$maxHeight;  
    if ($destRatio > $srcRatio) {  
        $destSize[1] = $maxHeight;  
        $destSize[0] = $maxHeight*$srcRatio;  
    }else {  
        $destSize[0] = $maxWidth;  
        $destSize[1] = $maxWidth/$srcRatio;  
    }  
echo "999";
 //GIF �ɤ��䴩��X�A�]���NGIF�নJPEG  
 if ($destInfo['extension'] == "gif") $dest = substr_replace($dest, 'jpg', -3);  
echo "888";
 //�إߤ@�� True Color ���v��  
 $destImage = imageCreateTrueColor($destSize[0],$destSize[1]); 
echo "777"; 
 //�ھڰ��ɦWŪ������  
    switch ($srcSize[2]) {  
    case 1: $srcImage = imageCreateFromGif($src); break;  
    case 2: $srcImage = imageCreateFromJpeg($src); break;  
    case 3: $srcImage = imageCreateFromPng($src); break;  
    default: return false; break;  
    }  
echo "666";
//�����Y��  
    ImageCopyResampled($destImage, $srcImage, 0, 0, 0, 0,$destSize[0],$destSize[1],$srcSize[0],$srcSize[1]);  
echo "555";
//��X����  
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
    //�W���ɮ� 
    copy($_FILES['frm_up']['tmp_name'],$upfile); 
          echo "1111";
    //�]�w�ɦW 
    $srcFile  = "data/{$_FILES['frm_up']['name']}"; 
    $dstFile = "data/" . 's' . "{$_FILES['frm_up']['name']}"; 
          echo "22222";
    //�i���Y�� 
    MakeThumb($srcFile,$dstFile,120,80) ;  
               echo "3333";
    //��X 
    $s_picinfo = getimagesize($srcFile); 
    $d_picinfo = getimagesize($dstFile); 
    echo "��ϡG{$srcFile} �ؤo�G$s_picinfo[3]<br>"; 
    echo "<img src=\"{$srcFile}\"><br>"; 
     
    echo "�Y�ϡG{$dstFile} �ؤo�G$d_picinfo[3]<br>"; 
    echo "<img src=\"{$dstFile }\"><br>"; 
    exit(); 
} 

?> 
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="input_frm"> 
<table width="411" border="1" cellspacing="0" cellpadding="2" align="center" bordercolorlight="#808080" bordercolordark="#FFFFFF"> 
    <tr> <input name="flag" type="hidden" value="1"> 
      <td width="403" height="17" bgcolor="#CCCCCC">  
        <div align="center" class="style1">�۰ʵ����Ϥ�</div> 
      </td> 
    </tr> 
    <tr>  
      <td bgcolor="#f8f8f8" height="85">  
        <p align="center">�W���ɮסG 
          <input name="frm_up" type="file" id="frm_up"> 
          <input type="submit" name="Submit" value="�T�w�W��"></p> 
        </td> 
    </tr> 
  </table> 
</form> 