<?php
session_start();
include("pagelist.php");
include("connect.php");
$rows = mysql_num_rows(mysql_query("select * from certificate")); 
Page($rows,15);
$sql = "select * from certificate limit $select_from $select_limit";
$rst = mysql_query($sql); 
//$sql = "select * from certificate";
//$result = mysql_query( $sql, $conn )or die( '�鲻��' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>֤��״̬����</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" );
	?>
	<div class="main-content">
		<form action="insert_certificate.php" method="post">
			<div class="content">
				<div class="content-name">
					<h2>֤��״̬����</h2>
				</div>
				<table width="1000" height="50px" border="0" cellspacing="5" align="center" style="table-layout: fixed;">
				   <tr>
				   	<td >���֤�ţ�</td>
				   	<td >������</td>
				   	<td >��Ŀ��ţ�</td>
				   	<td >��Ŀ���ƣ�</td>
				   	<td >״̬��</td>
				   	<td >�ʼ���ţ�</td>
				   	<td >�ʼ����ͣ�</td>
				   </tr>
					<tr>
						<td ><input style="width: 120px" type="text" name="sid"/></td>
						<td><input style="width: 120px" type="text" name="sname"/></td>
						<td><input style="width: 120px" type="text" name="cid"/></td>
						<td><input style="width: 120px"type="text" name="cname"/></td>
						<td><input style="width: 120px" type="text" name="estate"/></td>
						<td><input style="width: 120px" type="text" name="enum"/></td>
						<td><input style="width: 120px" type="text" name="etype"/></td>
					</tr>
					<tr>
						<td><input type="submit" value="���"/>
						</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
		</form>
		<form name="form1" method="post">
			<div class="content">
				<table  class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
					<tr>
						<td  height="28" style="width: 200px">���֤��</td>
						<td >����</td>
						<td >��Ŀ���</td>
						<td >��Ŀ����</td>
						<td >״̬</td>
						<td >�ʼ����</td>
						<td >�ʼ�����</td>
					</tr>
					<?php 
	    while($row=mysql_fetch_array($rst)){
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
							<?php echo stripslashes($row['estate']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['enum']); ?>
						</td>
						<td>
							<?php echo stripslashes($row['etype']); ?>
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
		<div class="nav"><?php echo $pagenav; ?></div>
	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>