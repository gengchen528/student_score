<?php
session_start();
$name = $_POST['name'];
$password = $_POST['password'];
if((!isset($name)) || (!isset($password)))
{echo $name;}
else
{
$conn = mysql_connect("localhost","root","root")or die('�������ݿ�ʧ��');
$selected = mysql_select_db("studentscore",$conn)or die('û�д���');
$sql = "select * from admin where name = '".$name."' and password = '".$password."'";
$result = mysql_query($sql,$conn)or die('�鲻��');
$row = mysql_fetch_array($result);
$count = $row[0];
echo  $row[0];
if($count!="")
{
$url = "./admin/admin_result.php";
$_SESSION['admin_user'] = $name;
echo $_SESSION['admin_user'];
echo "<script type='text/javascript'>"."location.href='".$url."'"."</script>";
}
else 
{
echo "<script> alert('������û�������');</script>";
echo "<script> history.go(-1);</script>";
}
}
?>