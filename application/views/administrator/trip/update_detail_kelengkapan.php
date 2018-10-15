
 <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Update Trip Detail Kelengkapan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Data Trip</a></li>
                                    <li class="active">Update  Trip Detail Kelengkapan</li>
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
                                <strong class="card-title">Trip Add</strong>
                                
                            </div>


                            <div class="card-body">

                            	<?php echo validation_errors(); ?>
                            	<?php 
                            	 $attributes = array('class'=>'form-horizontal','role'=>'form');
             						echo form_open_multipart('trip/detail_kelengkapan/'.$kode_trip,$attributes); 
                            	?>

              <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>

                  <tbody>

                    <input type='hidden' name='kode_trip' value='<?php echo $kode_trip; ?>'>

                
                    <tr>
                            <th width='120px' scope='row'>sonar</th>    
                            <td><input type='text' class='form-control' name='sonar' id="sonar" value="<?php if( !empty($detail['sonar']) ){ echo $detail['sonar']; } ?>"></td>
                    </tr>

                     <tr>
                            <th width='120px' scope='row'> fishfinder</th>    
                            <td><input type='text' class='form-control' name='fishfinder' id="fishfinder" value="<?php if( !empty($detail['fishfinder']) ){ echo $detail['fishfinder']; } ?>"></td>
                    </tr>

                     <tr>
                            <th width='120px' scope='row'>radio</th>    
                            <td><input type='text' class='form-control' name='radio' id="radio" value="<?php if( !empty($detail['radio']) ){ echo $detail['radio']; } ?>"></td>
                    </tr>

                     <tr>
                            <th width='120px' scope='row'>gps</th>    
                            <td><input type='text' class='form-control' name='gps' id="gps" value="<?php if( !empty($detail['gps']) ){ echo $detail['gps']; } ?>"></td>
                    </tr>

                     <tr>
                            <th width='120px' scope='row'>telepon_satelite</th>    
                            <td><input type='text' class='form-control' name='telepon_satelite' id="telepon_satelite" value="<?php if( !empty($detail['telepon_satelite']) ){ echo $detail['telepon_satelite']; } ?>"></td>
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
