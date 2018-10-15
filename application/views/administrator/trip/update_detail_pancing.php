
 <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Update Trip Detail Pancing</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Data Trip</a></li>
                                    <li class="active">Update  Trip Detail Pancing</li>
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
                                <strong class="card-title">Trip Detail Pancing</strong>
                                
                            </div>


                            <div class="card-body">

                            	<?php echo validation_errors(); ?>
                            	<?php 
                            	 $attributes = array('class'=>'form-horizontal','role'=>'form');
             						echo form_open_multipart('trip/detail_pancing/'.$kode_trip,$attributes); 
                            	?>

              <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>

                  <tbody>

                    <input type='hidden' name='kode_trip' value='<?php echo $kode_trip; ?>'>

                
                    <tr>
                            <th width='120px' scope='row'>ukuran_mata_pancing</th>    
                            <td><input type='text' class='form-control' name='ukuran_mata_pancing' id="ukuran_mata_pancing" value="<?php if( !empty($detail['ukuran_mata_pancing']) ){ echo $detail['ukuran_mata_pancing']; } ?>"></td>
                    </tr>

                    <tr>
                            <th width='120px' scope='row'>jumlah_pemancing</th>    
                            <td><input type='text' class='form-control' name='jumlah_pemancing' id="jumlah_pemancing" value="<?php if( !empty($detail['jumlah_pemancing']) ){ echo $detail['jumlah_pemancing']; } ?>"></td>
                    </tr>

              		<tr>
                            <th width='120px' scope='row'>jumlah_boiboi</th>    
                            <td><input type='text' class='form-control' name='jumlah_boiboi' id="jumlah_boiboi" value="<?php if( !empty($detail['jumlah_boiboi']) ){ echo $detail['jumlah_boiboi']; } ?>"></td>
                    </tr>

                    <tr>
                            <th width='120px' scope='row'>jumlah__palka</th>    
                            <td><input type='text' class='form-control' name='jumlah__palka' id="jumlah__palka" value="<?php if( !empty($detail['jumlah__palka']) ){ echo $detail['jumlah__palka']; } ?>"></td>
                    </tr>

                    <tr>
                            <th width='120px' scope='row'>kapasitas_palka_umpan</th>    
                            <td><input type='text' class='form-control' name='kapasitas_palka_umpan' id="kapasitas_palka_umpan" value="<?php if( !empty($detail['kapasitas_palka_umpan']) ){ echo $detail['kapasitas_palka_umpan']; } ?>"></td>
                    </tr>

                    <tr>
                            <th width='120px' scope='row'>sistem_sirkulasi_air_palka_umpan</th>    
                            <td><input type='text' class='form-control' name='sistem_sirkulasi_air_palka_umpan' id="sistem_sirkulasi_air_palka_umpan" value="<?php if( !empty($detail['sistem_sirkulasi_air_palka_umpan']) ){ echo $detail['sistem_sirkulasi_air_palka_umpan']; } ?>"></td>
                    </tr>
     
                    </tbody>
                  </table>
                </div>
             
               <button type='submit' name='submit' class='btn btn-info'>Update</button>
               <a href='<?php echo base_url()."trip/trip_detail/".$kode_trip; ?>'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
 

                               
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>


                   



        </div>
    </div><!-- .animated -->
</div><!-- .content -->
