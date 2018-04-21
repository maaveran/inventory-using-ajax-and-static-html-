<html>
		<title>

		</title>

		<head>
		</head>
		<body>
		<?php
		include('../config/database_config.php');
		
		$row="SELECT ms_perleng.*,ms_keluar.*,ms_pegawai.* FROM ms_perleng INNER JOIN ms_keluar ON ms_perleng.perl_id=ms_keluar.stkkeluar_id INNER JOIN ms_pegawai ON ms_keluar.pegawai_id=ms_pegawai.pegawai_id";
		$sql=mysql_query($row);
		$sq =mysql_fetch_array($sql);
		$today = date("D j M G:i:s  Y");


		echo "<div class=table-responsive' style='border:1px solid black; width: 80%; margin: 0 auto; padding-bottom: 4%; margin-top: 4%;'>";
		echo "<h1 style='text-align:center;font-size: 18px;'>Canada English Course<br><h3 style='text-align:center; margin-bottom: 5px;font-size: 15px;'>Jln . Cendrawasih Raya No 87</h3></h1>";

		echo "<h2 style='text-align:center; font-family:arial; letter-spacing: 4px;font-size: 14px;'>Laporan Barang Masuk</h2>";
		
		
		echo "</br>";       
        echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example' width='90%' align='center'>";
       		
        echo "<thead align='left'>";
        echo "<tr style='text-indent: 1em;font-size: 12px;'><th colspan='2' align='left'><p><b>Laporan </b> : " .$today. "</p></th></tr>";
        echo "<tr border='0'><th></br></th></tr>";
        echo "<tr border='1' style='border: 1px solid black;font-size: 12px;'>";
		
        echo "<th>No</th>";
        echo "<th >Kode Barang </th>";
        echo "<th>Nama Barang</th>";
        echo "<th>Satuan</th>";
        echo "<th>Stock Keluar</th>";
        echo "<th>Keterangan</th>";
        echo "<th>Nama Pegawai</th>";
		echo "<th>Create Date</th>";
		
        echo "</tr>";
        echo "</thead>";
        echo "<tbody align='left' style='border:1px soli black;'>";
		if(!empty($sq)){
				$i = 1;
				do{
				echo "<tr>";
					
					echo "<td>$i</td>";
					echo "<td>$sq[kd_barang]</td>";
					echo "<td>$sq[brand_name]</td>";
					echo "<td>$sq[satuan]</td>";
					echo "<td>$sq[jumlah]</td>";
					echo "<td>$sq[alasan]</td>";
					echo "<td>$sq[name]</td>";
					echo "<td>$sq[tgl_keluar]</td>";
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
