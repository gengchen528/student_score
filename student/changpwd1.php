<?php

session_start();
$sid = $_SESSION[ 'customer_user' ];
$conn = mysql_connect( "localhost:3306", "root", "root" )or die( '�������ݿ�ʧ��' );
$selected = mysql_select_db( "studentscore", $conn )or die( '�������ݿ�ʧ��!!' );
mysql_query( "SET NAMES 'gb2312'" );
$sql = "select * from grade where sid = '" . $sid . "'";
$result = mysql_query( $sql, $conn )or die( '�鲻��' );
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>�޸�����</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php include("header.php");
	?>
	<div class="main-content">
		<form action="changpwd.php" method="post">
		<div class="content">
			<table width="431" height="254" border="0" align="center">
				<tr>
					<td width="106">ԭ���룺</td>
					<td width="315"><input type="password" name="password"/>
					</td>
				</tr>
				<tr>
					<td>�����룺</td>
					<td><input name=txt_regpwd type=password id="txt_regpwd" size=20 maxlength=75/>
					</td>
				</tr>
				<tr>
					<td>�ٴ����������룺</td>
					<td><input name='txt_regpwd2' type=password id="txt_regpwd2" size=20 maxlength=75 onblur="if(this.value!=this.form.txt_regpwd.value) {alert('��������������벻һ�£�');myform.txt_regpwd.focus();}"/>
					</td>
				</tr>
				<tr>
					<td><input name="submit2" type="submit" value="�� ��" onclick="tosubmit"/>
					</td>
					<td><input name="Submit2" type="reset" class="btn_grey" value="�� ��"/>
					</td>
				</tr>
			</table>
			</div>
		</form>
	</div>
	<?php 
	include("footer.php");
	?>
</body>

</html>