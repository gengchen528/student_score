<?php
	$conn = mysql_connect("localhost","root","root")or die('�������ݿ�ʧ��');
    $selected = mysql_select_db("studentscore",$conn)or die('û�д���');
	mysql_query("set names gb2312");
?>