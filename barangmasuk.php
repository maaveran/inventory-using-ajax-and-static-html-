 <?php
	
	include('../../config/database_config.php');
	
 
 ?>
 <html>
 <head>
	  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
 <head>
 <body>
 <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                     <h2>Manajemen Barang Masuk</h2> 
						
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
													<span class="adderr"></span><br>
													<label>Nama Barang</label>
													<select class="form-control" id="tes_barang" >
													<option value='$kode'>--Nama Barang--</option>
													</select>
													<span class="adderr"></span><br>
													<label>Jumlah </label>
													<input class="form-control" type="text" id="qty"/>
													<span class="adderr"></span><br>
													<span id="number" class="col-md-9" style="color:red;margin-top: 10px;" ></span>
													<input class="form-control" type="hidden" id="id_entry"/>
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
													<select class="form-control" id="test" >
													<option value="$kategori">--kategori--</option>
													<option></option>
													</select>
													<label>Nama Barang</label>
													<select class="form-control" id="te_barang" >
													<option value='$kode'>--Nama Barang--</option>
													</select>
													<label>Jumlah </label>
													<input class="form-control " type="text" id="jml" />
													<span id="number" class="col-md-9" style="color:red;margin-top: 10px;" ></span>
												</div>
											</form>
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="sysclose">Close</button>
                                            <button type="button" class="btn btn-primary" id="save">Save changes</button>
                                        </div>
                                    </div>
									
									
                                </div>
                            </div>
						
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th class="center"><input type="checkbox" id="chkall"/></th>
                                            <th>No</th>
                                            <th>Kode Barang </th>
                                            <th>Nama Barang</th>
                                            <th>Satuan</th>
                                            <th>Stock</th>
											<th>Last update</th>
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
	</body>
		 <script src="assets/js/jquery-1.10.2.js"></script>
			<script>
			
			function fillidcategory(stock_id) {
                       $.ajax({
                       	 type: "POST",
                       	 url: "combochain.php",
                       	 data: "dataid=" + stock_id,
                       	 success: function(data){
                       	 			$("#tes_barang").html(data);
                       	 }
                       });
					}

			function valid(){

			}



			function fillcategory(stock_id) {
                       $.ajax({
                       	 type: "POST",
                       	 url: "combochains.php",
                       	 data: "dataid=" + stock_id,
                       	 success: function(data){
                       	 			$("#tested").html(data);
                       	 }
                       });
					}

			function getdata(){
			$.ajax({
				url: "functionforajax/dataentry/get_data.php",
				success: function(data) {
					$("#body").html(data);
					
					$('.delete-data').click(function(){
							$.ajax({
							type: "POST",
							data: "dataid="+$(this).attr("data-id"),
							url: "functionforajax/dataentry/get_delete.php",
							success: function(data){
								alert("one data have you selected has been done");
								getdata();
							}
							});
						});
						
					$('.editData').click(function(){
						$.ajax({
							type: "POST",
							url: "functionforajax/dataentry/get_edit.php",
							data: "dataid="+$(this).attr("dataid"),
							dataType: "json",
							success: function(data){
								$('#id_entry').val(data.id_stock)
								$('#qty').val(data.stock_entry);
								fillidcategory(data.stock_id);
								fillcategory(data.stock_id);
								
							
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

				$("#jml").keypress(function(data){
					if(data.which!=8 && data.which!=0 && (data.which<48 || data.which>57)){
						$("#number").html("mohon isikan angka").show().fadeOut(2000);
							return false;
					}

					
				});

				$("#qty").keypress(function(data){
					if(data.which!=8 && data.which!=0 && (data.which<48 || data.which>57)){
						$("#number").html("mohon isikan angka").show().fadeOut(2000);
							return false;
					}

					
				});

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
						url: "functionforajax/dataentry/get_delete.php",
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
					url:"functionforajax/dataentry/get_add.php",
					data:"perl_id="+$("#te_barang").val()+"&jml="+$("#jml").val(),
					success:function(data){
						
						getdata();
						
					}					
				});
			});
			
			$('#save_edit').click(function(){
			
				$.ajax({
					type:"POST",
					url:"functionforajax/dataentry/get_update.php",
					data:"nm_barang="+$("#tes_barang").val()+"&qty="+$("#qty").val()+"&ide="+$("#id_entry").val(),
					beforeSend: function(){
						if($("#tested").val()=="")
				{
					$(".adderr").html("data harus di isi");
					$(".adderr").hide(2000);
					return false;
				}
				else if($("#tes_barang").val()=="")
				{
					$(".adderr").html("data harus di isi");
					return false;
				}
				else if($("#qty").val()=="")
				{
					$(".adderr").html("data harus di isi");
					return false;
				}else{
					return true;
				}
					},
					success:function(data){
						alert("data updated");
						getdata();
						
					}					
				});
			});
				getdata();
				
			});
		 </script>
	</html>