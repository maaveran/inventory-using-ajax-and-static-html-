<html>
<head>
</head> 
<body>
 <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Persediaan Permintaan</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
							
				
						
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                        <tr>
											
                                            <th>No</th>
                                            <th>Kode Barang </th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Nama Pegawai</th>
											<th>Tanggal Permintaan</th>
                                            <th>Tanggal Persetujuan</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        <tr class="odd gradeX" >
                                            <td></td>
                                            <td></td>
                                            <td></td>
											<td></td>
											<td></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
											<td class="center">
												<button class="btn btn-primary btn-xs "><i class="fa fa-edit "></i> Edit</button>
												<button class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Delete</button>
											</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
			</div>
			
               
    </div>
	</body>
		 <script src="assets/js/jquery-1.10.2.js"></script>
		

			<script>
			
			function getdata(){
			$.ajax({
				url: "functionforajax/permin_admin/get_data.php",
				success: function(data) {
					$("#body").html(data);
					

					$('.editData').click(function(){
						$('.editData').hide();
						$.ajax({
							type: "POST",
							url: "functionforajax/permin_admin/get_accept.php",
							data: "data="+$(this).attr("dataid"),
							success: function(data){
								getdata();
								$('.editData').hide();
								alert("tes");

							}
					
						});
					});
				}
				});
					
		}
			
			
			$(document).ready(function(){
			
			
				getdata();
			
			});
		 </script>
	</html>