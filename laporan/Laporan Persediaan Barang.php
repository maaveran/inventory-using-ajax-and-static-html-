<html>
		<title>

		</title>

		<head>
		</head>
		<body>
		<?php
		include('../config/database_config.php');
		
		$row="SELECT ms_perleng.*,stock_masuk.*,stock_keluar.* FROM ms_perleng  LEFT JOIN stock_masuk ON ms_perleng.perl_id=stock_masuk.stock_id LEFT JOIN stock_keluar ON stock_masuk.stock_id=stock_keluar.stkkeluar_id   ";
		$sql=mysql_query($row);
		$sq =mysql_fetch_array($sql);
		
		$sys="SELECT ms_perleng.*,stock_masuk.*,stock_keluar.* FROM ms_perleng  LEFT JOIN stock_masuk ON ms_perleng.perl_id=stock_masuk.stock_id LEFT JOIN stock_keluar ON stock_masuk.stock_id=stock_keluar.stkkeluar_id   ";
		$sy=mysql_query($sys);
		$s =mysql_fetch_array($sy);
		$today = date("D j M G:i:s  Y");


		echo "<div class=table-responsive' style='border:1px solid black; width: 80%; margin: 0 auto; padding-bottom: 4%; margin-top: 4%;'>";
		echo "<h1 style='text-align:center;font-size: 18px;'>Canada English Course<br><h3 style='text-align:center; margin-bottom: 5px;font-size: 15px;'>Jln . Cendrawasih Raya No 87</h3></h1>";

		echo "<h2 style='text-align:center; font-family:arial; letter-spacing: 4px;font-size: 14px;'>Laporan Persediaan Barang</h2>";
		
		
		echo "</br>";       
        echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example' width='90%' align='center'>";
       		
        echo "<thead align='left'>";
        echo "<tr style='text-indent: 1em;font-size: 12px;'><th colspan='2' align='left'><p><b>Laporan </b> : " .$today. "</p></th></tr>";
        echo "<tr><th></br></th></tr>";
        echo "<tr style='border: 1px solid black;font-size: 12px;'>";
		
        echo "<th width='5%'>No</th>";
        echo "<th width='15%'>Kode Barang </th>";
        echo "<th width='24%'>Nama Barang</th>";
        echo "<th width='10%'>Satuan</th>";
        echo "<th width='7%'>Stock Masuk</th>";
		echo "<th width='7%'>Stock Keluar</th>";
		echo "<th width='7%'>Stock Akhir</th>";
		echo "<th width='15%'>Last update</th>";
		
        echo "</tr>";
        echo "</thead>";
        echo "<tbody align='left'>";
		if(!empty($s)){
			$i = 1;
				do{
				echo "<tr style='font-size: 12px;'>";
					$j = $s['masuk']-$s['keluar'];
					echo "<td>$i</td>";
					echo "<td>$s[kd_barang]</td>";
					echo "<td>$s[brand_name]</td>";
					echo "<td>$s[satuan]</td>";
					echo "<td>$s[masuk]</td>";
					if ($s['keluar'] == 0){
						echo "<td>0</td>";
					}else{
					echo "<td>$s[keluar]</td>";
				}
					echo "<td>$j</td>";
					echo "<td>$s[update_date]</td>";
					
					echo "</tr>";
				
				$i = $i+1;
				}while($s =mysql_fetch_array($sy));
			
			
		}
		echo "</tbody>";
		echo "</table>";	
		echo "</div>";	

?>
</body>
</html>
