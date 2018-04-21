<?php

	
	ob_start();
	session_start();
	error_reporting(0);
	ob_end_clean();
	
	
	
	if(isset($_SESSION['permissions'])){
	
		if($_SESSION['permissions'] == '1'){
		
			header('location:../inde.php');
		
		}else if($_SESSION['permissions'] == '0'){
			
			header('location:../laporan_per.php');
		
		}
		}
?>