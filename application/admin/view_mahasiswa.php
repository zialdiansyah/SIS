<?php
	include("connect.php");
	
	$sql1 = "select * from tbl_mahasiswa";
	$result1 = mysql_query($sql1) or die (mysql_error());
	
	$i = 0;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	list mahasiswa<br />
	<table border="1">
		<tr>
			<th>no.</th>
			<th>nim</th>
			<th>nama</th>
			<th>angkatan</th>
			<th>email</th>
			<th>aksi</th>
		</tr>
		<?php while($data = mysql_fetch_array($result1))
		{ 
			$i++;
		?>
		<tr>
			<td><?php echo("$i"); ?></td>
			<td><?php echo("$data[nim]"); ?></td>
			<td><?php echo("$data[nama]"); ?></td>
			<td><?php echo("$data[angkatan]"); ?></td>
			<td><?php echo("$data[email]"); ?></td>
			<td><a href="view_mahasiswa_ubh.php?id=<?php echo("$data[nim]"); ?>">edit</a> | <a href="view_mahasiswa_del.php?id=<?php echo("$data[nim]"); ?>">hapus</a></td>
		</tr>
		<?php } ?>
	</table>
	<input type="button" onclick="self.history.back()" value="kembali" />
</body>
</html>
