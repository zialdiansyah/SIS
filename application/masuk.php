<?php 
	session_start();
	include "../system/connect.php";
	
	$username = $_POST['username']; //menangkap hasil post dari input
	$pass = $_POST['password'];
	$password = md5($pass);
	$sql = 
	"select * 
	from 
	tbl_pengguna 
	where username = '$username' && 
	password = '$password' ";//mencari data di table pengguna yang sesuai dengan username dan password yang ditemukan
	
	$result = mysql_query($sql);
	$ketemu = mysql_num_rows($result); //jumlah data yang didapt dari query
	
	if($ketemu==1) //jika terdapat data yang sama dengan hasil input form login
	{
		while($user = mysql_fetch_array($result)) //mengambil data dari tabel
		{
			$username = $user[0]; //menangkap username
			$status = $user[2]; //menangkap status
		}
		
		if($status=='mahasiswa')
		{
			//mengambil nim mahasiswa yang username nya hasil kueri di atas
			$sql2 = "SELECT nim, nama from tbl_mahasiswa WHERE username = '$username' ";
			
			$result2 = mysql_query($sql2);
			$mhs = mysql_fetch_array($result2);
			$_SESSION['id'] = $mhs[0];//mendaftarkan id mahasiswa ke session
			$_SESSION['user'] = $username;//dan usernamenya
			$_SESSION['nama'] = $mhs[1];
			header('Location:mahasiswa.php');
		}
		
		else if($status=='dosen')
		{
			$sql2 = "select id_dosen from tbl_dosen where username = '$username' ";
			
			$result2 = mysql_query($sql2);
			$dsn = mysql_fetch_array($result2);
			$_SESSION['id'] = $dsn[0];
			$_SESSION['user'] = $username;
			header('Location:dosen.php');
		}
		
		else if($status=='kordinator')
		{
			$sql2 = "select id_dosen from tbl_dosen where username = '$username' ";
			
			$result2 = mysql_query($sql2);
			$dsn = mysql_fetch_array($result2);
			$_SESSION['id'] = $dsn[0];
			$_SESSION['user'] = $username;
			header('Location:dosen_1.php');
		}
		
		else if($status=='kaprodi')
		{
			$sql2 = "select id_dosen from tbl_dosen where username = '$username' ";
			
			$result2 = mysql_query($sql2);
			$dsn = mysql_fetch_array($result2);
			$_SESSION['id'] = $dsn[0];
			$_SESSION['user'] = $username;
			header('Location:dosen_2.php');
		}
		
		else if($status=='admin')
		{
			header('Location:../application/admin/index.php');
		}
		
		else
			echo("Anda bukan pengguna");
	}
	
	else
	{
		header('Location:../application/login.php');
	}
?>
