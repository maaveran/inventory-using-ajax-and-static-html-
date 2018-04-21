<?php

	mysql_connect("localhost","root","");
	mysql_select_db("pi");

	$sql = mysql_query("SELECT * FROM ms_perleng WHERE category_id=$_POST[dataid]");

	
	while($row = mysql_fetch_array($sql)){

		echo "<option value='" .$row['perl_id']. "'>" .$row['brand_name']. "</option>";
	}

	

	
?>