<?php
session_start();
include("connect.php");
$sid = $_SESSION[ 'customer_user' ];
$sql = "select * from student where sid = '".$sid."'";
$result = mysql_query( $sql, $conn )or die( '�鲻��' );
//$sql = "select * from certificate";
//$result = mysql_query( $sql, $conn )or die( '�鲻��' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>������Ϣ��ѯ</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" );
	?>
	<div class="main-content">
		<form name="form1" method="post">
			<div class="content">
			<div class="content-name">
					<h2>������Ϣ��ѯ</h2>
				</div>
				<table  class="table" width="800" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td  height="28" style="width: 200px">���֤��</td>
					<td><?php echo stripslashes($row['sid']);?></td>
				</tr>
				<tr>
					<td >����</td>
					<td>
							<?php echo stripslashes($row['sname']);?>
						</td>
				</tr>
				<tr>
					<td >����</td>
					<td>
							<?php echo stripslashes($row['sage']);?>
						</td>
				</tr>
				<tr>
					<td >�Ա�</td>
					<td>
							<?php echo stripslashes($row['ssex']);?>
						</td>
				</tr>
				<tr>
					<td >רҵ</td>
					<td>
							<?php echo stripslashes($row['sdept']); ?>
						</td>
				</tr>
				<tr>
					<td >ѧԺ</td>
					<td>
							<?php echo stripslashes($row['sschool']); ?>
						</td>
				</tr>
				<tr>
					<td >�༶</td>
					<td>
							<?php echo stripslashes($row['sclass']); ?>
						</td>
				</tr>
					<?php 
	    while($row=mysql_fetch_array($result)){
	?>

					<?php
					}
					//$result->free();
					//$db->close();
					?>
				</table>
			</div>
		</form>
	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>