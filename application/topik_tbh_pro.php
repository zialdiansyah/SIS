<?php
	session_start();
	include("../system/connect.php");
	
	$judul = $_POST['judul'];
	$abstrak = $_POST['abstrak'];
	
	$sql1 = 
	"insert into tbl_list_topik values('', '$judul', '$abstrak', '') ";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Topik</title>
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
			<?php
			if(!empty($judul) && !empty($abstrak)) {
				$input = $result1 = mysql_query($sql1) or die (mysql_error());
				echo("Terima kasih. Topik anda telah terdaftar.");
			}
			else {
				echo("maaf, coba ulangi kembali!");
			}
	
			?>
			<br />
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
