<?php

	include_once ('../../config/database_config.php');

	$row = "UPDATE ms_stock SET stock_entry='" .$_REQUEST["qty"]. "', stock_id='" .$_REQUEST["nm_barang"]. "' WHERE id_stock=$_POST[ide]";
	mysql_query($row);
	

?>