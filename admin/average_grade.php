<?php
session_start();
$sid = $_POST[ 'sid' ];
if ( !$sid ) {
	echo "<script> alert('���������֤�ţ�');</script>";
	echo "<script> window.location='admin_result.php';</script>";
}
include("connect.php");
//if($condition=="")	
$sql = "select sid,sname,avg(sgrade),max(sgrade),min(sgrade) from grade ";
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

	function tosubmit3() {
		document.form1.action = "average_grade.php";
		document.form1.submit();
	}

	function tosubmit4() {
		document.form1.action = "max_min_grade.php";
		document.form1.submit();
	}

	function tosubmit5() {
		document.form1.action = "search_lowgrade.php";
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
		<table width="767" height="324" border="0" align="center">
			<td colspan="7"  >
				<table width="521" height="109" border="0" align="center">
					<tr>
						<td width="89">ѧ�ţ�</td>
						<td width="422">
							<input type="text" name="sid" value="<?php echo "$sid"?>"/>
						</td>
					</tr>
					<tr>
						<td>��ѯ������</td>
						<td>
							<input name="submit1" type="submit" value="�ɼ�" onclick="tosubmit1()"/>
							<input name="submit2" type="submit" value="ѧ����Ϣ" onclick="tosubmit2()"/>
							<input name="submit3" type="submit" value="ƽ���ɼ�" onclick="tosubmit3()"/>
							<input name="submit5" type="submit" value="������ɼ�" onclick="tosubmit5()"/>
						</td>
					</tr>
				</table>
			</td>
			<tr>
				<td colspan="7"  >
					<table width="645" height="22" border="0">
						<tr>
							<td width="81">ѧ�ţ�
								<?php echo "$sid"?>
							</td>
							<td width="73">������
								<?php $sql1 = "select * from student where sid = '".$sid."'";
		                            $result1 = mysql_query($sql1,$conn)or die('�鲻��');
		                            $row1=mysql_fetch_array($result1);
		                            echo "$row1[1]";?>
							</td>
							<td width="92">�༶��
								<?php echo "$row1[6]"; ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width="110" height="28"   align="center">ѧ�� </td>
				<td width="136"   align="center">����</td>
				<td width="111"   align="center">ƽ���ɼ�</td>
				<td width="111"   align="center">��߳ɼ�</td>
				<td width="111"   align="center">��ͳɼ�</td>
				<td width="67"  >&nbsp;</td>
				<td width="66"  >&nbsp;</td>
			</tr>
			<?php 
	    while($row=mysql_fetch_array($result)){
	?>
			<tr>
				<td   align="center">
					<?php echo "$row[0]";?>
				</td>
				<td   align="center">
					<?php echo "$row[1]";?>
				</td>
				<td   align="center">
					<?php echo "$row[2]"; ?>
				</td>
				<td   align="center">
					<?php echo "$row[3]"; ?>
				</td>
				<td   align="center">
					<?php echo "$row[4]"; ?>
				</td>
				<td   align="center"><a href="delete_grade.php">ɾ��</a>
				</td>
				<td   align="center"><a href="change_grade.php">�޸�</a>
				</td>
			</tr>
			<?php
			}
			$_SESSION[ 'deletesid' ] = $sid;
			//$_SESSION['changcid']=$cid;
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