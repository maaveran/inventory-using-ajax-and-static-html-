

<?php
	
	include_once ('../../config/database_config.php');

	

	$row = "UPDATE ms_permin SET tgl_admin=NOW(), status_permin='Diterima',alasan_permin='tes' WHERE perl_id='" .$_POST[data]. '" ";
	mysql_query($row);
	
	
?>
