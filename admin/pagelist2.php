<?php
// Page��ҳ���� 
$page = $_GET["page"];
$sid = $_GET[ 'sid' ] ;
$sname = $_GET[ 'sname' ];
$sschool = $_GET[ 'school' ];
$sdept = $_GET[ 'sdept' ];
$sclass = $_GET[ 'sclass'];
$cdate = $_GET[ 'cdate' ];
function Page($rows,$page_size){
	$address=$_SERVER["QUERY_STRING"];
global $page,$select_from,$select_limit,$pagenav; 
$page_count = ceil($rows/$page_size); 
if($page <= 1 || $page == '') $page = 1; 
if($page >= $page_count) $page = $page_count; 
$select_limit = $page_size; 
$select_from = ($page - 1) * $page_size.','; 
$pre_page = ($page == 1)? 1 : $page - 1; 
$next_page= ($page == $page_count)? $page_count : $page + 1 ; 
$pagenav .= "�� $page/$page_count ҳ �� $rows ����¼ "; 
$pagenav .= '<a href=?'.$address.'&page=1>��ҳ</a>'; 
$pagenav .= '<a href=?'.$address.'&page='.$pre_page.'>ǰһҳ</a> '; 
$pagenav .= '<a href=?'.$address.'&page='.$next_page.'>��һҳ</a> '; 
$pagenav .= '<a href=?'.$address.'&page='.$page_coun.'>ĩҳ</a>'; 
 

} // Page��ҳ���� 
?>