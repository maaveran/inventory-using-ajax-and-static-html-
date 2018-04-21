<?php

	include_once ('../../config/database_config.php');

	$row = "SELECT * FROM ms_perleng WHERE perl_id=$_REQUEST[dataid]";
	$col = mysql_query($row);
	$sq = mysql_fetch_assoc($col);
	echo json_encode($sq);

?>