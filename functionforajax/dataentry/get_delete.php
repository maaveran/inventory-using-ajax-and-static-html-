<?php

	include_once ('../../config/database_config.php');

	$row = "DELETE FROM ms_stock WHERE id_stock=$_POST[dataid]";
	mysql_query($row);

?>
