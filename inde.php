<?php
    include('config/database_config.php');
	session_start();
	error_reporting(0);
	if (empty($_SESSION['username'])){
		header("location:index.html");
	}
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" >CEC Inventory</a>
            </div>
  <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> Last access : 15 September 2014 &nbsp; <a href="function/logout.php" class="btn btn-danger square-btn-adjust" >Logout</a> </div>
        </nav>

           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/images/inventory.png" style="width:218px;height:148px;-moz-border-radius:0px;border-radius:0px;" class="user-image img-responsive"/>

					</li>


                    <li>
                        <a class="active-menu"  href="inde.php" id="tes"><i class="fa fa-rocket fa-3x"></i> Dashboard</a>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-th-list fa-3x"></i>Master<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="inde.php?mnj_category">Manajemen Kategori</a>
                            </li>
                            <li>
                                <a href="inde.php?ps_item">Manajemen Persediaan Barang</a>
                            </li>
                            <li>
                                <a href="inde.php?ps_income">Manajemen Barang Masuk</a>
                            </li>
							              <li>
                                <a href="inde.php?ps_exit">mananjemen Barang Keluar</a>
                            </li>
                            
							              <li>
                                <a href="inde.php?ps_wanted">Manajemen permintaan</a>
                            </li>
							              <li>
                                <a href="inde.php?user">Manajemen User</a>
                            </li>
                        </ul>
                      </li>

                      <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i>Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="laporan/laporan%20Persediaan%20Barang.php" target="_blank" id="tes">Laporan persediaan barang</a>
                            </li>
                            <li>
                                <a href="laporan/laporan%20Barang%20masuk.php" target="_blank">Laporan barang Masuk</a>
                            </li>
                            <li>
                                <a href="laporan/laporan%20Barang%20keluar.php" target="_blank">Laporan Barang Keluar</a>
                            </li>

                        </ul>
                      </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
			<?php
				if ( isset($_GET['ps_item'])){
					include "prsbarang.php";
				}else if( isset($_GET['ps_income'])){
					include "barangmasuk.php";
        }else if( isset($_GET['ps_retur'])){
          include "retur.php";
				}else if( isset($_GET['ps_exit'])){
					include "barangkeluar.php";
				}else if( isset($_GET['ps_wanted'])){
					include "permintaan.php";
				}else if( isset($_GET['user'])){
					include "user.php";
                }else if( isset($_GET['mnj_category'])){
                    include "mnj_kategori.php";
				}else{
					include "dashboard.php";
				}

			?>

            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <script type="text/javascript" language="javascript" src="assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.metisMenu.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/custom.js"></script>
        <script type="text/javascript" language="javascript">
			 $(document).ready(function(){
				$(".edit_img").click(function(){
					alert("tesdsgsfgsgfs");
				});
			 });


    </script>

</body>
</html>
