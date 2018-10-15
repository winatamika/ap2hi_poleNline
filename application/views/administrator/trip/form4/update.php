

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
                                    echo form_open_multipart('trip/form4_update/'.$kode_trip."/".$seq,$attributes); 
                                ?>

              <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>

    
                  <tbody>

                    

                       <tr>
                            <th width='120px' scope='row'>kode trip</th>   
                            <td><input type='text' class='form-control' name='kode_trip' value="<?php echo $kode_trip; ?>" readonly></td>
                       </tr>


                       <tr>
                            <th width='120px' scope='row'>Seq</th>   
                            <td><input type='text' class='form-control' name='seq' value="<?php echo $seq; ?>" readonly></td>
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
               <a href="<?php echo base_url(); ?>trip/form4/<?php echo $kode_trip; ?>"><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
 

                               
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                  </form>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->



 <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-header">
                               
                                <strong class="card-title">TABLE <?php echo $table1; ?></strong>
                              
                            </div>


                            <div class="card-body">

                              <?php echo $button_add ; ?>

                      <table id="observerform_umpan_detail" border="1" class="table-style table table-striped table-bordered" cellspacing="0" width="100%">
        
                            <thead>
                                <tr>
                                    <th> Nomor  </th>
                                    <th> Kode Species  </th>
                                    <th> Jumlah  </th>
                                    <th> berat </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>

                             <tfoot>
                                <tr>
                                    <th> Nomor  </th>
                                    <th> Kode Species  </th>
                                    <th> Jumlah  </th>
                                    <th> berat </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                             </tfoot>
                            
                            </table>
                              

              <div class='col-md-12'>


              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





<!-- Modal -->

 <div class="modal fade" tabindex="-1" role="dialog" id="myModalTable1">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <center><h5 class="modal-title">Tambah observerform_umpan_detail </h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form class="form-horizontal" action="<?php echo $url_add_table1; ?>" method="post" id="AddDataTable1Form">
       <div class="modal-body">

        <div class="messages"></div>


          <div class="form-group">
          <label for="exampleInputEmail1">id_trip</label>
          <input type="text" class="form-control" id="id_trip" name="id_trip" value="<?php echo $kode_trip ; ?>" readonly required>
        </div>

          <div class="form-group">
          <label for="exampleInputEmail1">seq</label>
          <input type="text" class="form-control" id="seq" name="seq" value="<?php echo $seq ; ?>" readonly required>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">kode_species</label>
          <input type="text" class="form-control" id="kode_species" name="kode_species" placeholder="Enter kode_species" required>
        </div>

         <div class="form-group">
          <label for="exampleInputEmail1">jumlah</label>
          <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Enter jumlah"  required>
        </div>

         <div class="form-group">
          <label for="exampleInputEmail1">berat</label>
          <input type="text" class="form-control" id="berat" name="berat" placeholder="Enter berat"  required>
        </div>

 

       </div>

       <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Submit data</button>
        </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



 <div class="modal fade" tabindex="-1" role="dialog" id="editTable1Modal">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <center><h5 class="modal-title">Update observerform_umpan_detail</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form class="form-horizontal" action="<?php echo $url_update_table1; ?>" method="post" id="EditDataTable1Form">
       <div class="modal-body">

        <div class="edit-messages"></div>


          <div class="form-group">
          <label for="exampleInputEmail1">id_trip</label>
          <input type="text" class="form-control" id="edit_id_trip" name="edit_id_trip" value="<?php echo $kode_trip ; ?>" readonly required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">seq</label>
          <input type="text" class="form-control" id="edit_seq" name="edit_seq" value="<?php echo $seq ; ?>" readonly required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">nomor</label>
          <input type="text" class="form-control" id="edit_nomor" name="edit_nomor" readonly required>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">kode_species</label>
          <input type="text" class="form-control" id="edit_kode_species" name="edit_kode_species" placeholder="Enter kode_species" required>
        </div>

         <div class="form-group">
          <label for="exampleInputEmail1">jumlah</label>
          <input type="text" class="form-control" id="edit_jumlah" name="edit_jumlah" placeholder="Enter jumlah"  required>
        </div>

         <div class="form-group">
          <label for="exampleInputEmail1">berat</label>
          <input type="text" class="form-control" id="edit_berat" name="edit_berat" placeholder="Enter berat"  required>
        </div>

 

       </div>

       <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Submit data</button>
        </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- remove modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="disableTable1Modal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
              <center><h5 class="modal-title">Disable</h5></center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="disable-messages"></div>
          <p>Do you really want to disable ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="hapusBtn">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- /remove modal -->


<!--END  Modal -->














<script>

 $( function() {
    $( "#tanggal" ).datepicker(
    {   changeMonth: true,
        changeYear: true,
    });

  } );


$(document).ready(function() {
  
   observerform_umpan_detail = $("#observerform_umpan_detail").DataTable({
    "ajax": "<?php echo $url_load_table ?>",
        "order": [],   
    "scrollX": true
    });




     $('#AddDataTable1Btn').on('click',function(){
        
      $('#AddDataTable1Form')[0].reset();
      $('.form-group').removeClass('has-error').removeClass('has-success');
      $('.text-danger').remove();
      $('.messages').html("");
       
      $('#AddDataTable1Form').unbind('submit').bind('submit',function(e){

      
        
        $('.text-danger').remove();
        $('.messages').html("");
          var form = $(this);

                      var me = $(this);
                        e.preventDefault();
                      if ( me.data('requestRunning') ) {
                        return;
                      }
                      me.data('requestRunning', true);
                      
          $.ajax({
                    url : form.attr('action'),
                    type : form.attr('method'),
                    data : form.serialize(),
                    dataType :'json',
                    success:function(response){
                        // remove pesan error
                        $('.form-group').removeClass('has-error').removeClass('has-success');

                        if (response.success == true) {
                            $(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                            '</div>');

                            //reset form 
                            $('#AddDataTable1Form')[0].reset();
                            //reload the datatables
                            observerform_umpan_detail.ajax.reload(null,false);
                        }else{
                            $(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                            '</div>');
                        }
                    }
                    , error: function( xhr, status, error){
                            console.log(xhr.statusText);
                            console.log(error);
                            console.log(status);


                            alert('500 Internal server error !');
                      } ,
                      complete: function() {
                        me.data('requestRunning', false);
                      } 
                });





          return false;  
      });
      
    });











}) ; 


function editData(id_trip = null, seq=null , nomor=null ){


  if(id_trip){
        $(".form-group").removeClass('has-error').removeClass('has-success');
        $(".text-danger").remove();
        // empty the message div
        $(".edit-messages").html("");

         $('#EditDataTable1Form')[0].reset();

         $.ajax({
            url: '<?php echo $url_show_table; ?>',
            type: 'post',
            data: {id_trip : id_trip , seq : seq , nomor : nomor  },
            dataType: 'json',
            success:function(response) {

              $('#edit_nomor').val(response.messages[0].nomor);
              $('#edit_kode_species').val(response.messages[0].kode_species);
              $('#edit_berat').val(response.messages[0].berat);
              $('#edit_jumlah').val(response.messages[0].jumlah);
            
          

              $("#EditDataTable1Form").unbind('submit').bind('submit', function(e) {

                 $(".text-danger").remove();

                    var form = $(this);
                    var me = $(this);
                        e.preventDefault();
                      if ( me.data('requestRunning') ) {
                        return;
                      }
                      me.data('requestRunning', true);

                   $.ajax({
                                url: form.attr('action'),
                                type: form.attr('method'),
                                data: form.serialize(),
                                dataType: 'json',
                                success:function(response) {
                    if (response.success == true) {
                        $(".edit-messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                          '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                        '</div>');
                        
                    
                        observerform_umpan_detail.ajax.reload(null,false);
                        
                      }else{
                        $(".edit-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                          '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                        '</div>');
                        alert('Gagal');
                      }
                          } ,
                       error: function(xhr, status, error) {
                        console.log(status);
                        console.log(error);
                    },
                      complete: function() {
                        me.data('requestRunning', false);
                      } 
                  }); // /ajax



                 return false;
                   
                });


            }  // /success
            , error: function( xhr, status, error){
                console.log(xhr.statusText);
                console.log(error);
                console.log(status);


               alert('500 Internal server error !');
            } 
        }); // /fetch selected member info

   } else {
        alert('Error: Refresh the page again');
    }

    
    }



    function disableData(id_trip = null, seq=null , nomor=null ){


     if(id_trip) {
      
      $("#hapusBtn").unbind('click').bind('click', function() {


          $.ajax({
                url: '<?php echo $url_delete_table1; ?>',
                type: 'post',
                data: { id_trip : id_trip , seq : seq , nomor : nomor },
                dataType: 'json',
                success:function(response) {
                  console.log(response);
                     if (response.success == true) {       
                        $(".disable-messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                            '</div>');
                    
                    observerform_umpan_detail.ajax.reload(null,false);
                    alert('berhasil');
                    $('#disableTable1Modal').modal('hide');

                    } else {
                        $(".disable-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                            '</div>');
                    }
                }, error: function(xhr, status, error) {
          console.log(status);
          console.log(error);
      }
            });


      }); // click remove btn
    } 
    else {
        alert('Error: Refresh the page again');
    }


}


</script>
