<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="Style/style.css">
</head>
<?php
$sid = $_GET['sid'];
$cid = $_GET['cid'];
include("connect.php");
$sql = "select * from grade where sid = '".$sid."' and cid = '".$cid."'";
$result = mysql_query($sql,$conn)or die('�鲻��');
?>
<body>
<?php
	include( "header.php" );
	?>
	<div class="main-content">
		<form action="insert_grade.php" method="post">
			<div class="content">
			
				<div class="content-name">
					<h2>�޸�ѧ���ĳɼ�</h2>
				</div>
				<table width="431" height="255" border="0" align="center">
					<?php 
	    while($row=mysql_fetch_array($result)){
	?>
					<tr>
						<td width="95">���֤�ţ�</td>
						<td width="320"><input type="text" name="sid" value="<?php echo stripslashes($row[0]);?>"/>
						</td>
					</tr>
					<tr>
						<td>������</td>
						<td><input type="text" name="sname" value="<?php echo stripslashes($row[1]);?>" />
						</td>
					</tr>
					<tr>
						<td>�γ̺��룺</td>
						<td><input type="text" name="cid" value="<?php echo stripslashes($row[2]);?>"/>
						</td>
					</tr>
					<tr>
						<td>��Ŀ��</td>
						<td><input type="text" name="cname" value="<?php echo stripslashes($row[3]);?>" />
						</td>
					</tr>
					<tr>
						<td>�ȼ���</td>
						<td><input type="text" name="ccredit" value="<?php echo stripslashes($row[6]);?>"  />
						</td>
					</tr>
					<tr>
						<td>������</td>
						<td><input type="text" name="sgrade" value="<?php echo stripslashes($row[4]);?>"  />
						</td>
					</tr>
					<tr>
						<td>�������ڣ�</td>
						<td><input type="text" name="cdate" value="<?php echo stripslashes($row[5]);?>"  />
						</td>
					</tr>
					
					<tr>
						<td><input type="submit" value="�ύ"/>
						</td>
						<td>&nbsp;</td>
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
