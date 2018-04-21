<?php
		include('../../config/database_config.php');

		$row="SELECT ms_perleng.*,ms_stock.* FROM ms_perleng INNER JOIN ms_stock ON ms_perleng.perl_id=ms_stock.stock_id";
		$sql=mysql_query($row);
		$sq =mysql_fetch_array($sql);

	

		if(!empty($sq)){
			$i = 1;
				do{
				echo "<tr>";
					echo "<td><input type='checkbox'  class='deleteall' data-id='" .$sq[id_stock]. "' /></td>";
					echo "<td>$i</td>";
					echo "<td>$sq[kd_barang]</td>";
					echo "<td>$sq[brand_name]</td>";
					echo "<td>$sq[satuan]</td>";
					echo "<td>$sq[stock_entry]</td>";
					echo "<td>$sq[create_date]</td>";
					echo "<td>
							<a href='javascript:' class='editData btn btn-warning btn-xs' style='font-size:15px;'  dataid='" .$sq['id_stock']. "' data-toggle='modal' data-target='#myModal'><i class='glyphicon glyphicon-pencil' style='margin-right:10px;'></i>Edit</a>
							<a href='javascript:'  style='font-size:15px;' class='delete-data btn btn-danger btn-xs' data-id='" .$sq['id_stock']. "'><i class='glyphicon glyphicon-remove' style='margin-right:10px;'></i>Delete </a></span>

						</td>";
					echo "</tr>";

				$i = $i+1;
				}while($sq =mysql_fetch_array($sql));


		}



?>
