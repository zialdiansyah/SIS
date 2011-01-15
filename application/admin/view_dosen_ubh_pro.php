<?php
	include("connect.php")
	$id = $_GET[id];
	$kode_dosen = $_POST['kode_dosen'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	
	$sql1 = "update tbl_dosen set kode_dosen = '$kode_dosen', nama = '$nama', email = '$email' where id_dosen = 'id' ";
	mysql_query($sql1) or die (mysql_error());
	
	header('Location:index.php');
?>
