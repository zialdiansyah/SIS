<?php
	session_start();
	include("../system/connect.php");
	
	$sql1 = " select m.nim, m.nama, pt.judul, pt.abstrak, pt.komen
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
<title>List Mahasiswa</title>
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
				echo $_SESSION['user']; ?> | 
			<a href="logout.php">Logout</a>			
			</p>		
		</div>		
						
	</div>
		
	<!-- navigation -->	
	<div  id="menu">
		<ul>
		<li><a href="dosen.php">home</a></li>
		<li><a href="profile_dsn.php">profile</a></li>
	</ul>
	
	</div>					
			
	<!-- content-wrap starts here -->
	<div id="content-wrap">
		
		<div id="main">				
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
					<td><?php echo("$data1[komen_topik]"); ?></td>
					<td><a href="form_k_topik.php">tambah komentar</a></td>
				</tr>
			</table>
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
