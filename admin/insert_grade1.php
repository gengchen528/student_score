<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>¼��ѧ���ĳɼ�</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" );
	?>
	<div class="main-content">
		<form action="insert_grade.php" method="post">
			<div class="content">
				<div class="content-name">
					<h2>¼��ѧ���ĳɼ�</h2>
				</div>
				<table width="431" height="255" border="0" align="center">
					<tr>
						<td width="95">���֤�ţ�</td>
						<td width="320"><input type="text" name="sid"/>
						</td>
					</tr>
					<tr>
						<td>������</td>
						<td><input type="text" name="sname"/>
						</td>
					</tr>
					<tr>
						<td>��Ŀ��ţ�</td>
						<td><input type="text" name="cid"/>
						</td>
					</tr>
					<tr>
						<td>��Ŀ���ƣ�</td>
						<td><input type="text" name="cname"/>
						</td>
					</tr>
					<tr>
						<td>������</td>
						<td><input type="text" name="sgrade"/>
						</td>
					</tr>
					<tr>
						<td>�������ڣ�</td>
						<td><input type="text" name="cdate"/>
						</td>
					</tr>
					<tr>
						<td><input type="submit" value="�ύ"/>
						</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
		</form>
	</div>
	<?php
	include( "footer.php" );
	?>
</body>

</html>