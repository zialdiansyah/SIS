<?php
	session_start();
	if(isset($_SESSION['id']) || isset($_SESSION['user']))
	{
		include("../system/connect.php");
	
	
	}
?>
<?php
	session_start();
	if(isset($_SESSION['id']) || isset($_SESSION['user']))
	{
		include("../system/connect.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
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
		<li><a href="dosen_1.php">home</a></li>
		<li><a href="">profile</a></li>
	</ul>
	
	</div>					
			
	<!-- content-wrap starts here -->
	<div id="content-wrap">
		
		<div id="main">				
			<h2>Dosen</h2>
		</div>
		<div id="sidebar">
			<h2>Sidebar Menu</h2>
			<ul class="sidemenu">
			<li><a href="list_mahasiswa.php">Lihat daftar mahasiswa</a></li>
			<li><a href="daf_bimbingan.php">Daftar bimbingan</a></li>
			<li><a href="cek_topik.php">Topik</a></li>
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
<?php
	}
	else
	{
		header('Location:login.php');
	}
?>