<?php
	session_start();
	include("../system/connect.php");
	
	$nim = $_SESSION['id'];
	$username = $_SESSION['user'];
	
	$query1 = "select * from tbl_mahasiswa where nim = '$nim' ";
	$result1 = mysql_query($query1);
	$data = mysql_fetch_array($result1);
	
	$query2 = "select * from tbl_pengguna where username = '$username' ";
	$result2 = mysql_query($query2);
	$data2 = mysql_fetch_array($result2);
?>
<?php
/*
// ini adalah target Hash MD5 kita
// sementara dibatasi maximal 10 karakter dan alphabet  lower

define('HASH', '$data2[password]');  // masukkan hash di sini

/// ini ke bawah jangan diubah

define('HASH_ALGO', 'md5');
define('PASSWORD_MAX_LENGTH', 10);
$charset = 'abcdefghijklmnopqrstuvwxyz';

$charset_length = strlen($charset);
function check($password) {   
	if (hash(HASH_ALGO, $password) == HASH) {
	echo 'Penguraian hash berhasil, <br>password: <b>'.$password."</b>\r\n";
	exit;
	}
}
 
function recurse($width, $position, $base_string) {
	global $charset, $charset_length;
	for ($i = 0; $i < $charset_length; ++$i) {
	if ($position  < $width - 1) {
	recurse($width, $position + 1, $base_string . $charset[$i]);
	}
	check($base_string . $charset[$i]);
	}
}
 
echo '<b>hash target:</b> '.HASH."\r\n";
recurse(PASSWORD_MAX_LENGTH, 0, '');
 
echo "Proses selesai tapi password tidak ditemukan\r\n";
*/
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Profile</title>
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
			<h2>Ubah Akun</h2>
			<br />
			<form action="profile_mhs_ubh.php" method="post">
			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo("$data[nim]"); ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo("$data[nama]"); ?>" /></td>
				</tr>
				<tr>
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?php echo("$data[angkatan]"); ?>" /></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td>:</td>
					<td><input type="text" name="email" value="<?php echo("$data[email]"); ?>" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" value="<?php echo("$data2[username]"); ?>" s/> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="text" name="password" /></td>
				</tr>
				<tr>
					<td><input type="submit" value="Ubah" /></td>
					<td>&nbsp;</td>
					<td><input type="button" onclick="self.history.back()" value="kembali" /></td>
				</tr>
			</table>
			</form>
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
