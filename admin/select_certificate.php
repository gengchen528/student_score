<?php
session_start();
include("connect.php");
$sql = "select * from grade";
$result = mysql_query( $sql, $conn )or die( '�鲻��' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>�鿴ȫ��ѧ����Ϣ</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" )
	?>
	<div class="main-content">
		<form name="form1" method="post">
			<div class="content">
				<div class="content-name">
					<h2>�鿴����ѧ���ɼ�</h2>
				</div>
				<table  border="1" align="center">
					<tr>
						<td width="110" height="28">���֤��</td>
						<td width="100">����</td>
						<td width="110">��Ŀ��</td>
						<td width="115">��Ŀ</td>
						<td width="50">����</td>
						<td width="80">��������</td>
						<td width="67">&nbsp;</td>
						<td width="66">&nbsp;</td>
					</tr>
					<?php 
	    while($row=mysql_fetch_array($result)){
	?>
					<tr>
						<td>
							<?php echo stripslashes($row['sid']);?>
						</td>
						<td>
							<?php echo stripslashes($row['sname']);?>
						</td>
						<td>
							<?php echo stripslashes($row['cid']);?>
						</td>
						<td>
							<?php echo stripslashes($row['cname']);?>
						</td>
						<td>
							<?php echo stripslashes($row['sgrade']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['cdate']); ?>
						</td>
						<td><a href="delete_grade.php">ɾ��</a>
						</td>
						<?php
						$_SESSION[ 'deletesid' ] = $row[ 'sid' ];
						$_SESSION[ 'changesname' ] = $row[ 'sname' ];
						$_SESSION[ 'changecid' ] = $row[ 'cid' ];
						$_SESSION[ 'changecname' ] = $row[ 'sname' ];
						$_SESSION[ 'changesgrade' ] = $row[ 'sgrade' ];
						?>
						<td>
						<a href="change_grade.php?sid=<?php echo stripslashes($row['sid']);?>&&cid=<?php echo stripslashes($row['cid']);?>">�޸�</a>
						
						</td>
					</tr>
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
	include( "footer.php" )
	?>
</body>

</html>