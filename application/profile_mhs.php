<?php 
	session_start();
	include("../system/connect.php");
	
	$nim = $_SESSION['id'];
	$query1 = "select * from tbl_mahasiswa where nim = '$nim' ";
	$result1 = mysql_query($query1);
	$data = mysql_fetch_array($result1);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" rel="stylesheet" href="../layout/images/CoolWater.css" media="screen">
<title>Profile</title>
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
				echo $_SESSION['nama']; ?> | 
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
			<h2>profile</h2>
			<br />
			<fieldset>
				<legend>Data</legend>
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
							<td>Angkatan</td>
							<td>:</td>
							<td><?php echo("$data[angkatan]"); ?></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td>:</td>
							<td><?php echo("$data[email]"); ?></td>
						</tr>
						<tr>
							<td><a href="profile_mhs_edit.php?id=<?php echo("$data[nim]"); ?> ">Edit</a></td>
						</tr>
						</table>
						
						<input type="button" onclick="self.history.back()" value="kembali" />
			</fieldset>
		</div>
		<div id="sidebar">
			<h2>Sidebar Menu</h2>
			<ul class="sidemenu">
			<li><a href="form_topik.php">Pengajuan topik</a></li>
			<li><a href="form_prop.php">Pengajuan proposal</a></li>
			<li><a href="#">Bimbingan</a></li>
			<li><a href="">Skripsi</a></li>
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
