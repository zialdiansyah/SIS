<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_SESSION['id'];
	$sql1 =
	"select m.nim, m.nama, pt.judul, pp.id_p_proposal, ps.id_p_s_prasidang
	from tbl_mahasiswa m, tbl_p_topik pt, tbl_p_proposal pp, tbl_progres_skripsi ps
	where
	m.nim = pt.nim &&
	pt.id_p_topik = pp.id_p_topik &&
	pp.id_p_proposal = ps.id_p_proposal &&
	(ps.pembimbing_1 = '$id' ||
	ps.pembimbing_2 = '$id') &&
	ps.stat_1 > 0 &&
	ps.stat_2 > 0
	order by m.nim asc";
	$result1 = mysql_query($sql1) or die (mysql_error());
	$i = 0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Daftar Sidang</title>
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
		<li><a href="mahasiswa.php">home</a></li>
		<li><a href="profile_mhs.php">profile</a></li>
	</ul>
	
	</div>					
			
	<!-- content-wrap starts here -->
	<div id="content-wrap">
		
		<div id="main">				
			<table border="1">
				<tr>
					<th>no.</th>
					<th>nim</th>
					<th>nama</th>
					<th>judul skripsi</th>
					<th>aksi</th>
				</tr>
				<?php while($data1 = mysql_fetch_array($result1))
					{
						$i++;
				?>
				<tr>
					<td><?php echo("$i"); ?></td>
					<td><?php echo("$data1[nim]"); ?></td>
					<td><?php echo("$data1[nama]"); ?></td>
					<td><?php echo("$data1[judul]"); ?></td>
					<td><a href="daf_sidang_upt.php?id=<?php echo("$data1[id_p_s_prasidang]"); ?>">[update]</a> || <a href="#">log</a> || <a href="#">[detail]</a></td>
				</tr>
				<?php }	?>
			</table>
			<br />
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
