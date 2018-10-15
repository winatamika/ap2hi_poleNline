

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
                                    echo form_open_multipart('trip/form4_add/'.$kode_trip,$attributes); 
                                ?>

              <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>

    
                  <tbody>

                    

                       <tr>
                            <th width='120px' scope='row'>kode trip</th>   
                            <td><input type='text' class='form-control' name='kode_trip' value="<?php echo $kode_trip; ?>" readonly></td>
                       </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>no_angkut</th>   
                            <td><input type='text' class='form-control' name='no_angkut' value="<?php if( !empty($post['no_angkut']) ){ echo $post['no_angkut']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>hari</th>   
                            <td><input type='text' class='form-control' name='hari' value="<?php if( !empty($post['hari']) ){ echo $post['hari']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>bulan</th>   
                            <td><input type='text' class='form-control' name='bulan' value="<?php if( !empty($post['bulan']) ){ echo $post['bulan']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>tahun</th>   
                            <td><input type='text' class='form-control' name='tahun' value="<?php if( !empty($post['tahun']) ){ echo $post['tahun']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>jam_mulai</th>   
                            <td><input type='text' class='form-control' name='jam_mulai' value="<?php if( !empty($post['jam_mulai']) ){ echo $post['jam_mulai']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>menit_mulai</th>   
                            <td><input type='text' class='form-control' name='menit_mulai' value="<?php if( !empty($post['menit_mulai']) ){ echo $post['menit_mulai']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>jam_selesai</th>   
                            <td><input type='text' class='form-control' name='jam_selesai' value="<?php if( !empty($post['jam_selesai']) ){ echo $post['jam_selesai']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>menit_selesai</th>   
                            <td><input type='text' class='form-control' name='menit_selesai' value="<?php if( !empty($post['menit_selesai']) ){ echo $post['menit_selesai']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>rasio_ember_umpan_kapal</th>   
                            <td><input type='text' class='form-control' name='rasio_ember_umpan_kapal' value="<?php if( !empty($post['rasio_ember_umpan_kapal']) ){ echo $post['rasio_ember_umpan_kapal']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>rasio_ember_umpan_sampel</th>   
                            <td><input type='text' class='form-control' name='rasio_ember_umpan_sampel' value="<?php if( !empty($post['rasio_ember_umpan_sampel']) ){ echo $post['rasio_ember_umpan_sampel']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>berat_ember_sample_umpan_kosong</th>   
                            <td><input type='text' class='form-control' name='berat_ember_sample_umpan_kosong' value="<?php if( !empty($post['berat_ember_sample_umpan_kosong']) ){ echo $post['berat_ember_sample_umpan_kosong']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>berat_tupper_umpan_kosong</th>   
                            <td><input type='text' class='form-control' name='berat_tupper_umpan_kosong' value="<?php if( !empty($post['berat_tupper_umpan_kosong']) ){ echo $post['berat_tupper_umpan_kosong']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>asal_umpan</th>   
                            <td><input type='text' class='form-control' name='asal_umpan' value="<?php if( !empty($post['asal_umpan']) ){ echo $post['asal_umpan']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>sample_ember_no</th>   
                            <td><input type='text' class='form-control' name='sample_ember_no' value="<?php if( !empty($post['sample_ember_no']) ){ echo $post['sample_ember_no']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>lintang</th>   
                            <td><input type='text' class='form-control' name='lintang' value="<?php if( !empty($post['lintang']) ){ echo $post['lintang']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>bujur</th>   
                            <td><input type='text' class='form-control' name='bujur' value="<?php if( !empty($post['bujur']) ){ echo $post['bujur']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>harga_umpan</th>   
                            <td><input type='text' class='form-control' name='harga_umpan' value="<?php if( !empty($post['harga_umpan']) ){ echo $post['harga_umpan']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>jumlah_ember_diangkut</th>   
                            <td><input type='text' class='form-control' name='jumlah_ember_diangkut' value="<?php if( !empty($post['jumlah_ember_diangkut']) ){ echo $post['jumlah_ember_diangkut']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>berat_sample_ember_umpan</th>   
                            <td><input type='text' class='form-control' name='berat_sample_ember_umpan' value="<?php if( !empty($post['berat_sample_ember_umpan']) ){ echo $post['berat_sample_ember_umpan']; } ?>"></td>
                       </tr>

                      <tr>
                            <th width='120px' scope='row'>berat_sample_tupper_umpan</th>   
                            <td><input type='text' class='form-control' name='berat_sample_tupper_umpan' value="<?php if( !empty($post['berat_sample_tupper_umpan']) ){ echo $post['berat_sample_tupper_umpan']; } ?>"></td>
                       </tr>

                 
                    
                    </tbody>
                  </table>
                </div>
             
               <button type='submit' name='submit' class='btn btn-info'>Simpan</button>
               <a href="<?php echo base_url(); ?>trip/form4/".$kode_trip."/"><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
 

                               
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
