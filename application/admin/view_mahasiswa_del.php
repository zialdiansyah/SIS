<?php
	session_start();
	include("connect.php");
	
	$nim = $_GET[nim];
	
	$sql1 = "delete from tbl_mahasiswa where nim = '$nim' ";
	mysql_query($sql1) or die (mysql_error();
	
	header('Location:index.php');
?>
