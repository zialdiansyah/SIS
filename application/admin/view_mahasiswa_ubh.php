<?php
	include("connect.php");
	
	$id = $_GET[id];
	
	$sql1 = "select * from tbl_mahasiswa where nim = '$id' ";
	$result1 = mysql_query($sql1) or die (mysql_error());
	$data = mysql_fetch_array($result1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	ubah data<br />
	<form action="view_mahasiswa_ubh_pro.php" method="post">
	<table border="1">
		<tr>
			<td>kode dosen</td>
			<td>:</td>
			<td><input type="text" name="nim" value="<?php echo("$data[nim]"); ?>" /></td>
		</tr>
		<tr>
			<td>nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo("$data[nama]"); ?>" /></td>
		</tr>
		<tr>
			<td>angkatan</td>
			<td>:</td>
			<td><input type="text" name="angkatan" value="<?php echo("$data[angkatan]"); ?>" /></td>
		</tr>
		<tr>
			<td>email</td>
			<td>:</td>
			<td><input type="text" name="email" value="<?php echo("$data[email]"); ?>" /></td>
		</tr>
	</table>
	</form>
	<input type="button" onclick="self.history.back()" value="kembali" />
</body>
</html>
