<?php

	include_once ('../../config/database_config.php');

	$row = "DELETE FROM ms_perleng WHERE perl_id=$_POST[dataid]";
	mysql_query($row);
?>
