<?php
$sid = $_GET['sid'];
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
	<div class="main-content">
	<form name="form1" method="post">
	<div class="content">
	<div class="content-name">
					<h2>��ĳɼ���</h2>
				</div>
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
	<?php 
	include("footer.php");
	?>
</body>

</html>