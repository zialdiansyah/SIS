<?php
	session_start();
	include("../system/connect.php");
	
	$ruang = $_POST['ruangan'];
	$id = $_POST['id'];
	$pen1 = $_POST['pen1'];
	$pen2 = $_POST['pen2'];
	$pen3 = $_POST['pen3'];
	
	$sql1 =
	"insert into tbl_detail_prasidang
	(pembimbing_1, penguji_1, penguji_2, ruangan)
	values
	('$pen1', '$pen2', '$pen3', '$ruang')";
	
	if(mysql_query($sql1))
	{
		$sql2 = "select * from tbl_detail_prasidang order by id_detail_prasidang desc";
		$result2 = mysql_query($sql2) or die (mysql_error());
		$data2 = mysql_fetch_array($result2);
		
		$insert =
		"update tbl_progres_skripsi
		set
		id_detail_prasidang = '$data2[id_detail_prasidang]'
		where
		id_p_s_prasidang = '$id'";
		mysql_query($insert) or die (mysql_error());
		
		header('Location:daf_bimbingan.php');
	}
?>