<?php
		include('../../config/database_config.php');
		
		
		$row = mysql_query("SELECT ms_perleng.*,ms_permin.*,ms_pegawai.* FROM ms_perleng INNER JOIN ms_permin ON ms_perleng.perl_id=ms_permin.perl_id INNER JOIN ms_pegawai ON ms_permin.pegawai_id=ms_pegawai.pegawai_id  ");
	
		$s =mysql_fetch_array($row);

		
		
		if(!empty($s)){
			$i = 1;
				do{
				echo "<tr>";
					
					
					echo "<td>$i</td>";
					echo "<td>$s[kd_barang]</td>";
					echo "<td>$s[brand_name]</td>";
					echo "<td>$s[jumlah]</td>";
					echo "<td>$s[alasan]</td>";
					echo "<td>$s[name]</td>";
					echo "<td>$s[tgl_permintaan]</td>";
					echo "<td>$s[tgl_admin]</td>";

					echo "<td>
						<a href='javascript:' class='editData btn btn-success btn-xs' style='font-size:15px;'  dataid='" .$s['perl_id']. "' ><i class='glyphicon glyphicon-check' style='margin-right:10px;'></i>Accept</a>
						
					</td>";
					echo "</tr>";
				
				$i = $i+1;
				}while($s =mysql_fetch_array($row));
			
			
		}
			
		

?>

