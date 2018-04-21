<?php

		include('../config/database_config.php');

		$sql = mysql_query("SELECT masuk FROM stock_masuk WHERE stock_id=$_POST[dataid]");
		$row = mysql_fetch_array($sql);

		$sq = mysql_query("SELECT keluar FROM stock_keluar WHERE stkkeluar_id=$_POST[dataid] ");
		$ro = mysql_fetch_array($sq);

		$q = $row['masuk']-$ro['keluar'];
		echo json_encode($q);
		


?>