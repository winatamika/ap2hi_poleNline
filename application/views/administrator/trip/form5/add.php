

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
                                    echo form_open_multipart('trip/form5_add/'.$kode_trip,$attributes); 
                                ?>

              <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>

    
                  <tbody>

                    

                       <tr>
                            <th width='120px' scope='row'>kode trip</th>   
                            <td><input type='text' class='form-control' name='kode_trip' value="<?php echo $kode_trip; ?>" readonly></td>
                       </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>tanggal</th>   
                            <td><input type='text' class='form-control' name='tanggal' id="tanggal" value="<?php if( !empty($post['tanggal']) ){ echo $post['tanggal']; } ?>"></td>
                       </tr>

                       <tr>
                            <th width='120px' scope='row'>waktu</th>   
                            <td><input type='text' class='form-control' name='waktu' value="<?php if( !empty($post['waktu']) ){ echo $post['waktu']; } ?>"></td>
                       </tr>


                       <tr>
                            <th width='120px' scope='row'>berat_umpan_non_used</th>   
                            <td><input type='text' class='form-control' name='berat_umpan_non_used' value="<?php if( !empty($post['berat_umpan_non_used']) ){ echo $post['berat_umpan_non_used']; } ?>"></td>
                       </tr>


                       <tr>
                            <th width='120px' scope='row'>kode_aktivitas</th>   
                            <td>
                              <select class="form-control" name="kode_aktivitas" id="kode_aktivitas">
                                   <option value="">Select Kode</option>
                                   <?php foreach($kode as $row){ ?>
                                    <option value="<?php echo $row ; ?>" <?php if( !empty($post['kode_aktivitas']) ){ if( $row ==  $post['kode_aktivitas']) { echo 'selected';  } } ?>><?php echo $row ; ?></option>
                                   <?php  } ?>
                              </select>
                              

                            </td>
                       </tr>


                       <tr>
                            <th width='120px' scope='row'>keterangan</th>   
                            <td><input type='text' class='form-control' name='keterangan' value="<?php if( !empty($post['keterangan']) ){ echo $post['keterangan']; } ?>"></td>
                       </tr>

                    
                    
                    </tbody>
                  </table>
                </div>
             
               <button type='submit' name='submit' class='btn btn-info'>Simpan</button>
               <a href="<?php echo base_url(); ?>trip/form5/".$kode_trip."/"><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
 

                               
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
