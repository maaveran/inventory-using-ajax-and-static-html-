<?php

	mysql_connect("localhost","root","");
	mysql_select_db("pi");

	$sql = mysql_query("SELECT * FROM ms_perleng ");

	
	$selected = "";
	while($row = mysql_fetch_array($sql)){
        if ($_POST["dataid"]==$row['perl_id']) {
            $selected = "selected";
        }
        else{
        	$selected ="";
        }
		echo "<option value='" .$row['perl_id']. "' " . $selected . ">" .$row['brand_name']. "</option>";
	}

	

	
?>