<?php
	include("connect.php")
	$id = $_GET[id];
	$nim = $_POST['kode_dosen'];
	$nama = $_POST['nama'];
	$angkatan = $_POST['angkatan'];
	$email = $_POST['email'];
	
	$sql1 = "update tbl_dosen set nim = '$nim', nama = '$nama', angkatan = '$angkatan', email = '$email' where id_dosen = 'id' ";
	mysql_query($sql1) or die (mysql_error());
	
	header('Location:index.php');
?>
