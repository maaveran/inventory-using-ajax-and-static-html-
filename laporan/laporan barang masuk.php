<html>
		<title>

		</title>

		<head>
		</head>
		<body>
		<?php
		include('../config/database_config.php');
		
		$row="SELECT ms_perleng.*,ms_stock.* FROM ms_perleng INNER JOIN ms_stock ON ms_perleng.perl_id=ms_stock.stock_id";
		$sql=mysql_query($row);
		$sq =mysql_fetch_array($sql);
		
		$sys="SELECT * FROM ms_perleng ORDER BY kd_barang ASC";
		$sy=mysql_query($sys);
		$s =mysql_fetch_array($sy);
		$today = date("D j M G:i:s  Y");


		echo "<div class=table-responsive' style='border:1px solid black; width: 80%; margin: 0 auto; padding-bottom: 4%; margin-top: 4%;'>";
		echo "<h1 style='text-align:center;font-size: 18px;'>Canada English Course<br><h3 style='text-align:center; margin-bottom: 5px;font-size: 15px;'>Jln . Cendrawasih Raya No 87</h3></h1>";

		echo "<h2 style='text-align:center; font-family:arial; letter-spacing: 4px;font-size: 14px;'>Laporan Barang Masuk</h2>";
		
		
		echo "</br>";       
        echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example' width='100%' align='center'>";
       		
        echo "<thead>";
        echo "<tr style='text-indent: 1em;font-size: 12px;'><th colspan='2' align='left'><p><b>Laporan </b> : " .$today. "</p></th></tr>";
        echo "<tr><th></br></th></tr>";
        echo "<tr style='border: 1px solid black;font-size: 12px;'>";
		
        echo "<th width='5%'>No</th>";
        echo "<th width='20%'>Kode Barang </th>";
        echo "<th width='26%'>Nama Barang</th>";
        echo "<th width='10%'>Satuan</th>";
        echo "<th width='7%'>Stock Masuk</th>";
	
		echo "<th width='15%'>Last update</th>";
		
        echo "</tr>";
        echo "</thead>";
        echo "<tbody align='center'>";
		if(!empty($sq)){
			$i = 1;
				do{
				echo "<tr>";
					
					echo "<td>$i</td>";
					echo "<td>$sq[kd_barang]</td>";
					echo "<td>$sq[brand_name]</td>";
					echo "<td>$sq[satuan]</td>";
					echo "<td>$sq[stock_entry]</td>";
					echo "<td>$sq[create_date]</td>";
					
					echo "</tr>";
				
				$i = $i+1;
				}while($sq =mysql_fetch_array($sql));
			
			
		}
		echo "</tbody>";
		echo "</table>";	
		echo "</div>";	

?>
</body>
</html>
