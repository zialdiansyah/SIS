<?php
	session_start();
	include("connect.php");
	
	$id = $_GET[id_dosen];
	
	$sql1 = "delete from tbl_dosen where id_dosen = '$nim' ";
	mysql_query($sql1) or die (mysql_error();
	
	header('Location:index.php');
?>