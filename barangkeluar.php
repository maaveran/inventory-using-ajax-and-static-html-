<html>
<head>
</head> 
<body>
 <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Persediaan Barang Keluar</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                        </div>
                                        <div class="modal-body" >
											 <form role="form">
												<div class="form-group">
													<label>Kategori</label>
													<select class="form-control" id="tested" >
													<option value="$kategori">--kategori--</option>
													<option></option>
													</select>
													<label>Nama Barang</label>
													<select class="form-control" id="tes_barang" >
													<option value='$kode'>--Nama Barang--</option>
													</select>
													<label>Jumlah </label>
													<input class="form-control" type="text" id="jumlah"/>
													<input class="form-control" type="hidden" id="keluar_id"/>
													<label>Description </label><br>
													<textarea style="border-radius:10px;border-style:none;border: 1px solid rgba(169,169,169,.6);max-width:100%;min-width:100%;padding:10px;" id="description"></textarea>
													
												</div>
											</form>
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="save_edit">Save changes</button>
											
                                        </div>
                                    </div>
                                </div>
                            </div>
							
				 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
							<a href="#" class="btn btn-success btn-xs" style="font-size:15px;" id="add"><i class="glyphicon glyphicon-plus" style="margin-right:10px;" id="sysadd"></i>add</a>
							<a href="#" class="btn btn-danger btn-xs" style="font-size:15px;" id="delete"><i class="glyphicon glyphicon-remove" style="margin-right:10px;"></i>delete all</a>
							
							
								
								
								
							  <div class="modal-dialog" id="form">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           
                                            <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
                                        </div>
                                        <div class="modal-body" >
											 <form role="form">
												<div class="form-group">
													<label>Kategori</label>
													<select class="form-control" id="test" required>
													<option value="$kategori">--kategori--</option>
													<option></option>
													</select>
													<span class="add_error"></span><br>
													<label>Nama Barang</label>
													<select class="form-control" id="te_barang" required>
													<option value='$kode'>--Nama Barang--</option>
													</select>
													<span class="add_error"></span><br>
													<label>Jumlah </label>
													<input class="form-control" type="text" id="jml" required/>
													<span class="add_error"></span><br>
													<input class="form-control" type="hidden" id="jumlah_hide" >
                                                    <span id="max">Stock tersedia :</span><span id="max_x"></span>
													
													<label>Description </label><br>
													<textarea style="border-radius:10px;border-style:none;border: 1px solid rgba(169,169,169,.6);max-width:100%;min-width:100%;padding:10px;" id="desc" ></textarea>
													<input class="form-control" type="hidden" id="pegawai" value="<?php echo $_SESSION['pegawai'] ?>">
													<span class="add_error"></span><br>
												</div>
											</form>
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="sysclose">Close</button>
                                            <button type="submit" class="btn btn-primary" id="save">Save changes</button>
                                        </div>
                                    </div>
									
									
                                </div>
                            </div>
						
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTable">
                                    <thead>
                                        <tr>
											<th class="center"><input type="checkbox" id="chkall"/></th>
                                            <th>No</th>
                                            <th>Kode Barang </th>
                                            <th>Nama Barang</th>
                                            <th>Stock Keluar</th>
                                            <th>Keterangan</th>
                                            <th>Nama Pegawai</th>
											<th>Create Date</th>
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
		 <script src="jquery.tablesorter.min.js"></script>

			<script>

			function fillidcategory(stkkeluar_id) {
                       $.ajax({
                       	 type: "POST",
                       	 url: "combochain.php",
                       	 data: "dataid=" + stkkeluar_id,
                       	 success: function(data){
                       	 			$("#tes_barang").html(data);
                       	 }
                       });
					}

			function fillcategory(stkkeluar_id) {
                       $.ajax({
                       	 type: "POST",
                       	 url: "combochains.php",
                       	 data: "dataid=" + stkkeluar_id,
                       	 success: function(data){
                       	 			$("#tested").html(data);
                       	 }
                       });
					}

			
					
			
			
			function getdata(){
			$.ajax({
				url: "functionforajax/stockkeluar/get_data.php",
				success: function(data) {
					$("#body").html(data);
					
					$('.delete-data').click(function(){
							$.ajax({
							type: "POST",
							data: "dataid="+$(this).attr("data-id"),
							url: "functionforajax/stockkeluar/get_delete.php",
							success: function(data){
								alert("one dat have you selected has been done");
								getdata();
							}
							});
						});
						
					$('.editData').click(function(){
						$.ajax({
							type: "POST",
							url: "functionforajax/stockkeluar/get_edit.php",
							data: "dataid="+$(this).attr("dataid"),
							dataType: "json",
							success: function(data){
								$('#jumlah').val(data.jumlah);
								$('#keluar_id').val(data.keluar_id);
								$('#description').val(data.alasan);
								fillidcategory(data.stkkeluar_id);
								fillcategory(data.stkkeluar_id);
								
							
							}
						});
					});
						
					
											
					$(".deleteall").click(function(){

						if($(".deleteall:checked").length>0){
							$("#delete").show();
							
						}else{
							$("#delete").hide();
							
						}
					});			
				}
			});
		}
			
			
			$(document).ready(function(){
				
				
				$("#max").hide();

				$("#test").change(function(){
					$.ajax({
						type: "POST",
						url: "combohits.php",
						data: "dataid="+$("#test").val(),
						success: function(data){
							$("#te_barang").html(data);

						}
					});

				});

				$("#te_barang").change(function(){
					$.ajax({
						type: "POST",
						url: "functionforajax/cek_stock.php",
						data: "dataid="+$("#te_barang").val(),
						dataType: "json",
						success: function(data){
							 $("#max").show();
							 $("#max_x").show();
                            $("#max_x").html("&nbsp;&nbsp;"+data+"&nbsp;unit<br><br>");
                            $("#jumlah_hide").val(data);
							

						}
					});

				});

				

				$("#tested").change(function(){
					$.ajax({
						type: "POST",
						url: "combohits.php",
						data: "dataid="+$("#tested").val(),
						success: function(data){
							$("#tested").html(data.category_name);
							$("#tested").html(data.category_id);	
							$("#tes_barang").html(data);

						}
					});

				});
				
				$("#form").hide();
				$("#delete").hide();
				
				$("#add").click(function(){
					$("#form").slideToggle(1000);
					$("#sysadd").toggleClass("glyphicon glyphicon-plus");
					$("#sysadd").toggleClass("glyphicon glyphicon-minus");
					$.ajax({
						type : "POST",
						url : "combobox.php",
						success: function(data){
						$("#jml").val("");
						$("#desc").val("");
						$("#test").val("");
						$("#max_x").hide();
						$("#max").hide();
						$("#te_barang").val("");

						$("#test").html(data);
					
					}
					});
					
				});
				$("#sysclose").click(function(){
					$("#form").slideUp(1000);
				});
				
				$("#chkall").click(function(event){
				if(this.checked){
					$(".deleteall").each(function(){
						this.checked = true;
						$("#delete").show();
					});
				}else{
					$(".deleteall").each(function(){
						this.checked = false;
						$("#delete").hide();
					});
				}
			});
				
			$("#delete").click(function(){
				var yesno;
				yesno=window.confirm("Are you really want to delete all checked item ?");
				
				if(yesno == true){
				
					$(".deleteall:checked").each(function(){
					$.ajax({
						type: "POST",
						data: "dataid="+$(this).attr("data-id"),
						url: "functionforajax/stockkeluar/get_delete.php",
						success:function(data){
							
							getdata();
							$("#delete").hide();
						}
					});
					});
					
				}
			});
			
			$('#save').click(function(){
				
				$.ajax({

					type:"POST",
					url:"functionforajax/stockkeluar/get_add.php",
					data:"perl_id="+$("#te_barang").val()+"&jml="+$("#jml").val()+"&pegawai="+$("#pegawai").val()+"&desc="+$("#desc").val(),
					beforeSend:function(html){
					var num = $("#jml").val();
                    var mun = $("#jumlah_hide").val();
                    var total = mun-num;
                    if( total < 0){
                      
                   alert ("jumlah stock terlalu besar");
                   return false; 
                   	}else{
                   		return true;
                   	}

                   },


					success:function(data){
						getdata();
						$("#form").hide();

						alert("data added");
						
						}
										
				});
				
					
			});
			
			$('#save_edit').click(function(){
				$.ajax({
					type:"POST",
					url:"functionforajax/stockkeluar/get_update.php",
					data:"perl_id="+$("#tes_barang").val()+"&jml="+$("#jumlah").val()+"&desc="+$("#description").val()+"&keluar_id="+$("#keluar_id").val(),
					success:function(data){
						alert("data updated");
						getdata();
						
					}					
				});
			});
				getdata();
				combobox();
			});
		 </script>
	</html>