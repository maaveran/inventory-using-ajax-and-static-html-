<?php
		include('../../config/database_config.php');
		
		
		$row="SELECT ms_perleng.*,ms_keluar.*,ms_pegawai.* FROM ms_perleng INNER JOIN ms_keluar ON ms_perleng.perl_id=ms_keluar.stkkeluar_id INNER JOIN ms_pegawai ON ms_pegawai.pegawai_id=ms_keluar.pegawai_id ";
		$sy=mysql_query($row);
		$s =mysql_fetch_array($sy);

		
		
		if(!empty($s)){
			$i = 1;
				do{
				echo "<tr id='klt'>";
					
					echo "<td><input type='checkbox'  class='deleteall' data-id='$s[keluar_id]' /></td>";
					echo "<td>$i</td>";
					echo "<td>$s[kd_barang]</td>";
					echo "<td>$s[brand_name]</td>";
					echo "<td>$s[jumlah]</td>";
					echo "<td>$s[alasan]</td>";
					echo "<td>$s[name]</td>";
					echo "<td>$s[tgl_keluar]</td>";
					echo "<td>
							<a href='javascript:' class='editData btn btn-warning btn-xs' style='font-size:15px;'  dataid='" .$s['keluar_id']. "' data-toggle='modal' data-target='#myModal'><i class='glyphicon glyphicon-pencil' style='margin-right:10px;'></i>Edit</a>
							<a href='javascript:'  style='font-size:15px;' class='delete-data btn btn-danger btn-xs' data-id='" .$s['keluar_id']. "'><i class='glyphicon glyphicon-remove' style='margin-right:10px;'></i>Delete </a></span>
							
						</td>";
					echo "</tr>";
				
				$i = $i+1;
				}while($s =mysql_fetch_array($sy));
			
			
		}
			
		

?>

