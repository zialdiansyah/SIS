<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_GET['id'];
	
	$sql1 =
	"select m.nim, m.nama, pt.judul, ps.id_p_s_prasidang
	from tbl_mahasiswa m, tbl_p_topik pt, tbl_p_proposal pp, tbl_progres_skripsi ps
	where
	m.nim = pt.nim &&
	pt.id_p_topik = pp.id_p_topik &&
	pp.id_p_proposal = ps.id_p_proposal &&
	ps.id_p_s_prasidang = '$id'";
	$result1 = mysql_query($sql1) or die (mysql_error());
	$data1 = mysql_fetch_array($result1);
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Komentar Prasidang</title>
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
		<li><a href="dosen.php">home</a></li>
		<li><a href="profile_mhs.php">profile</a></li>
	</ul>
	
	</div>					
			
	<!-- content-wrap starts here -->
	<div id="content-wrap">
		
		<div id="main">				
			<h2>Komentar Prasidang Mahasiswa</h2><br />
			<label>nim:</label> <input type="text" value="<?php echo("$data1[nim]"); ?>" disabled="disabled" /><br />
			<label>nama:</label> <input type="text" value="<?php echo("$data1[nama]"); ?>" disabled="disabled" /><br />
			<label>kelas:</label> <input type="text" value="<?php echo("$data1[judul]"); ?>" disabled="disabled" /><br />
			<br />
			<form action="komen_prasidang_pro.php" method="post">
			<input type="hidden" name="id" value="<?php echo("$id"); ?>" />
			<textarea name="komen" cols="50" rows="20"></textarea><br />
			<input type="submit" value="submit" /><br />

			<input type="button" onclick="self.history.back()" value="kembali" />
		</div>
		<div id="sidebar">
			<h2>Sidebar Menu</h2>
			<ul class="sidemenu">
			
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
