

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Full featured example</title>
<style>
body {font-family:Arial,Verdana; font-size: 12px;}
</style>

<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce.js"></script>
<script type="text/javascript" src="tinymac.js"></script>
<!-- /TinyMCE -->

</head>
<body>

<form method="post" action="translate.php">
<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%">
11�u�o��A�~�M�ͭp���Φ����j���O�C�v�o�ɥR���A�u����ܾE�����B�����H�w���C�v

�@�@�Ӧ�130���2500��M�a�X�u�b���w�������|�檺��20���@�ɤ��귽�g�j�|�A�Ƿ箦�O���ܱM�a���@�C�j�|5��n���A�w�p11�鳬���C

�@�@�ڰ򴵩Z�ɫB�޵o����ʬx�a��A�{�b����800�U�H�������
	</textarea>
<input type="submit" value="�e�X" name="submit">
</form>
<script type="text/javascript">
if (document.location.protocol == 'file:') {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>
<?
$eee="<span style=\"background-color: #ffff00;\">123</span>";
   $showcontent = $_POST['elm1']; 
      $showcontent = str_replace('\"',"\"",$showcontent);  //��\"���N��" 
	  /*�o��''����\"�O�n�Q���N���� �n�Q���N��" ���]���S�|�y���{���P�_���~ �ҥH�n�h�@��\�Ӹ������t�Ϊ��D�O"*/
   echo $showcontent;
   echo"<HR>";
   $eee = str_replace("\"","'",$eee);
   echo $eee;
   echo "����";
   ?>
</body>
</html>
