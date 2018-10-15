
 <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Data Supplier</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Data Vessel</a></li>
                                    <li class="active">Tambah Vessel Baru</li>
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
                                <strong class="card-title">Vessel Add</strong>
                              
                            </div>


                            <div class="card-body">

                            	
                            	<?php 
                            	 $attributes = array('class'=>'form-horizontal','role'=>'form');
             						echo form_open_multipart('master/add_master_vessel',$attributes); 
                            	?>

              <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>

                  <tbody>
                    <input type='hidden' name='id' value=''>

                    	 <tr>
                    		<th width='120px' scope='row'>Supplier</th>    
                    		<td><select class="form-control" name="id_supplier" id="id_supplier">
              						 <option value="">Select Supplier</option>
						               <?php foreach($suppliers->result() as $row){ ?>
						                <option value="<?php echo $row->id_supplier ; ?>"><?php echo $row->nama_perusahaan ; ?></option>
						               <?php  } ?>
            					</select>
            				</td>


                        <tr>
                            <th width='120px' scope='row'>nama_kapal</th>    
                            <td><input type='text' class='form-control' name='nama_kapal'  required></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>nama_pemilik</th>    
                            <td><input type='text' class='form-control' name='nama_pemilik' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>no_ap2hi</th>    
                            <td><input type='text' class='form-control' name='no_ap2hi' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>no_siup</th>    
                            <td><input type='text' class='form-control' name='no_siup' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>no_seafdec</th>    
                            <td><input type='text' class='form-control' name='no_seafdec' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>no_issf</th>    
                            <td><input type='text' class='form-control' name='no_issf' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>no_kkp</th>    
                            <td><input type='text' class='form-control' name='no_kkp' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>no_dkp</th>    
                            <td><input type='text' class='form-control' name='no_dkp' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>no_vic</th>    
                            <td><input type='text' class='form-control' name='no_vic' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>no_nik</th>    
                            <td><input type='text' class='form-control' name='no_nik' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>nama_kapal_2tahun</th>    
                            <td><input type='text' class='form-control' name='nama_kapal_2tahun' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>status_kapal</th>    
                            <td><input type='text' class='form-control' name='status_kapal' ></td>
                        </tr>
                      
                      <tr>
                            <th width='120px' scope='row'>jenis_kapal</th>    
                            <td><input type='text' class='form-control' name='jenis_kapal' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>jenis_alat</th>    
                            <td><input type='text' class='form-control' name='jenis_alat' ></td>
                        </tr>
                      
                      <tr>
                            <th width='120px' scope='row'>ukuran</th>    
                            <td><input type='text' class='form-control' name='ukuran' required ></td>
                        </tr> 
                       
                      <tr>
                            <th width='120px' scope='row'>loa</th>    
                            <td><input type='text' class='form-control' name='loa' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>bahan</th>    
                            <td><input type='text' class='form-control' name='bahan' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>lebar</th>    
                            <td><input type='text' class='form-control' name='lebar' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>jenis_mesin_utama</th>    
                            <td><input type='text' class='form-control' name='jenis_mesin_utama' ></td>
                        </tr>
                      
                      <tr>
                            <th width='120px' scope='row'>kapasitas_mesin_utama</th>    
                            <td><input type='text' class='form-control' name='kapasitas_mesin_utama' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>kapasitas_palka_ikan</th>    
                            <td><input type='text' class='form-control' name='kapasitas_palka_ikan' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>kapasitas_palka_umpan</th>    
                            <td><input type='text' class='form-control' name='kapasitas_palka_umpan' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>vms</th>    
                            <td><input type='text' class='form-control' name='vms' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>lainnya</th>    
                            <td><input type='text' class='form-control' name='lainnya' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>irc</th>    
                            <td><input type='text' class='form-control' name='irc' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>jumlah_pancing</th>    
                            <td><input type='text' class='form-control' name='jumlah_pancing' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>jumlah_abk</th>    
                            <td><input type='text' class='form-control' name='jumlah_abk' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>nama_kapten</th>    
                            <td><input type='text' class='form-control' name='nama_kapten' ></td>
                        </tr>
                      
                      <tr>
                            <th width='120px' scope='row'>no_sipi</th>    
                            <td><input type='text' class='form-control' name='no_sipi' ></td>
                        </tr> 
                       
                      <tr>
                            <th width='120px' scope='row'>masa_berlaku_sipi</th>    
                            <td><input type='text' class='form-control' name='masa_berlaku_sipi' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>rfmo</th>    
                            <td><input type='text' class='form-control' name='rfmo' ></td>
                        </tr>
                      
                      <tr>
                            <th width='120px' scope='row'>tahun_pembuatan_kapal</th>    
                            <td><input type='text' class='form-control' name='tahun_pembuatan_kapal' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>bendera</th>    
                            <td><input type='text' class='form-control' name='bendera' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>bendera_2th</th>    
                            <td><input type='text' class='form-control' name='bendera_2th' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>pelabuhan_pangkalan</th>    
                            <td><input type='text' class='form-control' name='pelabuhan_pangkalan' ></td>
                        </tr>
                      
                      <tr>
                            <th width='120px' scope='row'>muat_singgah</th>    
                            <td><input type='text' class='form-control' name='muat_singgah' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>copy_surat_ijin</th>    
                            <td><input type='text' class='form-control' name='copy_surat_ijin' ></td>
                        </tr>
                      
                      <tr>
                            <th width='120px' scope='row'>shark_policy</th>    
                            <td><input type='text' class='form-control' name='shark_policy' ></td>
                        </tr>
                      
                      <tr>
                            <th width='120px' scope='row'>terdaftar_iuu</th>    
                            <td><input type='text' class='form-control' name='terdaftar_iuu' ></td>
                        </tr>
                      
                      <tr>
                            <th width='120px' scope='row'>kode_etik_pelayaran</th>    
                            <td><input type='text' class='form-control' name='kode_etik_pelayaran' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>no_imo</th>    
                            <td><input type='text' class='form-control' name='no_imo' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>lokasi_pembuatan</th>    
                            <td><input type='text' class='form-control' name='lokasi_pembuatan' ></td>
                        </tr>

                        <tr>
                            <th width='120px' scope='row'>gt</th>    
                            <td><input type='text' class='form-control' name='gt' ></td>
                        </tr>

                        <tr>
                            <th width='120px' scope='row'>pk</th>    
                            <td><input type='text' class='form-control' name='pk' ></td>
                        </tr>
                       
                      <tr>
                            <th width='120px' scope='row'>tanda_selar</th>    
                            <td><input type='text' class='form-control' name='tanda_selar' ></td>
                        </tr>
                       
                  
                    </tbody>
                  </table>
                </div>
             
               <button type='submit' name='submit' class='btn btn-info'>Tambah</button>
               <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
 

                               
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>


                   



        </div>
    </div><!-- .animated -->
</div><!-- .content -->


