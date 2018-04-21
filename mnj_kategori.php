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
                    <div class="col-md-4">
                     <h2>Manajemen Kategori</h2> 
						
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
													<label>Name</label>
													<input class="form-control" type="text" id="edt_name" required />
													<input class="form-control" type="hidden" id="edt_id"  />
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
							
							
								
								
								
							  <div class="modal-dialog" id="form" >
                                    <div class="modal-content" id="add-data">
                                        <div class="modal-header">
                                           
                                            <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
                                        </div>
                                        <div class="modal-body">
											 <form role="form" >
												<div class="form-group">
													<label>Kategori</label>
													<input class="form-control" type="text" id="kategori"/>
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
											<th width="1%" class="center"><input type="checkbox" id="chkall"/></th>
                                            <th width="1%">No</th>
                                            <th>Kategori</th>
                                           
											<th width="17%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        <tr class="odd gradeX" >
                                            <td></td>
                                            <td></td>
                                            
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
			
			function getdata(){
			$.ajax({
				url: "functionforajax/mnj_category/get_data.php",
				success: function(data) {
					$("#body").html(data);
					
					$('.delete-data').click(function(){
							$.ajax({
							type: "POST",
							data: "dataid="+$(this).attr("data-id"),
							url: "functionforajax/mnj_category/get_delete.php",
							success: function(data){
								alert("one dat have you selected has been done");
								getdata();
							}
							});
						});
						
					$('.editData').click(function(){
					$("#add-data").hide();
						$.ajax({
							type: "POST",
							url: "functionforajax/mnj_category/get_edit.php",
							data: "dataid="+$(this).attr("dataid"),
							dataType: "json",
							success: function(data){
								$('#edt_name').val(data.category_name);
								$('#edt_id').val(data.category_id);
							
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
				
				$("#form").hide();
				$("#delete").hide();
				
				$("#add").click(function(){
					$("#add-data").show();
					$("#form").slideToggle(1000);
					$("#sysadd").toggleClass("glyphicon glyphicon-minus");
					$("#sysadd").toggleClass("glyphicon glyphicon-plus");
					
					
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
						url: "functionforajax/mnj_category/get_delete.php",
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
					url:"functionforajax/mnj_category/get_add.php",
					data:"name="+$("#kategori").val(),
					success:function(data){
						
						getdata();
						
					}					
				});
			});
			
			$('#save_edit').click(function(){
				
				$.ajax({
					type:"POST",
					url:"functionforajax/mnj_category/get_update.php",
					data:"name="+$("#edt_name").val()+"&id_category="+$("#edt_id").val(),
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