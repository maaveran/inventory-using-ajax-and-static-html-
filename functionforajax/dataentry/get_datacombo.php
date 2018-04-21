<?php

	include('../../config/database_config.php');
	
	$sys =mysql_query("SELECT * FROM ms_perleng");
	$row = mysql_fetch_assoc($sys);
	echo "<select>";
	if(!empty($row)){
		
		do{
		
		echo "<option value='$row[perl_id]'>$row[brand_name]</option>";
		
	}while($row = mysql_fetch_assoc($sys));	
	echo "</select>";
	}
	

?>