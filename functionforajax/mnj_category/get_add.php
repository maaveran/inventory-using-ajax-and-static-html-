<?php
	
	include_once ('../../config/database_config.php');
	
	
	
	
	$row = "INSERT INTO ms_category(category_name) VALUES ('$_POST[name]')";
	
	mysql_query($row);
	
	echo "true";

?>
