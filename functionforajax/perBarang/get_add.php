<?php
	
	include_once ('../../config/database_config.php');

	

	$row = "INSERT INTO ms_perleng(brand_name,satuan,kd_barang,update_date,stock_awal,category_id) VALUES ('$_POST[nm_barang]','$_POST[satuan]','$_POST[kd_barang]',NOW(),'$_POST[stock_awal]','$_POST[kategori]') ";
	mysql_query($row);
	
	
?>
