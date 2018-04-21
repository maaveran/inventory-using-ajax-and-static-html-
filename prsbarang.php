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
   <style type="text/css">
   .red{
   		background-color: red;
   }
   .yellow{
   		background-color: yellow;
   }
   .green{
   		background-color: green;
   }
    .blue{
   		background-color: blue !important;
   }
   </style>
 <head>
 <body>
 <div id="page-inner">
                <div class="row">
                    <div class="col-md-4">
                     <h2>Persediaan Barang</h2>


                        </form>

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
													<label id="ts">Kategori</label>
													<select class="form-control" id="category_id">
													<option>--Kategori Item--</option>
													</select>
													<label>Kode Barang</label>
													<input class="form-control" type="text" id="kd_barang"/>
													<label>Nama Barang</label>
													<input class="form-control" type="text" id="nm_barang"/>
													<label>satuan</label>
													<input class="form-control" type="text" id="satuan"/>

													<input class="form-control" type="hidden" id="perl_id"/>
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
                                                    <select class="form-control" id="tested" >
                                                    <option value="$kategori">--kategori--</option>
                                                    <option></option>
                                                    </select>
													<label>Kode Barang</label>
													<input class="form-control" type="text" id="kd_brg"/>
													<label>Nama Barang</label>
													<input class="form-control" type="text" id="nm_brg"/>
													<label>Satuan</label>
													<input class="form-control" type="text" id="sat"/>

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
                                <table class="table table-striped table-bordered table-hover tablesorter" id="">
                                    <thead>
                                        <tr>
											<th class="center"><input type="checkbox" id="chkall"/></th>
                                            <th>No</th>
                                            <th>Kode Barang </th>
                                            <th>Nama Barang</th>
                                            <th>Satuan</th>
                                            <th>Stock Masuk</th>
											<th>Stock Keluar</th>
											<th>Total stok</th>
											<th>Last update</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        <tr class="odd gradeX" id="page">
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

			function load_data(){
                    $.ajax({
                        type: "POST",
                        url: "combo.php",
                        success: function(data){
                            $("#cek_tested").html(data);


                        }
                    });


                }



            function fillidcategory(category_id) {
                       $.ajax({
                       	 type: "POST",
                       	 url: "combo.php",
                       	 data: "dataid=" + category_id,
                       	 success: function(data){
                       	 			$("#category_id").html(data);
                       	 }
                       });
					}

			function getdata(){
			$.ajax({
				url: "functionforajax/perBarang/get_data.php",
				success: function(data) {
					$("#body").html(data);


					var pName = document.getElementById("warning").innerHTML;
					/*var Name = document.getElementById("nm").innerHTML;
					$.when( pName < 10).then(function(){

						alert("ada stock barang di bawah 10 unit, silahkan lakukan segera lakukan pemesannan barang ");
					})*/


 					$('#warning').each(function() {
						    $(this).filter(pName < 30)(function(){
						       alert($(this).html());
						       });
							});




					$('.delete-data').click(function(){
							$.ajax({
							type: "POST",
							data: "dataid="+$(this).attr("data-id"),
							url: "functionforajax/perBarang/get_delete.php",
							success: function(data){
								alert("data deleted");
								getdata();
							}
							});
						});



					$('.editData').click(function(){

						$.ajax({
							type: "POST",
							url: "functionforajax/perBarang/get_edit.php",
							data: "dataid="+$(this).attr("dataid"),
							dataType: "json",
							success: function(data){
								$("#id_category").val(data.category_id);
								$('#perl_id').val(data.perl_id);
								$('#kd_barang').val(data.kd_barang);
								$('#stok_awal').val(data.stock_awal);
								$('#nm_barang').val(data.brand_name);
								$('#satuan').val(data.satuan);
								fillidcategory(data.category_id);

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

				load_data();
				$("#form").hide();
				$("#delete").hide();

				 $("#cek_tested").change(function(){
                            $.ajax({
                                type : "POST",
                                url : "combohits.php",
                                data : "dataid="+$("#cek_tested").val(),
                                success: function(data){
                                    $("#tes_barang").html(data);
                                }
                            });


                    });

				 $("#max").hide();
				 $("#tes_barang").change(function(){
                    $.ajax({
                        type: "POST",
                        url: "functionforajax/cek_stock.php",
                        data: "dataid="+$("#tes_barang").val(),
                        dataType: "json",
                        success: function(data){
                            $("#max").show();
                            $("#max_x").html("&nbsp;&nbsp;"+data+"&nbsp;<br><br>");
                            $("#jumlah_hide").val(data);
                            tes(data);

                        }
                    });


                });

				$("#category_idt").click(function(){
					$.ajax({
						type : "POST",
						url : "combobox.php",
						success: function(data){
						$("#category_id").html(data);
						}
					});
				});

				$("#add").click(function(){
					$("#form").slideToggle(1000);
					$("#sysadd").toggleClass("glyphicon glyphicon-minus");
					$("#sysadd").toggleClass("glyphicon glyphicon-plus");
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
						    $(this).closest(".cek_barang").addClass("selected");
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
						url: "functionforajax/perBarang/get_delete.php",
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
					url:"functionforajax/perBarang/get_add.php",
					data:"kd_barang="+$("#kd_brg").val()+"&nm_barang="+$("#nm_brg").val()+"&satuan="+$("#sat").val()+"&stock_awal="+$("#stk_awal").val()+"&kategori="+$("#test").val(),
					success:function(data){
						alert("date alredy added");
						getdata();

					}
				});
			});

			$('#save_edit').click(function(){
				$.ajax({
					type:"POST",
					url:"functionforajax/perBarang/get_update.php",
					data:"kd_barang="+$("#kd_barang").val()+"&nm_barang="+$("#nm_barang").val()+"&satuan="+$("#satuan").val()+"&perl_id="+$("#perl_id").val()+"&kategori="+$("#category_id").val(),
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
