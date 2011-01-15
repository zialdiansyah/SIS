<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_GET['id'];
	
	$sql1 =
	"select m.nim, m.nama, pt.judul, pt.abstrak, up.nama_file, pp.status_proposal
	from
	tbl_mahasiswa m, tbl_p_topik pt, tbl_p_proposal pp, tbl_upload_proposal up
	where
	pt.id_p_topik = pp.id_p_topik &&
	m.nim = pt.nim &&
	pp.id_file = up.id_file &&
	pp.id_p_proposal = '$id'";
	$result1 = mysql_query($sql1) or die (mysql_error());
	$data = mysql_fetch_array($result1);
	
	if($data['status_proposal']==0)
	{
		$status = "waiting approval";
	}
	else if($data['status_proposal']==1)
	{
		$status = "approved";
	}
	else
	{
		$status = "rejected";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="../layout/images/CoolWater.css" media="screen">
</head>

<body>

			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo("$data[nim]"); ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo("$data[nama]"); ?></td>
				</tr>
				<tr>
					<td>Judul</td>
					<td>:</td>
					<td><?php echo("$data[judul]"); ?></td>
				</tr>
				<tr>
					<td>Abstrak</td>
					<td>:</td>
					<td><textarea disabled="disabled"><?php echo("$data[abstrak]"); ?></textarea></td>
				</tr>
				<tr>
					<td>Nama File</td>
					<td>:</td>
					<td><?php echo("$data[nama_file]"); ?></td>
				</tr>
				<tr>
					<td>Status</td>
					<td>:</td>
					<td><?php echo("$status"); ?></td>
				</tr>
			</table>
<input type="button" onclick="self.history.back()" value="kembali" />

</body>
</html>
