<?php
session_start();
include("connect.php");
$sid = $_SESSION[ 'customer_user' ];
$sql = "select * from bitems where status = '����'";
$result = mysql_query( $sql, $conn )or die( '�鲻��' );
//$sql = "select * from certificate";
//$result = mysql_query( $sql, $conn )or die( '�鲻��' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>������ѯ</title>
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
					<h2>������ѯ</h2>
				</div>
				<table  class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
					<tr>
						<td >��Ŀ���</td>
						<td >��Ŀ����</td>
						<td >�ȼ�</td>
						<td >��ʼʱ��</td>
						<td >����ʱ��</td>
					</tr>
					<?php 
	    while($row=mysql_fetch_array($result)){
	?>
					<tr>
					
						<td>
							<?php echo stripslashes($row['cid']);?>
						</td>
						<td>
							<?php echo stripslashes($row['cname']);?>
						</td>
						<td>
							<?php echo stripslashes($row['ccredit']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['start_time']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['finish_time']); ?>
						</td>
					</tr>
					<?php
					}
					//$result->free();
					//$db->close();
					?>
				</table>
				<p style="height: 40px"></p>
				<div><p style="color: yellow;font-weight: bold;font-size: 18px">ע�⣺���ڱ����ڼ��¼��Ľ���ϵͳ���б��������ڱ������꼶�칫�ҽ��нɷ�<p></div>
			</div>
		</form>
		
	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>