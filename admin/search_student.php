<?php
session_start();
$sid = $_POST['sid'];
if ( !$sid ) {
	echo "<script> alert('���������֤�ţ�');</script>";
	echo "<script> window.location='admin_result.php';</script>";
}
include("connect.php");
$sql = "select * from student where sid = '".$sid."'";
$result = mysql_query( $sql, $conn )or die( '�鲻��' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>ѧ���ɼ�����ϵͳ</title>
	<link rel="stylesheet" href="Style/style.css">
</head>
<script language="javascript">
	function tosubmit1() {
		document.form1.action = "search_grade.php";
		documenr.form1.submit();
	}

	function tosubmit2() {
		document.form1.action = "search_student.php";
		document.form1.submit();
	}
</script>

<body >
<?php
	include( "header.php" );
	?>
	<div class="main-content">
	<form name="form1" method="post">
	
	<div class="content">
				<div class="search_tip">ѧ����Ϣ��ѯ</div>
					<table class="table search" width="1000" cellspacing="0" cellpadding="0" align="center">
						<tr>
							<td width="89">ѧ�ţ�</td>
							<td width="422">
								<input type="text" name="sid" value="<?php echo "$sid" ?>"/> </td>
						</tr>
						<tr>
							<td>��ѯ������</td>
							<td>
								<input name="submit1" type="submit" value="�ɼ�" onclick="tosubmit1()"/>
								<input name="submit2" type="submit" value="ѧ����Ϣ" onclick="tosubmit2()"/>
							</td>
						</tr>
					</table>
				</form>
				<div class="search_tip">��ѯ���</div>
			<table class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td height="28"   align="center">ѧ�� </td>
				<td   align="center">����</td>
				<td   align="center">����</td>
				<td   align="center">�Ա�</td>
				<td   align="center">����ϵ</td>
				<td   align="center">�༶</td>
				<td   align="center">&nbsp;</td>
				<td   align="center">&nbsp;</td>
			</tr>
			<?php 
       while($row=mysql_fetch_array($result)){
	?>
			<tr>
				<td   align="center">
					<?php echo stripslashes($row['sid']);?>
				</td>
				<td   align="center">
					<?php echo stripslashes($row['sname']);?>
				</td>
				<td   align="center">
					<?php echo stripslashes($row['sage']);?>
				</td>
				<td   align="center">
					<?php echo stripslashes($row['ssex']);?>
				</td>
				<td   align="center">
					<?php echo stripslashes($row['sdept']); ?>
				</td>
				<td   align="center">
					<?php echo stripslashes($row['sclass']); ?>
				</td>
				<td   align="center"><a href="delete_sinfo.php">ɾ��</a>
				</td>
				<td   align="center"><a href="change_sinfo.php">�޸�</a>
				</td>
			</tr>
			<?php
			//$_SESSION['deletesid'] = $sid;
			}
			?>
		</table>
		</div>

	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>