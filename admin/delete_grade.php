<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<?php

$sid = $_SESSION['deletesid'];
$cid = $_SESSION['changecid'];
include("connect.php");
$sql = "delete from grade where sid = '".$sid."' and cid='".$cid."'";
$result = mysql_query($sql,$conn)or die('�鲻��');
if($result)
{
?>
<script language="javascript">
  alert("ɾ���ɹ�");
	window.location='select_all.php';
</script>
<?php
}
else
{
?>
<script language="javascript">
alert("ɾ�����ɹ�");
</script>}
<?php
}
?>
<body>
</body>
</html>
