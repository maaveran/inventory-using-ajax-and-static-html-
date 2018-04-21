<?php
	ob_start();
	session_start();
	ob_end_clean();
	
	include_once ('../config/database_config.php');
	
	$query = " SELECT * FROM ms_pegawai WHERE username='" .$_GET['name']. "' AND password='" .$_GET['password']. "' AND status='1' ";
	
	$hasil = mysql_query($query);
	$data = mysql_num_rows($hasil);
	$row=  mysql_fetch_assoc($hasil);
	
	if($data == 1){
	
		
		$_SESSION['pegawai'] = $row['pegawai_id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['permissions'] = $row['permissions'];
		$_SESSION['status'] =  $row['status'];
		
		echo 'true';
		
		
	}else{
	
		echo 'false';
		
	}
	
	
	
?>