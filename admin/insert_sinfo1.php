<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
	<title>¼���µ�ѧ��</title>
	<link rel="stylesheet" href="Style/style.css">
</head>

<body>
	<?php
	include( "header.php" );
	?>
	<div class="main-content">
		<form action="insert_sinfo.php" method="post">
			<div class="content">
				<div class="content-name">
					<h2>¼���µ�ѧ��</h2>
				</div>
				<table width="431" height="280" border="0" align="center">
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
						<td>���䣺</td>
						<td><input type="text" name="sage"/>
						</td>
					</tr>
					<tr>
						<td>�Ա�</td>
						<td>
							<select name="ssex">
								<option value="��">��</option>
								<option value="Ů">Ů</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>���ڵ�ϵ��</td>
						<td>
							<select name="school" id="typeId">
								<?php
								$conn = mysql_connect( "localhost:3306", "root", "root" )or die( '�������ݿ�ʧ��' );
								$selected = mysql_select_db( "studentscore", $conn )or die( '�������ݿ�ʧ��!!' );
								mysql_query( "SET NAMES 'gb2312'" );
								$sql = mysql_query( "select * from school" );
								$info = mysql_fetch_array( $sql );
								do {
									?>
								<option value="<?php echo $info['sschool'];?>">
									<?php echo $info['sschool'];  ?>
								</option>
								<?php }while($info=mysql_fetch_array($sql));?>
							</select>
						</td>
					</tr>
					<tr>
						<td>���ڵ�רҵ��</td>
						<td>
							<select name="sdept">
								<?php
								$school = $_POST[ 'school' ];
								$sql1 = mysql_query( "select * from sdept" );
								$info1 = mysql_fetch_array( $sql1 );
								do {
									?>
								<option value="<?php echo $info1['sdept'];?>">
									<?php echo $info1['sdept'];?>
								</option>
								<?php }while($info1=mysql_fetch_array($sql1));?>
							</select>
						</td>
					</tr>
					<tr>
						<td>�༶��</td>
						<td>
							<select name="sclass">
								<?php
								$sql2 = mysql_query( "select * from class" );
								$info2 = mysql_fetch_array( $sql2 );
								do {
									?>
								<option value="<?php echo $info2['sclass'];?>">
									<?php echo $info2['sclass'];?>
								</option>
								<?php }while($info2=mysql_fetch_array($sql2));?>
							</select>
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