<?php
	
	include_once ('../../config/database_config.php');

	

	$row = "INSERT INTO ms_keluar(stkkeluar_id,jumlah,tgl_keluar,alasan,pegawai_id) VALUES ('$_POST[perl_id]','$_POST[jml]',NOW(),'$_POST[desc]','$_POST[pegawai]') ";
	mysql_query($row);
	
	
?>
