

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
                                    echo form_open_multipart('trip/form3_add/'.$kode_trip,$attributes); 
                                ?>

              <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>

    
                  <tbody>

                    

                       <tr>
                            <th width='120px' scope='row'>kode trip</th>   
                            <td><input type='text' class='form-control' name='kode_trip' value="<?php echo $kode_trip; ?>" readonly></td>
                       </tr>

                       <tr>
                            <th width='120px' scope='row'>id_pemantau</th>   
                            <td><input type='text' class='form-control' name='id_pemantau' value="<?php if( !empty($post['id_pemantau']) ){ echo $post['id_pemantau']; } ?>"></td>
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
                            <th width='120px' scope='row'>set_nomor</th>   
                            <td><input type='text' class='form-control' name='set_nomor' value="<?php if( !empty($post['set_nomor']) ){ echo $post['set_nomor']; } ?>"></td>
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
                            <td><input type='text' class='form-control' name='jam_selesai' value="<?php  if( !empty($post['jam_selesai']) ){ echo $post['jam_selesai']; } ?>"></td>
                      </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>menit_selesai</th>   
                            <td><input type='text' class='form-control' name='menit_selesai' value="<?php if( !empty($post['menit_selesai']) ){ echo $post['menit_selesai']; } ?>"></td>
                      </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>jumlah_pemancing</th>   
                            <td><input type='text' class='form-control' name='jumlah_pemancing' value="<?php if( !empty($post['jumlah_pemancing']) ){ echo $post['jumlah_pemancing']; } ?>"></td>
                      </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>alat_pengukur</th>   
                            <td><input type='text' class='form-control' name='alat_pengukur' value="<?php if( !empty($post['alat_pengukur']) ){ echo $post['alat_pengukur']; } ?>"></td>
                      </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>lintang</th>   
                            <td><input type='text' class='form-control' name='lintang' value="<?php if( !empty($post['lintang']) ){ echo $post['lintang']; } ?>"></td>
                      </tr>

                      
                      <tr>
                            <th width='120px' scope='row'>u_s</th>   
                            <td><input type='text' class='form-control' name='u_s' value="<?php if( !empty($post['u_s']) ){ echo $post['u_s']; } ?>"></td>
                      </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>bujur</th>   
                            <td><input type='text' class='form-control' name='bujur' value="<?php if( !empty($post['bujur']) ){ echo $post['bujur']; } ?>"></td>
                      </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>t_b</th>   
                            <td><input type='text' class='form-control' name='t_b' value="<?php if( !empty($post['t_b']) ){ echo $post['t_b']; } ?>"></td>
                      </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>fad</th>   
                            <td><input type='text' class='form-control' name='fad' value="<?php if( !empty($post['fad']) ){ echo $post['fad']; } ?>"></td>
                      </tr>

                       
                      <tr>
                            <th width='120px' scope='row'>jenis_fad</th>   
                            <td><input type='text' class='form-control' name='jenis_fad' value="<?php if( !empty($post['jenis_fad']) ){ echo $post['jenis_fad']; } ?>"></td>
                      </tr>

                      
                       
            

                    <tr>
                            <th width='120px' scope='row'>ikan_terasosiasi</th>   
                             <td>
                                <select class="form-control" name="ikan_terasosiasi" id="ikan_terasosiasi">
                                     <option value="">Select kode_terasosiasi</option>
                                       <?php foreach($kode_terasosiasi->result() as $row){ ?>
                                        <option value="<?php echo $row->kode_aktivitas ; ?>"  <?php if( !empty($post['ikan_terasosiasi']) ){  if ( $post['ikan_terasosiasi'] == $row->kode_aktivitas ) { echo 'selected'; } } ?>><?php echo $row->nama_aktivitas ; ?></option>
                                       <?php  } ?>
                                </select>
                             </td>
                    </tr>

                     <tr>
                            <th width='120px' scope='row'>ikan_terlihat_dengan</th>   
                             <td>
                                <select class="form-control" name="ikan_terlihat_dengan" id="ikan_terlihat_dengan">
                                     <option value="">Select ikan_terlihat_dengan</option>
                                       <?php foreach($kode_ikan_terlihat->result() as $row){ ?>
                                        <option value="<?php echo $row->kode_aktivitas ; ?>" <?php if( !empty($post['ikan_terlihat_dengan']) ){  if ( $post['ikan_terlihat_dengan'] == $row->kode_aktivitas ) { echo 'selected'; } } ?>><?php echo $row->nama_aktivitas ; ?></option>
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
