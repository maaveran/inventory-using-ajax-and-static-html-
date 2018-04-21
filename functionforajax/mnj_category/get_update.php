<?php

	include_once ('../../config/database_config.php');

	$row = "UPDATE ms_category SET category_name='" .$_REQUEST["name"]. "' WHERE category_id=$_POST[id_category]";
	mysql_query($row);
	

?>