<?php
session_start();
$sid = $_POST[ 'sid' ];
if(!$sid )
{
   echo "<script> alert('���������֤�ţ�');</script>";
   echo "<script> window.location='admin_result.php';</script>";
}
include("connect.php");
//if($condition=="")	
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
	include("header.php");
	?>
	<div class="main-content">
	<form name="form1" method="post">
	<div class="search_tip">ѧ����Ϣ��ѯ</div>
	<table class="table search" width="1000" cellspacing="0" cellpadding="0" align="center">
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
				<div class="search_tip"> ������Ϣ</div>
				<table class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
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
	</form>
	<div class="search_tip">��ѯ���</div>
		<table class="table" width="1000" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td width="110" height="28" >ѧ�� </td>
				<td width="136"   >����</td>
				<td width="132"   >�γ̺�</td>
				<td width="115"   >��Ŀ</td>
				<td width="111"   >����</td>
				<td width="67"   >&nbsp;</td>
				<td width="66"   >&nbsp;</td>
			</tr>
			<?php 
	    while($row=mysql_fetch_array($result)){
	?>
			<tr>
				<td   >
					<?php echo stripslashes($row['sid']);?>
				</td>
				<td   >
					<?php echo stripslashes($row['sname']);?>
				</td>
				<td   >
					<?php echo stripslashes($row['cid']);?>
				</td>
				<?php
				$_SESSION[ 'changcid' ] = $row[ 'cid' ];
				?>
				<td   >
					<?php echo stripslashes($row['cname']);?>
				</td>
				<td   >
					<?php echo stripslashes($row['sgrade']); ?>
				</td>
				<td   ><a href="delete_grade.php">ɾ��</a>
				</td>
				<td   ><a href="change_grade.php">�޸�</a>
				</td>
			</tr>
			<?php
			}
			$_SESSION[ 'deletesid' ] = $sid;
			//$_SESSION['changcid']=$cid;
			?>
		</table>
	
	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>