        

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
                                <strong class="card-title">Trips Form</strong>
                                <a class='pull-right btn btn-success btn-sm' href='<?php echo base_url(); ?>trip/form4_add/<?php echo $kode_trip;  ?>'><span class='fa fa-plus-square-o'> </span>Tambahkan Data</a>
                            </div>


                            <div class="card-body">

                    	

 <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>no_angkut</th>
                <th>hari</th>
                <th>bulan</th>
                <th>tahun</th>
                <th>jam_mulai</th>
                <th>menit_mulai</th>
                <th>jam_selesai</th>
                <th>menit_selesai</th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
        	<?php 

        	 foreach ($record->result_array() as $row){


        	?>
            <tr>
                <td><?php echo $row['no_angkut'] ?></td>
               	<td><?php echo $row['hari'] ?></td>
               	<td><?php echo $row['bulan'] ?></td>
                <td><?php echo $row['tahun'] ?></td>
                <td><?php echo $row['jam_mulai'] ?></td>
                <td><?php echo $row['menit_mulai'] ?></td>
                <td><?php echo $row['jam_selesai'] ?></td>
                <td><?php echo $row['menit_selesai'] ?></td>
                <td>	
                	<center>
                       <a class='btn btn-primary btn-xs' title='Edit Data' href='<?php echo base_url()."trip/form4_update/".$row['id_trip']."/".$row['seq']; ?>'><span class='fa fa-pencil-square-o'></span></a>
                       <a class='btn btn-danger btn-xs' title='Delete Data' href='<?php echo base_url()."trip/form4_delete/".$row['id_trip']."/".$row['seq']; ?>' onclick="return confirm('Are you sure you want to delete this item?');"><span class='fa fa-power-off'></span></a>
                    </center>
                 </td>
            </tr>

            <?php 
        		}
            ?>
        </tbody>
        <tfoot>
              <tr>
                <th>no_angkut</th>
                <th>hari</th>
                <th>bulan</th>
                <th>tahun</th>
                <th>jam_mulai</th>
                <th>menit_mulai</th>
                <th>jam_selesai</th>
                <th>menit_selesai</th>
                <th>Action </th>
            </tr>
        </tfoot>
    </table>

                               
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>


                   



        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<script>

$(document).ready(function() {
    $('#example').DataTable();
} );

</script>