

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><?php echo $page_name ; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#"><?php echo $page_name ; ?></a></li>
                                    <li class="active"><?php echo $page_name_detail ; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


 <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-header">
                                <strong class="card-title">Add Data <?php echo $page_name_detail; ?></strong>
                              
                            </div>


                            <div class="card-body">

                                
                                <?php 
                                 $attributes = array('class'=>'form-horizontal','role'=>'form');
                                    echo form_open_multipart('trip/form2_update/'.$kode_trip.'/'.$seq,$attributes); 
                                ?>

              <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>

    
                  <tbody>

                    <tr>
                            <th width='120px' scope='row'>kode_trip</th>   
                            <td><input type='text' class='form-control' name='kode_trip' value="<?php echo $kode_trip; ?>"></td>
                    </tr>

                     <tr>
                            <th width='120px' scope='row'>kode_trip</th>   
                            <td><input type='text' class='form-control' name='seq' value="<?php echo $seq; ?>"></td>
                    </tr>


                   
                    <tr>
                            <th width='120px' scope='row'>tanggal</th>   
                            <td><input type='text' class='form-control' name='tanggal' id="tanggal" value="<?php echo $post['tanggal']; ?>" ></td>
                    </tr>

                    <tr>
                            <th width='120px' scope='row'>waktu</th>   
                             <td><input type='text' class='form-control' name='waktu' required value="<?php echo $post['waktu']; ?>"></td>
                    </tr>
                  
                    <tr>
                            <th width='120px' scope='row'>lintang</th>   
                             <td><input type='text' class='form-control' name='lintang'  required value="<?php echo $post['lintang']; ?>"></td>
                    </tr>

                    <tr>
                            <th width='120px' scope='row'>bujur</th>   
                             <td><input type='text' class='form-control' name='bujur'  required value="<?php echo $post['bujur']; ?>"></td>
                    </tr>

                    <tr>
                            <th width='120px' scope='row'>us</th>   
                             <td><input type='text' class='form-control' name='u_s'  required value="<?php echo $post['u_s']; ?>"></td>
                    </tr>

                    <tr>
                            <th width='120px' scope='row'>kode_aktivitas</th>   
                             <td>
                                <select class="form-control" name="kode_aktivitas" id="kode_aktivitas">
                                     <option value="">Select Kode Aktivitas</option>
                                       <?php foreach($kode->result() as $row){ ?>
                                        <option value="<?php echo $row->kode_aktivitas ; ?>" <?php if( $post['kode_aktivitas'] == $row->kode_aktivitas) { echo 'selected';  } ?>> <?php echo $row->nama_aktivitas ; ?></option>
                                       <?php  } ?>
                                </select>
                             </td>
                    </tr>


                    
                    </tbody>
                  </table>
                </div>
             
               <button type='submit' name='submit' class='btn btn-info'>Simpan</button>
               <a href="<?php echo base_url(); ?>trip/form2/".$kode_trip."/"><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
 

                               
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>




                   



        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<script>

 $( function() {
    $( "#tanggal" ).datepicker(
    {   changeMonth: true,
        changeYear: true,
    });

  } );


</script>
