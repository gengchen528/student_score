<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>ѧ����Ϣ¼��</title>
</head>

<body>
	<center>
		<h1>����¼����</h1>
		<?php
		$sid = $_POST[ 'sid' ];
		$sname = $_POST[ 'sname' ];
		$sage = $_POST[ 'sage' ];
		$ssex = $_POST[ 'ssex' ];
		$school = $_POST[ 'school' ];
		$sdept = $_POST[ 'sdept' ];
		$sclass = $_POST[ 'sclass' ];
		if ( !$sid || !$sname || !$sage || !$ssex || !$school || !$sclass ) {
			echo "<script> alert('������������');</script>";
			echo "<script> window.location='insert_sinfo1.php';</script>";
			exit;
		} else {

			$sid = addslashes( $sid );
			$sname = addslashes( $sname );
			$sage = addslashes( $sage );
			$ssex = addslashes( $ssex );
			$sdept = addslashes( $sdept );
			$spassword = addslashes( $sid );
include("connect.php");
			$sql = "select sid from student where sid='" . $sid . "'";
			$result = mysql_query( $sql, $conn )or die( '�鲻��' );
			if ( $result ) {
				echo "<script> alert('������¼�룡');</script>";
				echo "<script> window.location='insert_sinfo1.php';</script>";
			}
			$sql1 = "insert into student values('" . $sid . "','" . $sname . "','" . $sage . "','" . $ssex . "','" . $sdept . "','" . $school . "','" . $sclass . "','" . $spassword . "')";
			$result1 = mysql_query( $sql1, $conn )or die( '�鲻��' );
			if ( $result1 ) {
				echo "<script> alert('����ɹ���');</script>";
				echo "<script> window.location='insert_sinfo1.php';</script>";
			} else {
				echo "����ʧ��";
			}
		}
		?>
	</center>
</body>

</html>