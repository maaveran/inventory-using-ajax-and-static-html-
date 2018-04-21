<?php
	
	include_once ('../../config/database_config.php');

	

	$row = "INSERT INTO ms_permin(perl_id,jumlah,tgl_permintaan,alasan,pegawai_id) VALUES ('$_POST[perl_id]','$_POST[jumlah]',NOW(),'$_POST[desc]','$_POST[pegawai]') ";
	mysql_query($row);
	
	
?>
