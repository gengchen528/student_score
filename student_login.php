<?php
session_start();
$sid = $_POST['name'];
$password = $_POST['password'];
if((!isset($sid)) || (!isset($password)))
{echo $sid;}
else
{
$conn = mysql_connect("localhost","root","root")or die('�������ݿ�ʧ��');
$selected = mysql_select_db("studentscore",$conn)or die('û�д���');
$sql = "select * from student where sid = '".$sid."' and spassword = '".$password."'";
$result = mysql_query($sql,$conn)or die('�鲻��');
$row = mysql_fetch_array($result);
$count = $row[0];
echo  $row[0];
if($count!="")
{
$url = "./student/student_result.php";
$_SESSION['customer_user'] = $sid;
echo $_SESSION['customer_user'];
echo "<script type='text/javascript'>"."location.href='".$url."'"."</script>";
}
else 
{
echo "<script> alert('������û�������');</script>";
echo "<script> history.go(-1);</script>";
}
}
?>