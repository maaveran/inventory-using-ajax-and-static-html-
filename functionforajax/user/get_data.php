<?php
		include('../../config/database_config.php');
		
		$row="SELECT * FROM ms_pegawai ORDER BY name ASC";
		$sql=mysql_query($row);
		$sq =mysql_fetch_array($sql);
		
		if(!empty($sq)){
			$i = 1;
				do{
				echo "<tr>";
					echo "<td><input type='checkbox'  class='deleteall' data-id='$sq[pegawai_id]' /></td>";
					echo "<td>$i</td>";
					echo "<td>$sq[name]</td>";
					echo "<td>$sq[username]</td>";
					echo "<td>$sq[password]</td>";
					if ($sq['status'] == 0){
						echo "<td>Not Active</td>";
					}else{
						echo "<td>Active</td>";
					}
					if ($sq['permissions'] == 0){
						echo "<td>Staff</td>";
					}else{
						echo "<td>Admin</td>";
					}
					echo "<td>
							<a href='javascript:' class='editData btn btn-warning btn-xs' style='font-size:15px;'  dataid='" .$sq['pegawai_id']. "' data-toggle='modal' data-target='#myModal'><i class='glyphicon glyphicon-pencil' style='margin-right:10px;'></i>Edit</a>
							<a href='javascript:'  style='font-size:15px;' class='delete-data btn btn-danger btn-xs' data-id='" .$sq['pegawai_id']. "'><i class='glyphicon glyphicon-remove' style='margin-right:10px;'></i>Delete </a></span>
							
						</td>";
					echo "</tr>";
				
				$i = $i+1;
				}while($sq = mysql_fetch_array($sql));
			}
			
		

?>

