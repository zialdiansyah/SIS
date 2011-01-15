<?php
	include "../system/connect.php";
	$username = $_POST['username']; //menangkap hasil post dari input
	$password = md5($username);
	$status= $_POST[status];
	mysql_query("insert into tbl_pengguna (username, password, status) values(\"$username\", \"$password\", \"$status\")");
?>
<h2>Telah terdaftar</h2>
<input type="button" onclick="self.history.back()" value="Kembali"/>