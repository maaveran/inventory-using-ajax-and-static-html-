<?php

	include_once ('../../config/database_config.php');

	$row = "UPDATE ms_pegawai SET name='" .$_REQUEST["name"]. "', username='" .$_REQUEST["username"]. "',password='" .$_REQUEST["password"]. "',status='" .$_REQUEST["status"]. "',permissions='" .$_REQUEST["permissions"]. "' WHERE pegawai_id=$_POST[dataid]";
	mysql_query($row);
	

?>