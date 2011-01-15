<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_POST['id'];
	$komen = $_POST['komen'];
	$status = $_POST['stat'];
	

	$sql1 = 
	"update tbl_p_topik set status = '$status', komen = '$komen' where id_p_topik = '$id' ";
	
	$result1 = mysql_query($sql1) or die (mysql_error());
	
	header('Location:dosen_1.php');
?>