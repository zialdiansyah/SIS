<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_GET['id'];
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
			<form method="post" action="daf_sidang_upt_pro.php">
			<input type="hidden" name="id" value="<?php echo("$id"); ?>" />
			<h2>tentukan tgl dan ruangan & penguji</h2>
			<br />
			<fieldset>
			<!--<label>tanggal:</label><br />
			<input type="text" name="tgl" /><br /> -->
			
			<label>ruangan:</label>
			<select name="ruangan">
				<option value="0" selected="selected">--ruangan--</option>
				<?php
					for($i=201; $i<=207; $i++)
					{
						echo("<option value=IK$i>IK$i</option>");
					}
				?>
			</select>
			<br />
			<br />
			<h2>tentukan penguji sidang</h2>
			<br />
			<select name="pen1">
				<?php
					echo "<option value=0 selected>--penguji 1--</option>";
					$sql3 = "select * from tbl_dosen";
					$result3 = mysql_query($sql3) or die (mysql_error());
					while ($data3 = mysql_fetch_array($result3))
					{
						echo("<option value='".$data3['id_dosen']."'>".$data3['nama']."</option>");
					}
				?>
			</select>
			 | 
			<select name="pen2">
				<?php
					echo "<option value=0 selected>--penguji 1--</option>";
					$sql3 = "select * from tbl_dosen";
					$result3 = mysql_query($sql3) or die (mysql_error());
					while ($data3 = mysql_fetch_array($result3))
					{
						echo("<option value='".$data3['id_dosen']."'>".$data3['nama']."</option>");
					}
				?>
			</select>
			 | 
			<select name="pen3">
				<?php
					echo "<option value=0 selected>--penguji 3--</option>";
					$sql3 = "select * from tbl_dosen";
					$result3 = mysql_query($sql3) or die (mysql_error());
					while ($data3 = mysql_fetch_array($result3))
					{
						echo("<option value='".$data3['id_dosen']."'>".$data3['nama']."</option>");
					}
				?>
			</select>
			<hr />
			<input type="submit" value="update" />
			</form><br />
			</fieldset>
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
