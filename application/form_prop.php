<?php
	session_start();
	include("../system/connect.php");
	
	$nim = $_SESSION['id'];
	
	$sql1 = "select * from tbl_p_topik where nim = $nim";
	$result1 = mysql_query($sql1) or die (mysql_error());
	$data1 = mysql_fetch_array($result1);
	
	$sql2 = "select * from tbl_p_proposal ";
	$result2 = mysql_query($sql2) or die(mysql_error());
	$data2 = mysql_fetch_array($result2);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Upload Proposal</title>
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
		<li><a href="mahasiswa.php">home</a></li>
		<li><a href="profile_mhs.php">profile</a></li>
	</ul>
	
	</div>					
			
	<!-- content-wrap starts here -->
	<div id="content-wrap">
		
		<div id="main">				
			<h2>silahkan upload file proposal anda</h2>
			<br />
			<form method="post" action="upload_file.php" enctype="multipart/form-data">
				<input type="hidden" name="id_p_topik" value="<?php  echo("$data1[id_p_topik]"); ?>" />
				<label>judul topik :</label><br />
				<input disabled="disabled" type="text" value="<?php echo("$data1[judul]"); ?>" /><br />
				<label>deskripsi</label><br />
				<textarea disabled="disabled" rows="20" cols="75" name="abstrak"><?php echo("$data1[abstrak]"); ?></textarea><br />
				<label>select file :</label>
				<input type="file" name="fupload" />
				<input type="submit" value="upload" />
			</form>
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
