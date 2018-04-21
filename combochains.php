<?php

	mysql_connect("localhost","root","");
	mysql_select_db("pi");

	$sql = mysql_query("SELECT ms_perleng.*,ms_stock.*,ms_category.* FROM ms_perleng INNER JOIN ms_stock ON ms_perleng.perl_id=ms_stock.stock_id INNER JOIN  ms_category ON ms_category.category_id=ms_perleng.category_id GROUP BY category_name " );

	
	$selected = "";
	while($row = mysql_fetch_array($sql)){
        if ($_POST['dataid']==$row['perl_id']) {
            $selected = "selected";
        }
        else{
        	$selected ="";
        }
		echo "<option value='" .$row['category_id']. "' " . $selected . ">" .$row['category_name']. "</option>";
	}

	

	
?>