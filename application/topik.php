<?php
	session_start();
	include("../system/connect.php");
	
	$query1 = "select * from tbl_list_topik";
	$result1 = mysql_query($query1);
	
	$i = 0;
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
			<h2>List Topik</h2>
			<fieldset>
				<label><a href="topik_tbh.php">tambah topik</a></label>
				<table border="1">
				<tr>
					<th>No.</th>
					<th>Judul</th>
					<th>Abstraksi</th>
					<th>aksi</th>
				</tr>
			<?php while($data1 = mysql_fetch_array($result1)) {
				$i++;
			?>
				<tr>
					<td><?php echo("$i"); ?></td>
					<td><?php echo("$data1[judul]"); ?></td>
					<td><?php echo("$data1[abstrak]"); ?></td>
					<td><a href="#">edit</a> | <a href="#">hapus</a></td>
				</tr>
			<?php } ?>
				</table>
			</fieldset>
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
