<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_POST['id'];
	$stat = $_POST['stat'];
	$stat2 = $_POST['stat2'];
	$komen = $_POST['komen'];
	
	
	$sql1 =
	"insert into tbl_bimbingan
	(id_p_s_prasidang, komen_bimbingan)
	values
	('$id', '$komen')";
	
	if(mysql_query($sql1))
	{
		$sql2 = "select * from tbl_bimbingan order by id_bimbingan desc";
		$result2 = mysql_query($sql2) or die (mysql_error());
		$data2 = mysql_fetch_array($result2);
		$id_bimbingan =$data2['id_bimbingan'];
		$insert =
		"update tbl_progres_skripsi
		set
		stat_1 = '$stat',
		stat_2 = '$stat2',
		id_bimbingan = '$id_bimbingan'
		where
		id_p_s_prasidang = '$id'";
		mysql_query($insert) or die (mysql_error());
		
		header('Location:daf_bimbingan.php');
	}
	
	if($stat == 1)
	{
		$insert2 =
		"insert into tbl_sidang
		(id_p_s_prasidang)
		values
		('$id')";
		mysql_query($insert2) or die (mysql_error());
	}
	
	
?>

