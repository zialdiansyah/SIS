<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_GET['id'];
	$sql1 =
	"select * from tbl_progres_skripsi where id_p_proposal = '$id'";
	$result1 = mysql_query($sql1) or die (mysql_error());
	$data1 = mysql_fetch_array($result1);
	
	$sql2 =
	"select	m.nim, m.nama, pt.judul, 
			(select d.nama
			from tbl_dosen d, tbl_progres_skripsi ps
			where
			d.id_dosen = ps.pembimbing_1 &&
			ps.pembimbing_1 = '$data1[pembimbing_1]') as pembimbing_1, 
			(select d.nama
			from tbl_dosen d, tbl_progres_skripsi ps
			where
			d.id_dosen = ps.pembimbing_2 &&
			ps.pembimbing_2 = '$data1[pembimbing_2]') as pembimbing_2, ps.stat_pem_1, ps.stat_pem_2
	from
	tbl_mahasiswa m, tbl_p_topik pt, tbl_p_proposal pp, tbl_progres_skripsi ps
	where
	m.nim = pt.nim &&
	pt.id_p_topik = pp.id_p_topik &&
	pp.id_p_proposal = ps.id_p_proposal &&
	ps.id_p_proposal = '$id'";
	$result2 = mysql_query($sql2) or die (mysql_error());
	$data2 = mysql_fetch_array($result2);
	
	if($data2['stat_pem_1']==0 && $data2['stat_pem_2']==0)
	{
		$status = "not allowed";
	}
	else
	{
		$status = "allowed";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Proses Skripsi</title>
<link type="text/css" rel="stylesheet" href="../layout/images/CoolWater.css" media="screen">
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
		
	<!--header -->
	<div id="header">
				
		<h1 id="logo-text">Sistem Informasi Skripsi</h1>		
			
		<div id="header-links">
			<p>
			<?php 
				echo $_SESSION['id']; ?> | 
			<a href="logout.php">Logout</a>			
			</p>		
		</div>		
						
	</div>
		
	<!-- navigation -->	
	<div  id="menu">
		<ul>
		<li><a href="#">home</a></li>
		<li><a href="profile_mhs.php">profile</a></li>
	</ul>
	
	</div>					
			
	<!-- content-wrap starts here -->
	<div id="content-wrap">
		
		<div id="main">				
			<table>
				<tr>
					<td>nim</td>
					<td>:</td>
					<td><?php echo("$data2[nim]"); ?></td>
				</tr>
				<tr>
					<td>nama</td>
					<td>:</td>
					<td><?php echo("$data2[nama]"); ?></td>
				</tr>
				<tr>
					<td>judul</td>
					<td>:</td>
					<td><?php echo("$data2[judul]"); ?></td>
				</tr>
				<tr>
					<td>pembimbing 1</td>
					<td>:</td>
					<td><?php echo("$data2[pembimbing_1]"); ?></td>
				</tr>
				<tr>
					<td>pembimbing 2</td>
					<td>:</td>
					<td><?php echo("$data2[pembimbing_2]"); ?></td>
				</tr>
				<tr>
					<td>status prasidang</td>
					<td>:</td>
					<td><?php echo("$status"); ?></td>
				</tr>
			</table>
			<input type="button" onclick="self.history.back()" value="kembali" />
		</div>
		<div id="sidebar">
			<h2>Sidebar Menu</h2>
			<ul class="sidemenu">
			<li><a href="form_topik.php">Pengajuan topik</a></li>
			<li><a href="form_prop.php">Pengajuan proposal</a></li>
			<li><a href="#">Bimbingan</a></li>
			<li><a href="form_prop.php">Skripsi</a></li>
			</ul>	
		</div>
				
	<!-- content-wrap ends here -->	
	</div>
					
	<!--footer starts here-->
	<div id="footer">
			
		<p>
		&copy; 2011 <strong>SIS ver 1.0</strong> |
		<a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
		</p>	
	</div>	

<!-- wrap ends here -->
</div>

</body>
</html>
