
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
 <input class="form-control" type="hidden" id="cek" value="<?php echo $_SESSION['pegawai'] ?>">
    <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Staff Dashboard</h2>   
                        <h5>Welcome <?php echo $_SESSION['name'] ?> , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Barang
                        </div>
                        <div class="panel-body">
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
                                                    <input class="form-control" type="hidden" id="jumlah_hide"/>
                                                    <span id="max">Stock tersedia :</span><span id="max_x"></span>
                                                    <label>Description </label><br>
                                                    <textarea style="border-radius:10px;border-style:none;border: 1px solid rgba(169,169,169,.6);max-width:100%;min-width:100%;padding:10px;" id="description"></textarea>
                                                    <input class="form-control" type="hidden" id="pegawai" value="<?php echo $_SESSION['pegawai'] ?>">
                                                </div>
                                            </form>
                                         </div>   
                        </div>
                        <div class="panel-footer">
                             <button type="button" class="btn btn-primary" id="save_edit">Save changes</button>
                        </div>
                    </div>
                </div>    
                </div>
                 
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal Permintaan</th>
                                            <th>Tanggal Persetujuan</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        <tr class="odd gradeX" >
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            
                                            
                                        </tr>
                                        <tr class="odd gradeX" >
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                <div class="row"> 
                    
                      
                     
    </div>

</body>
 <script src="assets/js/jquery-1.10.2.js"></script>
            <script>

                function load_data(){
                    $.ajax({
                        type: "POST",
                        url: "combo.php",
                        success: function(data){
                            $("#tested").html(data);
                           
                        }
                    });

                   
                }

                   function getdata(){
            $.ajax({
                type : "POST",
                url: "functionforajax/permin/get_data.php",
               data: "dataid="+$("#cek").val(),
                success: function(data) {
                    $("#body").html(data);
                     
                      }

                    });   
                    
                }
            
        


            $(document).ready(function(){
                    $("#max").hide();
                             $("#max_x").hide();

                    load_data();
                    getdata();

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


                    $("#tes_barang").change(function(){
                    $.ajax({
                        type: "POST",
                        url: "functionforajax/cek_stock.php",
                        data: "dataid="+$("#tes_barang").val(),
                        dataType: "json",
                        success: function(data){
                             $("#max").show();
                             $("#max_x").show();
                            $("#max_x").html("&nbsp;&nbsp;"+data+"&nbsp;unit<br><br>");
                            $("#jumlah_hide").val(data);
                            

                        }
                    });

                });


            });
            </script>             
</html>