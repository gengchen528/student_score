<?
//����Excel�ļ�
function uploadFile($file,$filetempname) 
{
	//�Լ����õ��ϴ��ļ����·��
	$filePath = 'upFile/';
	$str = "";
	//�����·��������PHPExcel��·�����޸�
	set_include_path('.'. PATH_SEPARATOR .'D:\phpStudy\WWW\student_score\admin\PHPExcl\PHPExcel' . PATH_SEPARATOR .get_include_path()); 
      
	require_once 'PHPExcel.php';
	require_once 'PHPExcel\IOFactory.php';
	//require_once 'PHPExcel\Reader\Excel5.php';//excel 2003
	require_once 'PHPExcel\Reader\Excel2007.php';//excel 2007

	$filename=explode(".",$file);//���ϴ����ļ����ԡ�.����Ϊ׼��һ�����顣 
	$time=date("y-m-d-H-i-s");//ȥ��ǰ�ϴ���ʱ�� 
	$filename[0]=$time;//ȡ�ļ���t�滻 
	$name=implode(".",$filename); //�ϴ�����ļ��� 
	$uploadfile=$filePath.$name;//�ϴ�����ļ�����ַ 

  
	//move_uploaded_file() �������ϴ����ļ��ƶ�����λ�á����ɹ����򷵻� true�����򷵻� false��
    $result=move_uploaded_file($filetempname,$uploadfile);//�����ϴ�����ǰĿ¼��
    if($result) //����ϴ��ļ��ɹ�����ִ�е���excel����
    {
	   //$objReader = PHPExcel_IOFactory::createReader('Excel5');//use excel2003
	   $objReader = PHPExcel_IOFactory::createReader('Excel2007');//use excel2003 �� 2007 format
	   //$objPHPExcel = $objReader->load($uploadfile); //����������httpd����
	   $objPHPExcel = PHPExcel_IOFactory::load($uploadfile);//�ĳ����д���ͺ���

	   $sheet = $objPHPExcel->getSheet(0); 
	   $highestRow = $sheet->getHighestRow(); // ȡ�������� 
	   $highestColumn = $sheet->getHighestColumn(); // ȡ��������
    
		//ѭ����ȡexcel�ļ�,��ȡһ��,����һ��
		for($j=2;$j<=$highestRow;$j++)
		{ 
			for($k='A';$k<=$highestColumn;$k++)
			{ 
				$str .= iconv('utf-8','gbk',$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue()).'\\';//��ȡ��Ԫ��
			} 
			//explode:�������ַ����ָ�Ϊ���顣
			$strs = explode("\\",$str);
			
			//var_dump($strs);
			//die();
			//$sql = "INSERT  INTO  student(sid,sname,sage,ssex,sdept,sschool,sclass,spassword) VALUES('".$strs[0]."','".$strs[1]."','".$strs[2]."','".$strs[3]."','".$strs[4]."','".$strs[5]."','".$strs[6]."','".$strs[7]."')";
			//$sql = "INSERT INTO grade(sid,sname,cid,cname,sgrade,cdate,ccredit) VALUES('".$strs[0]."','".$strs[1]."','".$strs[8]."','".$strs[9]."','".$strs[11]."','".$strs[12]."','".$strs[10]."')";
			$sql = "INSERT INTO certificate(sid,sname,cid,cname,estate,enum,etype,ccredit) VALUES('".$strs[0]."','".$strs[1]."','".$strs[8]."','".$strs[9]."','".$strs[13]."','".$strs[14]."','".$strs[15]."','".$strs[10]."')";
			
			//echo $sql;
			mysql_query("set names gb2312");//�����ָ�����ݿ��ַ�����һ������������ݿ�����ϵ�� 
			if(!mysql_query($sql)){
				return false;
			}
			$str = "";
	   } 
   
   	   unlink($uploadfile); //ɾ���ϴ���excel�ļ�
       $msg = "����ɹ���";
		echo "<script> alert('����ɹ���');</script>";
	   echo "<script> window.location='../upfile.php';</script>";
    }else{
       $msg = "����ʧ�ܣ�";
		echo "<script> alert('����ʧ�ܣ�');</script>";
		echo "<script> window.location='../upfile.php';</script>";
    }
    return $msg;
}
?>