<?php

	include_once ('../../config/database_config.php');

	$row = "SELECT * FROM ms_category WHERE category_id=$_POST[dataid]";
	$col = mysql_query($row);
	$sq = mysql_fetch_assoc($col);
	echo json_encode($sq);

?>