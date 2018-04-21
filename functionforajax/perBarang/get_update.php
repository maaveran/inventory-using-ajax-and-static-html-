<?php

	include_once ('../../config/database_config.php');

	$row = "UPDATE ms_perleng SET brand_name='" .$_REQUEST["nm_barang"]. "', kd_barang='" .$_REQUEST["kd_barang"]. "',satuan='" .$_REQUEST["satuan"]. "',update_date=NOW(), category_id='" .$_REQUEST[kategori]."' WHERE perl_id=$_POST[perl_id]";
	mysql_query($row);
	

?>