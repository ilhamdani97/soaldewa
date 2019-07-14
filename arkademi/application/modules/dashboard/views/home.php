<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Arkademy Test</title>
    <!-- CSS Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/fonts/iconfonts/mdi/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- CSS Arkademy  -->
    <link href="<?php echo base_url();?>assets/css/arcademycss.css" rel="stylesheet">
    <!-- CSS Datatabel  -->
    <link href="<?php echo base_url();?>assets/css/datatables.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/datatables.min.css" rel="stylesheet">
    <!-- CSS Font Awesome  -->
    <link href="<?php echo base_url();?>assets/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/fontawesome.min.css" rel="stylesheet">
    <!-- CSS Propper  -->
    <link href="<?php echo base_url();?>assets/css/propeller.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/propeller.min.css" rel="stylesheet">
</head>
<body>
<?php 
    $obj_work = json_decode($work);
    $obj_salary = json_decode($salary);

?>
<input id="ref_work" type="hidden" value='<?php echo $work; ?>'>
<input id="ref_salary" type="hidden" value='<?php echo $salary; ?>'>
<nav class="navbar sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url();?>assets/img/logo.png" width="65" height="30" class="d-inline-block align-top" alt="">
    Arkademy Bootcamp
  </a>
</nav>
</div>
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/img/dorado.png">
    </div>
        <div class="container parallax-form">
            
                    <?php echo $this->session->flashdata('report'); ?>
                    <h2 class="card-title text-center">Arkademy Work</h2>
                    <h3 > 
                        <button class="btn btn-xs btn-primary btn-flat" data-toggle="modal" data-target="#saveModal" ><p class="mdi mdi-shape-square-plus"> Add</p></button>
                    </h3>
                    <table id="tbl_data" class="ui celled table" >
						<thead>
                            <tr>
						        <th scope="col">Name</th>
						        <th scope="col">Work</th>
						        <th scope="col">Sallary</th>
						        <th scope="col" style="width:110px; text-align: center; padding-left: 0px;padding-right: 0px;">Action</th>
						    </tr>
						</thead>
						<tbody>
                        <?php
                            foreach ($data->result() as $row){?>
                                <tr> 
                                    <form id="form_data_edit" class="form-horizontal" onsubmit="return false">
                                    <input type="hidden" value="<?php echo $row->id;?>" class="form-control" name="name">
                                    <td><?php echo $row->name;?></td>
                                    <td><?php echo $row->name_work;?></td>
                                    <td>Rp. <?php echo number_format($row->salary,2,',','.');?></td>
                                    <td>
                                        <button  class="btn btn-xs btn-primary btn-flat" data-toggle="modal" data-target="#editModal<?php echo $row->id;?>" ><i class="mdi mdi-table-edit"></i></button>
                                        <a role="button" href="<?php echo base_url('dashboard/hapus').'/'.$row->id; ?>"  class="btn btn-xs btn-danger btn-flat " onclick="return confirm('Yakin Ingin Menghapus Data <?php echo $row->name;?> ?');" val-name="<?php echo $row->name;?>"><i class="mdi mdi-delete">
                                             </i>  
                                        </a>   
                                        
                                    </td>
                                    </form>
                            <?php }?>
						  </tbody>
						</table>
                </div>
           
        <footer class="py-2 bg-dark ">
            <div class="container">
                <p class="m-0 text-center text-white" style="font-size: 12px;"><b>Copyright</b> &copy; Arkademy 2019</p>
            </div>      
        </footer>
<!-- Modal Simpan -->
    <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pmd-modal-border">
                    <h2 class="modal-title">Tambah Data &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> 
                </div>
                <div class="modal-body">
                <?php echo form_open('dashboard/post_insert'); ?>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group ">
                        <label for="message-text" class="col-form-label">Work</label>
                            <select id="nama_work" name="work" class="form-control">
                                <option value="">Pilih Work</option>
                                    <?php foreach ($obj_work as $key => $v_work) : ?>
                                        <option value="<?php echo $v_work->id; ?>" ><?php echo $v_work->name_work; ?></option>
                                    <?php endforeach; ?>
                            </select>   
                    </div>
                    <div class="form-group ">
                        <label for="message-text" class="col-form-label">Sallary</label>
                        <input type="hidden" class="form-control" name="salary" id="nama_salary" >
                             <select id="salary" class="form-control">
                                <option value="">Pilih Salary</option>
                                    <?php foreach ($obj_salary as $key => $v_salary) : ?>
                                        <option value="<?php echo $v_salary->id; ?>" >Rp. <?php echo number_format($v_salary->salary,2,',','.');?></option>
                                    <?php endforeach; ?>
                                </select> 
                    </div>
                    
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="mdi mdi-close-circle "></i></button>
                <button type="submit" class="btn btn-primary"><i class="mdi mdi-content-save"></i></button>
                    <!-- <button id="" type="submit" class="btn btn-primary"><i class="mdi mdi-content-save"></i></button> -->
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>   
    <!-- Edit Modal -->
    <?php
		foreach ($data->result() as $row){
			$id_nama = $row->id;
			$nama = $row->name;
			$salary = $row->salary;
			$work = $row->name_work;
        ?>
    <div class="modal fade" id="editModal<?php echo $id_nama;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pmd-modal-border">
                    <h2 class="modal-title">Edit Data (<?php echo $nama;?>) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> 
                </div>
                <div class="modal-body">
                <?php echo form_open('dashboard/post_edit/' . $id_nama, array('id' => 'edit')); ?>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="recipient-name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" value="<?php echo $nama;?>" name="name">
                    </div>
                    <div class="form-group">
                        <label  class="col-form-label">Work</label>
                            <select id="" name="work" class="form-control">
                                <?php foreach ($obj_work as $key => $value) {?>
                                    <option value="<?php echo $value->id; ?>"  
                                        <?php echo ($row->id_work==$value->id)?'selected':''; ?> > 
                                        <?php echo $value->name_work; ?> 
                                    </option>
                                <?php  } ?> 
                            </select>   
                    </div>
                
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Sallary</label>
                            <select id="" name="salary" class="form-control">
                                <?php foreach ($obj_salary as $key => $value) {?>
                                    <option value="<?php echo $value->id; ?>"  
                                        <?php echo ($row->id_salary==$value->id)?'selected':''; ?> > 
                                        Rp. <?php echo number_format($value->salary,2,',','.');?>
                                    </option>
                                <?php  } ?>
                            </select>   
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="mdi mdi-close-circle "></i></button>
                <button type="submit" class="btn btn-primary"><i class="mdi mdi-table-edit"></i></button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
        
</div>  <?php } ?>   
<!-- Modal Hapus-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="saveLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>Data Berhasil Dihapus</h5>
                </div>
                
            </div>
        </div>
    </div>   
                                
    <!-- Jquery -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <!-- JS Bootstrap -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- JS  Parallax -->
    <script src="<?php echo base_url();?>assets/js/parallax.js"></script>
    <script src="<?php echo base_url();?>assets/js/parallax.min.js"></script>
    <!-- JS  Datatabel -->   
    <script src="<?php echo base_url();?>assets/js/datatables.js"></script>   
    <script src="<?php echo base_url();?>assets/js/datatables.ui.js"></script> 
    <script src="<?php echo base_url();?>assets/js/datatables.min.ui.js"></script>   
    <!-- JS  Font Awesome --> 
    <script src="<?php echo base_url();?>assets/js/fontawesome.js"></script>
    <script src="<?php echo base_url();?>assets/js/fontawesome.min.js"></script>
    <!-- JS   Propller --> 
    <script src="<?php echo base_url();?>assets/js/propeller.js"></script>
    <script src="<?php echo base_url();?>assets/js/propeller.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#tbl_data').DataTable( {
                "ordering": false
            } );
            var $obj_work = $.parseJSON($("#ref_work").val());
            var $obj_salary = $.parseJSON($("#ref_salary").val());
            $("#nama_work").change(function(){
                var id = $(this).val();
                var sel = document.getElementById('salary');
                $.each($obj_work, function(k,v){
                    if( $obj_work[k].id == id ){
                        sel.options[id].selected = true;
                        $("#nama_salary").val($obj_work[k].id);
                        $("#salary").prop("disabled", true);
                    }
                })
            });
            
            $("#save").click(function() { 
                var link = "<?php echo base_url();?>"+"dashboard/post_insert";
                var my_form = $("#form_save");
                    $.ajax({
                        url: link,
                        type: "POST",
                        data: $(my_form).serialize(),
                        cache: false,
                    success: function(respon) { 
                        window.location.reload();
                    },
                    async: false,
                        error:function(respon){

                    }
                });
            })
            $("#tbl_data").on("click",".delete_data", function() {
                $('#deleteModal').modal('show')
            });
            $("#edit_data").click(function() { 
                var link = "<?php echo base_url();?>"+"dashboard/edit";
                var my_form = $("#form_data_edit");
                    $.ajax({
                        url: link,
                        type: "POST",
                        data: $(my_form).serialize(),
                        cache: false,
                    success: function(respon) { 
                        console.log(respon);
                    },
                    async: false,
                        error:function(respon){

                    }
                });
            })

        } );
       
    </script>                   
</body>
</html>