<?php

	mysql_connect("localhost","root","");
	mysql_select_db("pi");

	$sql = mysql_query("SELECT * FROM ms_category");

	
	while($row = mysql_fetch_array($sql)){

		echo "<option value='" .$row['category_id']. "'>" .$row['category_name']. "</option>";
	}

	

	
?>