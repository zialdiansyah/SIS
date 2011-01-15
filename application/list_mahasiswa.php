<?php
	session_start();
	include("../system/connect.php");
	include("library/func_common.php");
	
	
	
	$sql1 = "select * from tbl_mahasiswa";
	$result1 = mysql_query($sql1) or die (mysql_error());
	$i=0;
	?>
<head>
<title>List</title>
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
			<h2>Data Mahasiswa</h2><br />
	
			<form action="" method="get">
				Cari : <input type="text" name="cari" />
				<input type="button" value="mulai" />
			</form>
			<fieldset>
				<table border="1">
					<tr>
						<th>No.</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Angkatan</th>
						<th>E-mail</th>
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
						<td><?php echo("$data1[angkatan]"); ?></td>
						<td><?php echo("$data1[email]"); ?></td>
						<td><a href="list_mahasiswa_dtl.php">detail</a></td>
					</tr>
					<?php } ?>
				</table>
			<input type="button" onclick="self.history.back()" value="kembali"  />
			</fieldset>
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
