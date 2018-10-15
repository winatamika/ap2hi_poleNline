  <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Menu Trip</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Data Trip</a></li>
                                    <li class="active">Form Trips <?php echo $kode_trip; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="content pb-0">

		 <div class="row">
                <div class="col-lg-12">
                    <div class="card">  
                        <div class="card-body">
                            <h4 class="box-title"> Form 1 </h4>
                        </div>
                        <div class="row"> 
                            <div class="col-lg-8">
                                <div class="card-body"> 
                                    <!-- <canvas id="TrafficChart"></canvas>   -->

 <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id_trip</th>
                <th>id_vessel</th>
                <th>id_supplier</th>
                <th>tanggal_keberangkatan</th>
                <th>tanggal_kedatangan</th>
                <th>nama_nahkoda</th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
        	<?php  foreach ($tripDetail->result_array() as $row){ ?>
             <tr>
                <td><?php echo $row['id_trip']; ?></td>
                <td><?php echo $row['id_vessel']; ?></td>
                <td><?php echo $row['id_supplier']; ?></td>
                <td><?php echo $row['tanggal_keberangkatan']; ?></td>
                <td><?php echo $row['tanggal_kedatangan']; ?></td>
                <td><?php echo $row['nama_nahkoda']; ?></td>
                <td> <a class='btn btn-primary btn-xs' title='Edit Data' href='<?php echo base_url()."trip/trip_update/".$kode_trip; ?>'><span class='fa fa-pencil-square-o'></span></a> </td>
            </tr>
           <?php } ?>
        </tbody>
        <tfoot>
              <tr>
                <th>id_trip</th>
                <th>id_vessel</th>
                <th>id_supplier</th>
                <th>tanggal_keberangkatan</th>
                <th>tanggal_kedatangan</th>
                <th>nama_nahkoda</th>
                <th>Action </th>
            </tr>
        </tfoot>
    </table>

          								


                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-body">
                                	  				<div class='box-body'>
                                    	  			<a href="<?php echo base_url(); ?>trip/detail_pancing/<?php echo $kode_trip; ?>" class='btn btn-app'><i class='fa fa-th'></i> Detail Pancing</a>
												    <a href="<?php echo base_url(); ?>trip/detail_kelengkapan/<?php echo $kode_trip; ?>" class='btn btn-app'><i class='fa fa-th-large'></i> Detail Kelengkapan</a>
												    <a href="<?php echo base_url(); ?>trip/kuantitas_tangkapan/<?php echo $kode_trip; ?>" class='btn btn-app'><i class='fa fa-th'></i> Kuantitas Tangkapan</a>
												    <a href="<?php echo base_url(); ?>trip/palka_tuna/<?php echo $kode_trip; ?>" class='btn btn-app'><i class='fa fa-file-text'></i> Palka Tuna</a>
												    <a href="<?php echo base_url(); ?>trip/alat_memancing_umpan/<?php echo $kode_trip; ?>" class='btn btn-app'><i class='fa fa-television'></i> Alat menancing Umpan</a>
												    <a href="<?php echo base_url(); ?>trip/informasi_lain/<?php echo $kode_trip; ?>" class='btn btn-app'><i class='fa fa-bars'></i> Informasi Lain</a>
												   
												</div>
                                </div> <!-- /.card-body -->
                            </div>
                        </div> <!-- /.row --> 
                        <div class="card-body"></div>
                    </div> 
                </div><!-- /# column -->
            </div>
            <!--  Traffic  End -->

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7f-unlock"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <a href="<?php echo base_url(); ?>trip/form2/<?php echo $kode_trip; ?>"><div class="stat-text">  Form 2 </div> </a>
                                        <span>Daily Notes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7f-server"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                         <a href="<?php echo base_url(); ?>trip/form3/<?php echo $kode_trip; ?>"> <div class="stat-text">  Form 3 </div> </a>
                                         <span>Data Hasil Tangkapan </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7f-plug"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                       <a href="<?php echo base_url(); ?>trip/form4/<?php echo $kode_trip; ?>">  <div class="stat-text"> Form 4 </div> </a>
                                         <span> Data Sampling Umpan </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> 


             <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7f-delete-user"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                       <a href="<?php echo base_url(); ?>trip/form5/<?php echo $kode_trip; ?>">  <div class="stat-text">  Form 5 </div> </a>
                                         <span> Data Umpan tidak Digunakan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7f-look"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                         <a href="<?php echo base_url(); ?>trip/form6/<?php echo $kode_trip; ?>"> <div class="stat-text">  Form 6 </div>  </a>
                                         <span> ETP </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7f-next-2"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <a href="<?php echo base_url(); ?>trip/form7/<?php echo $kode_trip; ?>"> <div class="stat-text">  Form 7 </div> </a>
                                         <span> Pemindahan Ikan </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> 
            <!-- Widgets End -->
	</div>

	<script>

$(document).ready(function() {
    $('#example').DataTable({
        "scrollX": true
    });
} );

</script>