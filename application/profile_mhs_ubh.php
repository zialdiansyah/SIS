<?php
	session_start();
	include("../system/connect.php");
	
	$nim = $_SESSION['id'];
	$user = $_SESSION['user'];
	
	$nama = $_POST['nama'];
	$angkatan = $_POST['angkatan'];
	$email = $_POST['email'];
	
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$password = md5($pass);
	
	$sql1 = "update tbl_mahasiswa set nama = '$nama', angkatan = '$angkatan', email = '$email', username = '$username' where nim = '$nim' ";
	mysql_query($sql1);
	$sql2 = "update tbl_pengguna set username = '$username', password = '$password' where username = '$user' ";
	mysql_query($sql2);
	
	header("Location:../application/mahasiswa.php");
?>