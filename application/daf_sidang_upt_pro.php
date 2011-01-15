<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_POST['id'];
	$ruangan = $_POST['ruangan'];
	$pen1 = $_POST['pen1'];
	$pen2 = $_POST['pen2'];
	$pen3 = $_POST['pen3'];
	
	$sql1 =
	"insert into tbl_detail_sidang
	(ruangan)
	values
	('$ruangan')";
	
	if(mysql_query($sql1))
	{
		$sql2 = "select * from tbl_detail_sidang order by id_detail_sidang desc";
		$result2 = mysql_query($sql2) or die (mysql_error());
		$data2 = mysql_fetch_array($result2);
		
		$insert =
		"update tbl_sidang
		set
		penguji_1 = '$pen1',
		penguji_2 = '$pen2',
		penguji_3 = '$pen3',
		id_detail_sidang = '$data2[id_detail_sidang]'";
		mysql_query($insert) or die (mysql_error());
		
		header('Location:daf_sidang.php');
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Daftar sidang</title>
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
		<li><a href="">home</a></li>
		<li><a href="profile_dsn.php">profile</a></li>
	</ul>
	
	</div>					
			
	<!-- content-wrap starts here -->
	<div id="content-wrap">
		
		<div id="main">				

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
