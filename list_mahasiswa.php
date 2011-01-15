<?php
	session_start();
	include("../system/connect.php");
	include("library/func_common.php");
	
	
	Front_Header();
	Front_left();
	
	
	$sql1 = "select * from tbl_mahasiswa";
	$result1 = mysql_query($sql1) or die (mysql_error());
	$i=0;
	?>
	
	<div id="content">
	<h2>Data Mahasiswa</h2><br />
	
<form action="#" method="get">
	Cari : <input type="text" name="cari" />
	<input type="button" value="mulai" />
</form>
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
			<td><a href="list_mahasiswa_dtl.php?id=<?php echo("$data1[nim]"); ?>">detail</a></td>
		</tr>
		<?php } ?>
	</table>
<input type="button" onclick="self.history.back()" value="kembali"  />	
	</div>
	
	<div class="clear"></div>
<?php
	Front_Footer();
?>
