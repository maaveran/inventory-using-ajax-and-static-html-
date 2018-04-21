<?php
	
	include_once ('../../config/database_config.php');
	
	$sql = "SELECT * FROM ms_pegawai";
	
	$my = mysql_query($sql);
	
	if ($_POST['username'] != $my['username']){
	$row = "INSERT INTO ms_pegawai(name,username,password,status,permissions) 
			VALUES('$_POST[name]','$_POST[username]','$_POST[password]','$_POST[status]','$_POST[permissions]')";
	
	mysql_query($row);
	
	echo "true";
	}
?>
