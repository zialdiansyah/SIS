<?php	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "p_sis1";
	
	mysql_connect($server, $username, $password) or die ("Koneksi gagal: ".mysql_error());
	mysql_select_db($database) or die ("Database tidak ditemukan: ".mysql_error());
?>
