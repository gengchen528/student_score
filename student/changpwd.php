<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<center>
<?php
session_start(); 
$sid = $_SESSION['customer_user'];
$password= $_POST['password'];
$newpassword = $_POST['txt_regpwd'];
if(!$password || !$newpassword )
{
   echo "<script> alert('������������');</script>";
   echo "<script> window.location='changpwd.php';</script>";
}
$password = addslashes($password);
$newpassword = addslashes($newpassword);
include("connect.php");
$sql = "select spassword from student where sid = '".$sid."'";
$result = mysql_query($sql,$conn)or die('�鲻��');
$row = mysql_fetch_array($result);
if($row[0]!=$password)	
{
  echo "<script> alert('ԭ�������');</script>";
  echo "<script> window.location='changpwd.php';</script>";
}
else{
$sql1 ="update student set spassword='".$newpassword."' where sid='".$sid."'";
$result1 = mysql_query($sql1,$conn)or die('�鲻��');
if($result1)
{
echo "<script> alert('�޸ĳɹ���');</script>";
echo "<script> window.location='student_result.php';</script>";
}
else
{
echo "<script> alert('�޸�ʧ�ܣ�');</script>";
}
}
?>
</center>
</body>
</html>
