<?php

session_start();
$sid = $_SESSION[ 'customer_user' ];
include("connect.php");
$sql = "select * from grade where sid = '".$sid."'";
$result = mysql_query( $sql, $conn )or die( '�鲻��' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>ѧ���ɼ�����ϵͳ</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include("header.php");
	?>
	<div class="main-content">
	<form name="form1" method="post">
	<div class="content">
	<table class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td >�γ̺�</td>
			<td >��Ŀ</td>
			<td >����</td>
		</tr>
		<?php 
	   while($row=mysql_fetch_array($result)){
	?>
		<tr>
			<td >
				<?php echo stripslashes($row['cid']);?>
			</td>
			<td >
				<?php echo stripslashes($row['cname']);?>
			</td>
			<td >
				<?php echo stripslashes($row['sgrade']); ?>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
		</div>
	</form>
	
	<div class="barcode">
	<div class="qrcode_title">��ά��ɼ���ѯ</div>
	<img src=http://127.0.0.1/student/qrcode.php?url=http://127.0.0.1/student/qrcode_result.php?sid=<?php echo($_SESSION['customer_user']) ?> ></div>
	</div>
	<?php 
	include("footer.php");
	?>
</body>

</html>