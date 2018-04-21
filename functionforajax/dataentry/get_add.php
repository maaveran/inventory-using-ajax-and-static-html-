<?php
	
	include_once ('../../config/database_config.php');

	

	$row = "INSERT INTO ms_stock(stock_entry,stock_id,create_date) VALUES ('$_POST[jml]','$_POST[perl_id]',NOW())";
	mysql_query($row);

	$rows = mysql_query("SELECT SUM(stock_akhir) FROM ms_perleng ");
	$sql = mysql_fetch_array($rows);

	$gql = $sql['stock_akhir'] + (is_numeric($_POST['jml']));

	$sqli = mysql_query("UPDATE ms_perleng SET stock_akhir=$gql WHERE perl_id=$_POST[perl_id] ") 
	
?>
