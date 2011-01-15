<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_POST['id_p_topik'];
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
			<?php
				$lokasi_file = $_FILES['fupload']['tmp_name'];
				$nama_file   = $_FILES['fupload']['name'];
				$ukuran_file = $_FILES['fupload']['size'];

				$direktori = "../upload/file1/$nama_file";

				// Jika nama file sudah ada di server 
				if (file_exists($direktori)) {
					echo "Upload Gagal !!! <br>
					Nama file <b>$nama_file</b> sudah ada<br>
					Ganti dulu nama filenya agar bisa di upload";
				}
				else {
					move_uploaded_file($lokasi_file,"$direktori");
					echo "Nama File   : <b>$nama_file</b> berhasil di upload <br />";
					echo "Ukuran File : <b>$ukuran_file</b> bytes";
  
				// Masukkan informasi file ke database
				$input="INSERT INTO tbl_upload_proposal( nama_file, ukuran_file, direktori)
          		VALUES('$nama_file', '$ukuran_file', '$direktori')";
				
				if(mysql_query($input)) {
					$sql1 = "select * from tbl_upload_proposal order by id_file desc";
					$result1 = mysql_query($sql1) or die (mysql_error());
					$row1 = mysql_fetch_array($result1);
			
					$insert = "insert into tbl_p_proposal(id_p_topik, id_file)
					values('$id', '$row1[id_file]')";
					mysql_query($insert) or die (mysql_error());
				}
		
		
				}
	
			?>
			<input type="button" onclick="self.history.back()" value="kembali" />
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
