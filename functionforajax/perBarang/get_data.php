<?php
		include('../../config/database_config.php');

		$sql =mysql_query("SELECT ms_perleng.*,stock_masuk.*,stock_keluar.* FROM ms_perleng  LEFT JOIN stock_masuk ON ms_perleng. 	perl_id=stock_masuk.stock_id LEFT JOIN stock_keluar ON stock_masuk.stock_id=stock_keluar.stkkeluar_id   ");
		$s = mysql_fetch_array($sql);


		if (empty($_POST['search'])){

		if(!empty($s)){
			$i = 1;
				do{

				$j = $s['masuk']-$s['keluar'];
				echo "<tr class='cek_barang'>";
					echo "<td><input type='checkbox'  class='deleteall' data-id='$s[perl_id]' /></td>";
					echo "<td>$i</td>";
					echo "<td>$s[kd_barang]</td>";
					echo "<td id='nm'>$s[brand_name]</td>";
					echo "<td>$s[satuan]</td>";

					echo "<td>$s[masuk]</td>";
					if ($s[keluar]==0){
						echo "<td>0</td>";
					}else{
					echo "<td>$s[keluar]</td>";
					}
					echo "<td id='warning' data-id='$s[perl_id]'>$j</td>";

					echo "<td>$s[update_date]</td>";

					echo "<td>
						<a href='javascript:' class='editData btn btn-warning btn-xs' style='font-size:15px;'  dataid='" .$s['perl_id']. "' data-toggle='modal' data-target='#myModal'><i class='glyphicon glyphicon-pencil' style='margin-right:10px;'></i>Edit</a>
						<a href='javascript:'  style='font-size:15px;' class='delete-data btn btn-danger btn-xs' data-id='" .$s['perl_id']. "'><i class='glyphicon glyphicon-remove' style='margin-right:10px;'></i>Delete </a>
						
					</td>";

					echo "</tr>";

					
				$i = $i+1;
				}while($s =mysql_fetch_array($sql));


		}

		}


?>
