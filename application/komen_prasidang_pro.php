<?php
	session_start();
	include("../system/connect.php");
	
	$id = $_POST['id'];
	$komen = $_POST['komen'];
	
	$sql1 =
	"insert into tbl_komen_prasidang
	(komen_skripsi_pra)
	values
	('$komen')";
	
	if(mysql_query($sql1))
	{
		$sql2 = "select * from tbl_komen_prasidang order by id_komen_s_prasidang desc";
		$result2 = mysql_query($sql2) or die (mysql_error());
		$data2 = mysql_fetch_array($result2);
		
		$insert =
		"update tbl_progres_skripsi
		set
		id_komen_s_prasidang = '$data2[id_komen_s_prasidang]'
		where
		id_p_s_prasidang = '$id'";
		mysql_query($insert) or die (mysql_error());
		
		header('Location:daf_prasidang.php');
	}
?>