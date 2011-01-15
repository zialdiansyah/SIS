<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_POST['id'];
	$peng1 = $_POST['pem1'];
	$peng2 = $_POST['pem2'];
	
	$sql1 =
	"insert into tbl_progres_skripsi
	(id_p_proposal, pembimbing_1, pembimbing_2)
	values
	('$id', '$peng1', '$peng2')";
	mysql_query($sql1) or die (mysql_error());
	
	header('Location:progres_skripsi.php');
?>