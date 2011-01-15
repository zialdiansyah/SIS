<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_GET['id'];
	
	$sql1 =
	"select m.nim, m.nama, pt.judul, pp.id_p_proposal
	from
	tbl_mahasiswa m, tbl_p_topik pt, tbl_p_proposal pp
	where
	pt.id_p_topik = pp.id_p_topik &&
	m.nim = pt.nim &&
	pp.id_p_proposal = '$id' ";
	$result1 = mysql_query($sql1) or die (mysql_error());
	$data1 = mysql_fetch_array($result1);
?>

	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Proses Skripsi</title>
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
			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo("$data1[nim]"); ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo("$data1[nama]"); ?></td>
				</tr>
				<tr>
					<td>Judul</td>
					<td>:</td>
					<td><?php echo("$data1[judul]"); ?></td>
				</tr>
			</table>
			<br />
			<br />
		<p>Tentukan pembimbing skripsi</p><br />
			<fieldset>
				<form method="post" action="progres_skripsi_upt_pro.php">
				<input type="hidden" name="id" value="<?php echo("$id"); ?>" />
				<select name="pem1">
			<?php
				echo "<option value=0 selected>--pembimbing 1--</option>";
				$sql3 = "select * from tbl_dosen";
				$result3 = mysql_query($sql3) or die (mysql_error());
				while ($data3 = mysql_fetch_array($result3)) {
					echo("<option value='".$data3['id_dosen']."'>".$data3['nama']."</option>");
				}
			?>
				</select> | 
				<select name="pem2">
			<?php
				echo "<option value=0 selected>--pembimbing 2--</option>";
				$sql3 = "select * from tbl_dosen";
				$result3 = mysql_query($sql3) or die (mysql_error());
				while ($data3 = mysql_fetch_array($result3)) {
					echo("<option value='".$data3['id_dosen']."'>".$data3['nama']."</option>");
				}
			?>
				</select>
			<br />
			<input type="submit" value="update" />
				</form>
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
