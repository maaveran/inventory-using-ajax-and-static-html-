<?php

	include_once ('../../config/database_config.php');

	$row = "DELETE FROM ms_keluar WHERE keluar_id=$_POST[dataid]";
	mysql_query($row);
?>
