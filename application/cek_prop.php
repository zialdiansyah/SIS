<?php
	session_start();
	include("../system/connect.php");
	
	$sql1 =
	"select m.nim, m.nama, pt.judul, pt.abstrak, up.nama_file, pp.id_p_proposal, pp.status_proposal, up.direktori
	from
	tbl_mahasiswa m, tbl_p_topik pt, tbl_p_proposal pp, tbl_upload_proposal up
	where
	pt.id_p_topik = pp.id_p_topik &&
	m.nim = pt.nim &&
	pp.id_file = up.id_file
	order by m.nim asc";
	$result1 = mysql_query($sql1) or die (mysql_error());
	
	$i = 0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="../layout/images/CoolWater.css" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Proposal</title>
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
		<li><a href="profile_mhs.php">profile</a></li>
	</ul>
	
	</div>					
			
	<!-- content-wrap starts here -->
	<div id="content-wrap">
		
		<div id="main">			
			<a href="progres_skripsi.php">daftar proposal yang diterima</a><br />			
			<table border="1">
			<tr>
				<th>no.</th>
				<th>nim</th>
				<th>nama</th>
				<th>judul</th>
				<th>abstraksi</th>
				<th>file</th>
				<th>status</th>
				<th>aksi</th>
			</tr>
			<?php
				while($data1 = mysql_fetch_array($result1)) {
					if($data1['status_proposal']==0){
						$status = "waiting approval";
					}
					else if($data1['status_proposal']==1) {
						$status = "approved";
					}
					else {
						$status = "rejected";
					}
					$i++;
			?>
			<tr>
				<td><?php echo("$i"); ?></td>
				<td><?php echo("$data1[nim]"); ?></td>
				<td><?php echo("$data1[nama]"); ?></td>
				<td><?php echo("$data1[judul]"); ?></td>
				<td><?php echo("$data1[abstrak]"); ?></td>
				<td><?php echo("$data1[nama_file]"); ?></td>
				<td><?php echo("$status"); ?></td>
				<td><a href="<?php echo("$data1[direktori]"); ?>");>[download]</a> | <a href="cek_prop_upt.php?id=<?php echo("$data1[id_p_proposal]"); ?>">[update]</a> | <a href="cek_prop_dtl.php?id=<?php echo("$data1[id_p_proposal]"); ?>">[detail]</a></td>
			</tr>
			<?php } ?>
			</table>
			<input type="button" onclick="self.history.back()" value="kembali" style="margin-top: 15px;" />
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
