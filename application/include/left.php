<?php
	session_start();
	if(isset($_SESSION['id']) || isset($_SESSION['user']))
	{
		include("../system/connect.php");
?>

<div id="left-content">
	<div id="tag">
	<strong>Selamat datang : <b> <br />
	<?php echo $_SESSION['user']; ?></b>
	</strong>
	</div>
		<ul id="left">
			<li>-> <a href="list_mahasiswa.php">Lihat daftar mahasiswa</a></li>
			<li>-> <a href="daf_bimbingan.php">Daftar bimbingan</a></li>
			<li>-> Topik</li>
			<ul id="child">
				<li><a href="topik.php">Daftar Topik</a></li>
				<li><a href="cek_topik.php">Periksa Topik</a></li>
			</ul>
			<li>-> <a href="cek_prop.php">proposal mahasiswa</a></li>
			<li>-> <a href="#">sidang mahasiswa</a></li>
			<ul id="child">
				<li><a href="daf_prasidang.php">daftar prasidang</a></li>
				<li><a href="daf_sidang.php">daftar sidang</a></li>
			</ul>
			<li>-> <a href="#">file skripsi</a></li>
		</ul>
	</div>
<?php
	}
	else
	{
		header('Location:form_login.php');
	}
?>