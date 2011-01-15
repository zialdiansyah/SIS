<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_POST['id'];
	$komen = $_POST['komen'];
	$pem1 = $_POST['pem1'];
	$pem2 = $_POST['pem2'];
	$stat = $_POST['stat'];
	$ruang = $_POST['ruangan'];
	
	$sql1 =
	"insert into tbl_detail_p_proposal
	(tgl_uji, ruangan)
	values
	('$thn-$bln-$tgl', '$ruang')";
	
	if(mysql_query($sql1))
	{
		$sql2 = "select * from tbl_detail_p_proposal order by id_detail desc";
		$result2 = mysql_query($sql2) or die (mysql_error());
		$data2 = mysql_fetch_array($result2);
		
		$insert1 =
		"update tbl_p_proposal set 
		status_proposal = '$stat',
		penguji_1 = '$pem1',
		penguji_2 = '$pem2', 
		id_detail = '$data2[id_detail]', 
		komen = '$komen' 
		where 
		id_p_proposal = '$id' ";
		mysql_query($insert1) or die (mysql_error());
		
		header('Location:cek_prop.php');
	}
?>	
