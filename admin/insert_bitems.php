<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>�ޱ����ĵ�</title>
</head>
<body>
<center>
<?php
		$bid = $_POST['bid'];
		$cid = $_POST['cid'];
		$cname = $_POST['cname'];
		$ccredit = $_POST['ccredit'];
		$start_time = $_POST['start_time'];
		$finish_time = $_POST['finish_time'];
		$status = $_POST['status'];
		if ( !$bid || !$cid || !$cname || !$ccredit || !$start_time || !$finish_time || !$status ) {
			echo "<script> alert('������������');</script>";
			echo "<script> window.location='insert_bitems1.php?page=1';</script>";
			exit;
		} else {
				$bid = addslashes($bid);
				$cid = addslashes($cid);
				$cname = addslashes($cname);
				$ccredit = addslashes($ccredit);
				$start_time = addslashes($start_time);
				$finish_time = addslashes($finish_time);
				$status = addslashes($status);
            include("connect.php");
			$sql = "select bid from bitems where bid='" . $bid . "'";
			$result = mysql_query( $sql, $conn )or die( '�鲻��' );
			if ( mysql_num_rows($result) >=1 ) {
				echo "<script> alert('����ظ�����������д��');</script>";
				echo "<script> window.location='insert_bitems1.php?page=1';</script>";
				exit;
			}
			$sql1 = "insert into bitems values('".$bid."','".$cid."','".$cname."','".$ccredit."','".$start_time."','".$finish_time."','".$status."')";
			$result1 = mysql_query( $sql1, $conn )or die( '�鲻��' );
			if ( $result1 ) {
				echo "<script> alert('����ɹ���');</script>";
				echo "<script> window.location='insert_bitems1.php?page=1';</script>";
			} else {
				echo "����ʧ��";
			}
		}
		?>
</center>
</body>
</html>
