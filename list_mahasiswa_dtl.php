<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_GET['id'];
	$sql1 = " 
	select m.nim, m.nama, pt.judul, pt.abstrak, pt.komen
	from 
	tbl_mahasiswa m, tbl_p_topik pt
	where
	m.nim = pt.nim &&
	m.nim = '$id'";
	
	$result1 = mysql_query($sql1) or die (mysql_error());
	$data1 = mysql_fetch_array($result1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<table border="1">
		<tr>
			<th>nim</th>
			<th>nama</th>
			<th>judul</th>
			<th>abstrak</th>
			<th>komentar</th>
			<th>&nbsp;</th>
		</tr>
		<tr>
			<td><?php echo("$data1[nim]"); ?></td>
			<td><?php echo("$data1[nama]"); ?></td>
			<td><?php echo("$data1[judul]"); ?></td>
			<td><?php echo("$data1[abstrak]"); ?></td>
			<td><?php echo("$data1[komen]"); ?></td>
			<td><a href="form_k_topik.php">tambah komentar</a></td>
		</tr>
	</table>
</body>
</html>
