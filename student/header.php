<div class="header">
		<div class="banner">
			<div id="logo">
				<a>
                    <img src="pic/logo_school.png" alt="" width="210" height="48" />
            </a>
			
				<div class="title">
					<h2>�Ϸ�ʦ��ѧԺ������ȼ����Գɼ���ѯϵͳ</h2>
				</div>
			</div>
		</div>
		<div style="width: 1178px;margin: 0 auto;text-align: left;padding-left: 20px;border-left: 1px solid black;border-right: 1px solid black">
			<span class="STYLE4">��ӭ����</span>
					<font color=red>
						<?php 
	$sql1 = "select * from student where sid = '".$sid."'";
    $result1 = mysql_query($sql1,$conn)or die('�鲻��');
	$row = mysql_fetch_array($result1);
	echo $row[1] ;
	?>
					</font>
					<font color="red">
						<?PHP
						date_default_timezone_set( "PRC" );
						echo date( "Y.m.d" );
						?>
					</font>
		</div>
		<div class="stu-menu">
			<ul>
				<li><a href="student_result.php">�ɼ���ѯ</a>
				</li>
				<li><a href="student_bitems.php?page=1">������ѯ</a>
				</li>
				<li><a href="search_certificate.php">֤���ѯ</a>
				</li>
				<li><a href="search_info.php">������Ϣ</a>
				</li>
				<li><a href="changpwd1.php">�޸�����</a>
				</li>
				<li><a href="../index.php">��ȫ�˳�</a>
				</li>
			</ul>
		</div>
	</div>