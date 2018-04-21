<?php

	include_once ('../../config/database_config.php');

	$row = "UPDATE ms_keluar SET stkkeluar_id='" .$_REQUEST["perl_id"]. "', jumlah='" .$_REQUEST["jml"]. "',alasan='" .$_REQUEST["desc"]. "',tgl_keluar=NOW() WHERE keluar_id=$_POST[keluar_id]";
	mysql_query($row);
	

?>