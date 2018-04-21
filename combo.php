<?php

	mysql_connect("localhost","root","");
	mysql_select_db("pi");

	$sql = mysql_query("SELECT * FROM ms_category ");

	echo "<option >--- Kategori ---</option>";
	$selected = "";
	while($row = mysql_fetch_array($sql)){
        if ($_POST["dataid"]==$row['category_id']) {
            $selected = "selected";
        }
        else{
        	$selected ="";
        }
		echo "<option value='" .$row['category_id']. "' " . $selected . ">" .$row['category_name']. "</option>";
	}

	

	
?>