<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<center>
<h1>�α�¼����</h1>
<?php
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$ccredit = $_POST['ccredit'];
if(!$cid || !$cname ||!$ccredit)
{
echo "����������";
exit;
}

$cid = addslashes($cid);
$cname = addslashes($cname);
$ccredit = addslashes($ccredit);

include("connect.php");
$sql ="insert into course values('".$cid."','".$cname."','".$ccredit."')";
$result = mysql_query($sql,$conn)or die('�鲻��');


if($result)
{
echo "<script> alert('����ɹ���');</script>";
echo "<script> window.location='insert_course1.php';</script>";
}
else
{
echo "����ʧ��";
}
?>
</center>
</body>
</html>
