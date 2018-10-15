<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Trip extends CI_Controller {	

	

	public function add_trip(){

		cek_session_admin();


		$kode_trip = "KodeNameSuppier_20180605_timesubmit" ; 

		$data['load_vessel_from_id_supplier']=base_url()."master/load_vessel_from_id_supplier";

		$data['select_vessel_from_id_supplier']=base_url()."master/select_vessel_from_id_supplier";

		$data['record_suppliers'] = $this->Model_master->master_supplier_lists();

		


		if (isset($_POST['submit'])){

			$this->form_validation->set_rules('id_supplier', 'Supplier Code', 'required');

			$this->form_validation->set_rules('id_vessel', 'Vessel Code', 'required');

			$this->form_validation->set_rules('nama_kapal', 'Nama Kapal', 'required');

			$this->form_validation->set_rules('tanggal_keberangkatan', 'Tanggal Keberangkatan', 'required');

			$this->form_validation->set_rules('tanggal_kedatangan', 'Tanggal Kedatangan', 'required');

			$check = 1; 

			//check apakah ada yang sama 


			if($_POST['id_supplier'] != "" && $_POST['tanggal_keberangkatan'] != "" && $_POST['tanggal_kedatangan'] && $_POST['id_vessel'] != ""){


				$code = $this->Model_trip->createCodeTrip($this->input->post());

				$check = $this->Model_trip->checkExsistingTrip($code); 


			}

			

			 if ( $this->form_validation->run() == TRUE && $check == 0  ) {

			 	//dapatkan kode trip 

	          	$kode_trip = $this->Model_trip->add_trip_utama($this->input->post());

				redirect('trip/trip_detail/'.$kode_trip);


	          }else{

	          	$data['post'] = $_POST; 

	          	$data['vesselData'] =  $this->Model_master->master_vessel_update($_POST['id_vessel'])->row_array();  

	          	$this->template->load('administrator/template','administrator/trip/add_trip_utama' , $data );

	          }

		
		//$this->load->view("administrator/trip/add_trip_utama" , $data);

		}else{

			$data['post'] = array();

			$this->template->load('administrator/template','administrator/trip/add_trip_utama' , $data );

		}
		

	}


	public function trip_detail($kode_trip){

		$data['kode_trip'] = $kode_trip ; 


		$data['tripDetail'] = $this->Model_master->general_select("observerform_trip", array('id_trip' => $kode_trip), "", ""); 


		$this->template->load('administrator/template','administrator/trip/menu_trip', $data);


	}


	public function trip_update($kode_trip){


		$data['kode_trip'] = $kode_trip ; 

		$data['load_vessel_from_id_supplier']=base_url()."master/load_vessel_from_id_supplier";

		$data['select_vessel_from_id_supplier']=base_url()."master/select_vessel_from_id_supplier";

		$data['record_suppliers'] = $this->Model_master->master_supplier_lists();
		
		$data['tripDetail'] = $this->Model_master->general_select("observerform_trip", array('id_trip' => $kode_trip), "", "")->row_array();; 


		if (isset($_POST['submit'])){

			$this->form_validation->set_rules('id_supplier', 'Supplier Code', 'required');

			$this->form_validation->set_rules('id_vessel', 'Vessel Code', 'required');

			$this->form_validation->set_rules('nama_kapal', 'Nama Kapal', 'required');

			$this->form_validation->set_rules('tanggal_keberangkatan', 'Tanggal Keberangkatan', 'required');

			$this->form_validation->set_rules('tanggal_kedatangan', 'Tanggal Kedatangan', 'required');


			if ( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->update_trip_utama($this->input->post());

				redirect('trip/trip_detail/'.$kode_trip);


	          }else{

	    
	          	$this->template->load('administrator/template','administrator/trip/update_trip_utama', $data);

	          }


		}else{

			

			$this->template->load('administrator/template','administrator/trip/update_trip_utama', $data);


		}




	}

	public function detail_pancing($kode_trip){

		$kode_trip;

		$data['kode_trip'] = $kode_trip ; 

		$data['detail'] = $this->Model_master->general_select("observerform_detail_pancing", array('id_trip' => $kode_trip), "", "")->row_array();; 

		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->update_detail_pancing($this->input->post());

				redirect('trip/trip_detail/'.$kode_trip);


	          }else{

	    
	          	$this->template->load('administrator/template','administrator/trip/update_trip_utama', $data);

	          }


		}else{

		
			$this->template->load('administrator/template','administrator/trip/update_detail_pancing', $data);
	

		}
		

	}


	public function detail_kelengkapan($kode_trip){

		$kode_trip;

		$data['kode_trip'] = $kode_trip ; 

		$data['detail'] = $this->Model_master->general_select("observerform_detail_kelengkapan", array('id_trip' => $kode_trip), "", "")->row_array();; 

		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->update_detail_kelengkapan($this->input->post());

				redirect('trip/trip_detail/'.$kode_trip);


	          }else{

	    
	          	$this->template->load('administrator/template','administrator/trip/update_trip_utama', $data);

	          }


		}else{

		
			$this->template->load('administrator/template','administrator/trip/update_detail_kelengkapan', $data);
	

		}

	}


	public function kuantitas_tangkapan($kode_trip){
		
		cek_session_admin();

		$data['kode_trip'] = $kode_trip ; 

		$data['record'] = $this->Model_master->general_select("observerform_detail_quantityfish", array('id_trip' => $kode_trip), "", "");

		$this->template->load('administrator/template','administrator/trip/kuantitas_tangkapan',$data);


	}

	public function add_kuantitas_tangkapan($kode_trip){

		cek_session_admin();

		$data['kode_trip'] = $kode_trip ; 


		if (isset($_POST['submit'])){

			$this->form_validation->set_rules('kode_trip', 'kode_trip Code', 'required');

			$this->form_validation->set_rules('kode_species', 'kode_species Code', 'required');

			$this->form_validation->set_rules('jumlah_ekor', 'jumlah_ekor Code', 'required');



			 if ( $this->form_validation->run() == TRUE ) {

			 	//dapatkan kode trip 

	          	$this->Model_trip->add_kuantitas_tangkapan($this->input->post());

				redirect('trip/kuantitas_tangkapan/'.$kode_trip);


	          }else{

	          	$data['post'] = $_POST; 

	          	$this->template->load('administrator/template','administrator/trip/add_kuantitas_tangkapan' , $data );

	          }

		
		//$this->load->view("administrator/trip/add_trip_utama" , $data);

		}else{

			$data['post'] = array();

			$this->template->load('administrator/template','administrator/trip/add_kuantitas_tangkapan' , $data );

		}

	}


	public function update_kuantitas_tangkapan($kode_trip , $kode_species){

		cek_session_admin();

		$data['kode_trip'] = $kode_trip ; 

		$data['kode_species'] = $kode_species ; 


		if (isset($_POST['submit'])){

			$this->form_validation->set_rules('kode_trip', 'kode_trip Code', 'required');

			$this->form_validation->set_rules('kode_species', 'kode_species Code', 'required');

			$this->form_validation->set_rules('jumlah_ekor', 'jumlah_ekor Code', 'required');



			 if ( $this->form_validation->run() == TRUE ) {

			 	//dapatkan kode trip 

	          	$this->Model_trip->update_kuantitas_tangkapan($this->input->post());

				redirect('trip/kuantitas_tangkapan/'.$kode_trip);


	          }else{

	          	$data['post'] = $_POST; 

	          	$this->template->load('administrator/template','administrator/trip/update_kuantitas_tangkapan' , $data );

	          }

		
		//$this->load->view("administrator/trip/add_trip_utama" , $data);

		}else{

			$data['post'] = $this->Model_master->general_select("observerform_detail_quantityfish", array('id_trip' => $kode_trip , 'kode_species' => $kode_species ), "", "")->row_array() ; 

			$this->template->load('administrator/template','administrator/trip/update_kuantitas_tangkapan' , $data );

		}

	}


	public function disable_kuantitas_tangkapan($kode_trip , $kode_species){

		$this->Model_trip->disable_kuantitas_tangkapan($kode_trip , $kode_species);

		redirect('trip/kuantitas_tangkapan/'.$kode_trip);

	}

	public function palka_tuna($kode_trip){

		$kode_trip;

		$data['kode_trip'] = $kode_trip ; 

		$data['detail'] = $this->Model_master->general_select("observerform_detail_palka", array('id_trip' => $kode_trip), "", "")->result();

		foreach ($data['detail']  as $res) {

			$data['numbering'][$res->palka_no] =  $res->palka_detail ; 

		 } 

		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->update_detail_palka($this->input->post());

				redirect('trip/trip_detail/'.$kode_trip);


	          }else{

	    
	          	$this->template->load('administrator/template','administrator/trip/update_trip_utama', $data);

	          }


		}else{

		
			$this->template->load('administrator/template','administrator/trip/update_detail_palka', $data);
	

		}

	}

	public function alat_memancing_umpan($kode_trip){

		$kode_trip;

		$data['kode_trip'] = $kode_trip ; 

		$data['detail'] = $this->Model_master->general_select("observerform_detail_alat_umpan", array('id_trip' => $kode_trip), "", "")->row_array();; 

		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->update_detail_alat_umpan($this->input->post());

				redirect('trip/trip_detail/'.$kode_trip);


	          }else{

	    
	          	$this->template->load('administrator/template','administrator/trip/update_trip_utama', $data);

	          }


		}else{

		
			$this->template->load('administrator/template','administrator/trip/update_detail_alat_umpan', $data);
	

		}

	}

	public function informasi_lain($kode_trip){

		$kode_trip;

		$data['kode_trip'] = $kode_trip ; 

		$data['detail'] = $this->Model_master->general_select("observerform_detail_lain", array('id_trip' => $kode_trip), "", "")->row_array();; 

		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->update_detail_lain($this->input->post());

				redirect('trip/trip_detail/'.$kode_trip);


	          }else{

	    
	          	$this->template->load('administrator/template','administrator/trip/update_trip_utama', $data);

	          }


		}else{

		
			$this->template->load('administrator/template','administrator/trip/update_detail_lain', $data);
	

		}

	}


	public function list_trip(){

		cek_session_admin();


		$data['record'] = $this->Model_master->general_select("observerform_trip", array(), "", "");

		$this->template->load('administrator/template','administrator/trip/list_trip',$data);



	}














	/* FORM 2 */


	public function form2($kode_trip){


		$data['kode_trip'] = $kode_trip; 

		$data['page_name'] = 'Daily Notes' ; 

		$data['page_name_detail'] = 'Form 2 Daily Notes' ; 

		$data['record'] = $this->Model_master->general_select("observerform_catatan_harian", array('id_trip' => $kode_trip), "", "");

		$this->template->load('administrator/template','administrator/trip/form2/list', $data);

	}


	public function form2_add($kode_trip){

		$data['kode_trip'] = $kode_trip; 

		$data['page_name'] = 'Daily Notes' ; 

		$data['page_name_detail'] = 'Add Form 2 Daily Notes' ; 

		$data['kode']  = $this->Model_master->general_select("master_dictionary", array('jenis_aktivitas' => 'kode_aktivitas'), "", "nama_aktivitas");

		


		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			$this->form_validation->set_rules('tanggal', 'tanggal required', 'required');

			$this->form_validation->set_rules('waktu', 'waktu required', 'required');


			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->form2_add($this->input->post());

				redirect('trip/form2/'.$kode_trip);


	          }else{

	          	$data['post'] = $_POST;
	    
	          	$this->template->load('administrator/template','administrator/trip/form2/add', $data);


	          }


		}else{

		
			$this->template->load('administrator/template','administrator/trip/form2/add', $data);

	

		}

	}


	public function form2_update($kode_trip , $id){

		$data['kode_trip'] = $kode_trip; 

		$data['seq'] = $id ; 

		$data['page_name'] = 'Daily Notes' ; 

		$data['page_name_detail'] = 'Update Form 2 Daily Notes' ; 

		$data['kode']  = $this->Model_master->general_select("master_dictionary", array('jenis_aktivitas' => 'kode_aktivitas'), "", "nama_aktivitas");

		$data['post'] = $this->Model_master->general_select("observerform_catatan_harian", array('id_trip' => $kode_trip , 'seq' => $id) , "", "")->row_array();; 

		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->form2_update($this->input->post());

				redirect('trip/form2/'.$kode_trip);


	          }else{

	    
	          	$data['post'] = $_POST;
	    
	          	$this->template->load('administrator/template','administrator/trip/form2/update', $data);


	          }


		}else{

		
				$this->template->load('administrator/template','administrator/trip/form2/update', $data);
	

		}


	}


	public function form2_delete($kode_trip , $id){


		$this->Model_trip->form2_delete($kode_trip , $id);

		redirect('trip/form2/'.$kode_trip);

	}




	/* form 2*/


	/* form 3*/

	public function form3($kode_trip){


		$data['kode_trip'] = $kode_trip; 

		$data['page_name'] = 'Data Hasil Tangkapan' ; 

		$data['page_name_detail'] = 'Form 3 Data Hasil Tangkapan' ; 

		$data['record'] = $this->Model_master->general_select("observerform_tangkapan", array('id_trip' => $kode_trip), "", "");

		$this->template->load('administrator/template','administrator/trip/form3/list', $data);

	}


	public function form3_add($kode_trip){


		$data['kode_trip'] = $kode_trip; 

		$data['page_name'] = 'Data Hasil Tangkapan' ; 

		$data['page_name_detail'] = 'Add Form 3 Data Hasil Tangkapan' ; 

		
		$data['kode_ikan_terlihat']  = $this->Model_master->general_select("master_dictionary", array('jenis_aktivitas' => 'kode_ikan_terlihat'), "", "nama_aktivitas");
		
		$data['kode_terasosiasi']  = $this->Model_master->general_select("master_dictionary", array('jenis_aktivitas' => 'kode_terasosiasi'), "", "nama_aktivitas");


		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			$this->form_validation->set_rules('hari', 'hari required', 'required');

			$this->form_validation->set_rules('bulan', 'bulan required', 'required');

			$this->form_validation->set_rules('tahun', 'tahun required', 'required');

			$this->form_validation->set_rules('set_nomor', 'set_nomor required', 'required');


			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->form3_add($this->input->post());

				redirect('trip/form3/'.$kode_trip);


	          }else{

	          	$data['post'] = $_POST;
	    
	          	$this->template->load('administrator/template','administrator/trip/form3/add', $data);


	          }


		}else{

		
			$this->template->load('administrator/template','administrator/trip/form3/add', $data);

	

		}

	}


	public function form3_update($kode_trip , $id){

		$data['kode_trip'] = $kode_trip; 

		$data['seq'] = $id ; 

		$data['page_name'] = 'Data Hasil Tangkapan' ; 

		$data['page_name_detail'] = 'Update Data Hasil Tangkapan' ; 

		$data['post'] = $this->Model_master->general_select("observerform_tangkapan", array('id_trip' => $kode_trip , 'seq' => $id) , "", "")->row_array();; 

		$data['kode_ikan_terlihat']  = $this->Model_master->general_select("master_dictionary", array('jenis_aktivitas' => 'kode_ikan_terlihat'), "", "nama_aktivitas");
		
		$data['kode_terasosiasi']  = $this->Model_master->general_select("master_dictionary", array('jenis_aktivitas' => 'kode_terasosiasi'), "", "nama_aktivitas");

		$data['table1'] = 'TOTAL HASIL TANGKAPAN'; 

		$data['table2'] = 'DETAIL TANGKAPAN'; 


		$data['button_add']= '<div><center> <button type="button" class="btn btn-success a-btn-slide-text"  data-toggle="modal" data-target="#myModalTable1" id="AddDataTable1Btn">   <span class="fa fa-plus-square" aria-hidden="true"></span> Add New</button> </center></div>'  ;

		$data['url_load_table']=base_url()."trip/view_observerform_tangkapan_hasil/".$kode_trip."/".$id;

		$data['url_show_table']=base_url()."trip/view_update_observerform_tangkapan_hasil/";

		$data['url_add_table1']=base_url()."trip/add_observerform_tangkapan_hasil";

		$data['url_update_table1']=base_url()."trip/update_observerform_tangkapan_hasil";

		$data['url_delete_table1']=base_url()."trip/delete_observerform_tangkapan_hasil";



		$data['button_add_2']= '<div><center> <button type="button" class="btn btn-success a-btn-slide-text"  data-toggle="modal" data-target="#myModalTable2" id="AddDataTable2Btn">   <span class="fa fa-plus-square" aria-hidden="true"></span> Add New</button> </center></div>'  ;

		$data['url_load_table2']=base_url()."trip/view_observerform_tangkapan_detail/".$kode_trip."/".$id;

		$data['url_show_table2']=base_url()."trip/view_update_observerform_tangkapan_detail/";

		$data['url_add_table2']=base_url()."trip/add_observerform_tangkapan_detail";

		$data['url_update_table2']=base_url()."trip/update_observerform_tangkapan_detail";

		$data['url_delete_table2']=base_url()."trip/delete_observerform_tangkapan_detail";


		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			$this->form_validation->set_rules('hari', 'hari required', 'required');

			$this->form_validation->set_rules('bulan', 'bulan required', 'required');

			$this->form_validation->set_rules('tahun', 'tahun required', 'required');

			$this->form_validation->set_rules('set_nomor', 'set_nomor required', 'required');

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->form3_update($this->input->post());

				redirect('trip/form3/'.$kode_trip);


	          }else{

	    
	          	$data['post'] = $_POST;
	    
	          	$this->template->load('administrator/template','administrator/trip/form3/update', $data);


	          }


		}else{

		
				$this->template->load('administrator/template','administrator/trip/form3/update', $data);
	

		}


	}


	public function form3_delete($kode_trip , $id){


		$this->Model_trip->form3_delete($kode_trip , $id);

		redirect('trip/form3/'.$kode_trip);


	}


	public function view_observerform_tangkapan_hasil($kode_trip , $id){


		$query = $this->Model_master->general_select("observerform_tangkapan_hasil", array('id_trip' => $kode_trip , 'seq_tangkapan' => $id) , "", ""); 

        $result = array();

        $no = 0;
        
        foreach($query->result() as $row){


                  $action1 = '<a type="button" data-toggle="modal" data-target="#editTable1Modal" onclick="editData(\'' .$row->id_trip.'\' , '.$row->seq_tangkapan.', '.$row->nomor.')" class="btn btn-primary a-btn-slide-text">
                                    <span class="fa fa-plug" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span>            
                                </a>
                                ' ; 
                 $action2 = ' <a type="button" data-toggle="modal" data-target="#disableTable1Modal" onclick="disableData(\'' .$row->id_trip.'\'  , '.$row->seq_tangkapan.', '.$row->nomor.')" class="btn btn-danger a-btn-slide-text">
                                   <span class="fa fa-times" aria-hidden="true"></span>
                                    <span><strong>Disable</strong></span>            
                                </a>' ;
           

                $result['data'][]=array(

                        $row->nomor, 
                        $row->kode_species, 
                        $row->jum_ekor_tangkap , 
                        $row->jum_ekor_sample , 
                        $action1, 
                        $action2
                
                
                ); 

        }


         echo json_encode($result);

	}


	public function add_observerform_tangkapan_hasil(){


		   //form validation 
        $this->form_validation->set_rules('id_trip', 'id_trip', 'required');
        $this->form_validation->set_rules('seq', 'seq', 'required');



        
        if ( $this->form_validation->run()  ) {
            
            //Insert to Database 
             $saved = $this->Model_trip->add_observerform_tangkapan_hasil($this->input->post());

            if ($saved)
            {
                 $success = true;
                 $messages =  "Successfully adding Data! ";
            }
            else
            {
                 $success = false;
                 $messages =  "Insert not working ! ";
            }

            
        }else{

            $success = false;
            $messages = 'Trouble adding Data!';
            
        }

            $validator['success'] = $success;
            $validator['messages'] = $messages;
        

        echo json_encode($validator);



	}


	public function view_update_observerform_tangkapan_hasil(){


		$response = array();

        $id_trip = $_POST['id_trip'];

        $seq = $_POST['seq'];

        $nomor = $_POST['nomor']; 


        $results = $this->Model_master->general_select("observerform_tangkapan_hasil", array('id_trip' => $id_trip , 'seq_tangkapan' => $seq , 'nomor' => $nomor ) , "", ""); 


        $response = array(

                'success' => true, 

                'messages' => $results->result_array()
            ); 

        echo json_encode($response);

	}

	
	public function update_observerform_tangkapan_hasil(){


		$this->form_validation->set_rules('edit_id_trip', 'edit_id_trip ', 'required');
        $this->form_validation->set_rules('edit_seq', 'edit_seq ', 'required');
        $this->form_validation->set_rules('edit_nomor', 'edit_nomor ', 'required');
        $this->form_validation->set_rules('edit_kode_species', 'edit_kode_species ', 'required');


    

        
        if ( $this->form_validation->run()  ) {
            
            //Insert to Database 
             $saved = $this->Model_trip->update_observerform_tangkapan_hasil($this->input->post());

            if ($saved)
            {
                 $success = true;
                 $messages =  "Successfully adding Data! ";
            }
            else
            {
                 $success = false;
                 $messages =  "Update not working ! ";
            }

            
        }else{

            $success = false;
            $messages = 'Trouble adding Data!';
            
        }

            $validator['success'] = $success;
            $validator['messages'] = $messages;
        

        echo json_encode($validator);


	}


	public function delete_observerform_tangkapan_hasil(){


        $saved = $this->Model_trip->delete_observerform_tangkapan_hasil($_POST['id_trip'] , $_POST['seq'] , $_POST['nomor']);

            if ($saved)
            {
                 $success = true;
                 $messages =  "Successfully disable Data! ";
            }
            else
            {
                 $success = false;
                 $messages =  "disable not working ! ";
            }
        
        $validator['success'] = $success;
        $validator['messages'] = $messages;

        echo json_encode($validator);


	}


















	public function view_observerform_tangkapan_detail($kode_trip , $id){


		$query = $this->Model_master->general_select("observerform_tangkapan_detail", array('id_trip' => $kode_trip , 'seq_tangkapan' => $id) , "", ""); 

        $result = array();

        $no = 0;
        
        foreach($query->result() as $row){


                  $action1 = '<a type="button" data-toggle="modal" data-target="#editTable2Modal" onclick="editData2(\'' .$row->id_trip.'\' , '.$row->seq_tangkapan.', '.$row->nomor.')" class="btn btn-primary a-btn-slide-text">
                                    <span class="fa fa-plug" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span>            
                                </a>
                                ' ; 
                 $action2 = ' <a type="button" data-toggle="modal" data-target="#disableTable2Modal" onclick="disableData2(\'' .$row->id_trip.'\'  , '.$row->seq_tangkapan.', '.$row->nomor.')" class="btn btn-danger a-btn-slide-text">
                                   <span class="fa fa-times" aria-hidden="true"></span>
                                    <span><strong>Disable</strong></span>            
                                </a>' ;
           

                $result['data'][]=array(

                        $row->nomor, 
                        $row->kode_species, 
                        $row->panjang , 
                        $row->berat , 
                        $action1, 
                        $action2
                
                
                ); 

        }


         echo json_encode($result);

	}


	public function add_observerform_tangkapan_detail(){


		   //form validation 
        $this->form_validation->set_rules('id_trip', 'id_trip', 'required');
        $this->form_validation->set_rules('seq', 'seq', 'required');



        
        if ( $this->form_validation->run()  ) {
            
            //Insert to Database 
             $saved = $this->Model_trip->add_observerform_tangkapan_detail($this->input->post());

            if ($saved)
            {
                 $success = true;
                 $messages =  "Successfully adding Data! ";
            }
            else
            {
                 $success = false;
                 $messages =  "Insert not working ! ";
            }

            
        }else{

            $success = false;
            $messages = 'Trouble adding Data!';
            
        }

            $validator['success'] = $success;
            $validator['messages'] = $messages;
        

        echo json_encode($validator);



	}


	public function view_update_observerform_tangkapan_detail(){


		$response = array();

        $id_trip = $_POST['id_trip'];

        $seq = $_POST['seq'];

        $nomor = $_POST['nomor']; 


        $results = $this->Model_master->general_select("observerform_tangkapan_detail", array('id_trip' => $id_trip , 'seq_tangkapan' => $seq , 'nomor' => $nomor ) , "", ""); 


        $response = array(

                'success' => true, 

                'messages' => $results->result_array()
            ); 

        echo json_encode($response);

	}

	
	public function update_observerform_tangkapan_detail(){


		$this->form_validation->set_rules('edit_id_trip', 'edit_id_trip ', 'required');
        $this->form_validation->set_rules('edit_seq', 'edit_seq ', 'required');
        $this->form_validation->set_rules('edit_nomor', 'edit_nomor ', 'required');
        $this->form_validation->set_rules('edit_kode_species', 'edit_kode_species ', 'required');


    

        
        if ( $this->form_validation->run()  ) {
            
            //Insert to Database 
             $saved = $this->Model_trip->update_observerform_tangkapan_detail($this->input->post());

            if ($saved)
            {
                 $success = true;
                 $messages =  "Successfully adding Data! ";
            }
            else
            {
                 $success = false;
                 $messages =  "Update not working ! ";
            }

            
        }else{

            $success = false;
            $messages = 'Trouble adding Data!';
            
        }

            $validator['success'] = $success;
            $validator['messages'] = $messages;
        

        echo json_encode($validator);


	}


	public function delete_observerform_tangkapan_detail(){


        $saved = $this->Model_trip->delete_observerform_tangkapan_detail($_POST['id_trip'] , $_POST['seq'] , $_POST['nomor']);

            if ($saved)
            {
                 $success = true;
                 $messages =  "Successfully disable Data! ";
            }
            else
            {
                 $success = false;
                 $messages =  "disable not working ! ";
            }
        
        $validator['success'] = $success;
        $validator['messages'] = $messages;

        echo json_encode($validator);


	}


	/* form 3*/



	/* form 4 */

	public function form4($kode_trip){


		$data['kode_trip'] = $kode_trip; 

		$data['page_name'] = 'Data Sampling Umpan' ; 

		$data['page_name_detail'] = 'Form 4 Data Sampling Umpan' ; 

		$data['record'] = $this->Model_master->general_select("observerform_umpan", array('id_trip' => $kode_trip), "", "");

		$this->template->load('administrator/template','administrator/trip/form4/list', $data);

	}


	public function form4_add($kode_trip){


		$data['kode_trip'] = $kode_trip; 

		$data['page_name'] = 'Data Sampling Umpan' ; 

		$data['page_name_detail'] = 'Add Form 4 Data Sampling Umpan' ; 

		$data['post'] = array();  


		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->form4_add($this->input->post());

				redirect('trip/form4/'.$kode_trip);


	          }else{

	          	$data['post'] = $_POST;
	    
	          	$this->template->load('administrator/template','administrator/trip/form4/add', $data);


	          }


		}else{

		
			$this->template->load('administrator/template','administrator/trip/form4/add', $data);

	

		}

	}


	public function form4_update($kode_trip , $id){

		$data['kode_trip'] = $kode_trip; 

		$data['seq'] = $id ; 

		$data['page_name'] = 'Data Sampling Umpan' ; 

		$data['page_name_detail'] = 'Update Form 4 Data Sampling Umpan' ; 

		$data['post'] = $this->Model_master->general_select("observerform_umpan", array('id_trip' => $kode_trip , 'seq' => $id) , "", "")->row_array();; 

		$data['table1'] = 'Detail Umpan'; 

		$data['button_add']= '<div><center> <button type="button" class="btn btn-success a-btn-slide-text"  data-toggle="modal" data-target="#myModalTable1" id="AddDataTable1Btn">   <span class="fa fa-plus-square" aria-hidden="true"></span> Add New</button> </center></div>'  ;

		$data['url_load_table']=base_url()."trip/view_observerform_umpan_detail/".$kode_trip."/".$id;

		$data['url_show_table']=base_url()."trip/view_update_observerform_umpan_detail/";

		$data['url_add_table1']=base_url()."trip/add_observerform_umpan_detail";

		$data['url_update_table1']=base_url()."trip/update_observerform_umpan_detail";

		$data['url_delete_table1']=base_url()."trip/delete_observerform_umpan_detail";
		
		

		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			$this->form_validation->set_rules('seq', 'seq required', 'required');

			

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->form4_update($this->input->post());

				redirect('trip/form4/'.$kode_trip);


	          }else{

	    
	          	$data['post'] = $_POST;
	    
	          	$this->template->load('administrator/template','administrator/trip/form4/update', $data);


	          }


		}else{

		
				$this->template->load('administrator/template','administrator/trip/form4/update', $data);
	

		}


	}


	public function form4_delete($kode_trip , $id){


		$this->Model_trip->form4_delete($kode_trip , $id);

		redirect('trip/form4/'.$kode_trip);


	}









	public function view_observerform_umpan_detail($kode_trip , $id){

		$query = $this->Model_master->general_select("observerform_umpan_detail", array('id_trip' => $kode_trip , 'seq_umpan' => $id) , "", ""); 

        $result = array();

        $no = 0;
        
        foreach($query->result() as $row){


                  $action1 = '<a type="button" data-toggle="modal" data-target="#editTable1Modal" onclick="editData(\'' .$row->id_trip.'\' , '.$row->seq_umpan.', '.$row->nomor.')" class="btn btn-primary a-btn-slide-text">
                                    <span class="fa fa-plug" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span>            
                                </a>
                                ' ; 
                 $action2 = ' <a type="button" data-toggle="modal" data-target="#disableTable1Modal" onclick="disableData(\'' .$row->id_trip.'\'  , '.$row->seq_umpan.', '.$row->nomor.')" class="btn btn-danger a-btn-slide-text">
                                   <span class="fa fa-times" aria-hidden="true"></span>
                                    <span><strong>Disable</strong></span>            
                                </a>' ;
           

                $result['data'][]=array(

                        $row->nomor, 
                        $row->kode_species, 
                        $row->jumlah , 
                        $row->berat , 
                        $action1, 
                        $action2
                
                
                ); 

        }


         echo json_encode($result);



	}


		public function add_observerform_umpan_detail(){


		   //form validation 
        $this->form_validation->set_rules('id_trip', 'id_trip', 'required');
        $this->form_validation->set_rules('seq', 'seq', 'required');



        
        if ( $this->form_validation->run()  ) {
            
            //Insert to Database 
             $saved = $this->Model_trip->add_observerform_umpan_detail($this->input->post());

            if ($saved)
            {
                 $success = true;
                 $messages =  "Successfully adding Data! ";
            }
            else
            {
                 $success = false;
                 $messages =  "Insert not working ! ";
            }

            
        }else{

            $success = false;
            $messages = 'Trouble adding Data!';
            
        }

            $validator['success'] = $success;
            $validator['messages'] = $messages;
        

        echo json_encode($validator);



	}


	public function view_update_observerform_umpan_detail(){


		$response = array();

        $id_trip = $_POST['id_trip'];

        $seq = $_POST['seq'];

        $nomor = $_POST['nomor']; 


        $results = $this->Model_master->general_select("observerform_umpan_detail", array('id_trip' => $id_trip , 'seq_umpan' => $seq , 'nomor' => $nomor ) , "", ""); 


        $response = array(

                'success' => true, 

                'messages' => $results->result_array()
            ); 

        echo json_encode($response);

	}

	
	public function update_observerform_umpan_detail(){


		$this->form_validation->set_rules('edit_id_trip', 'edit_id_trip ', 'required');
        $this->form_validation->set_rules('edit_seq', 'edit_seq ', 'required');
        $this->form_validation->set_rules('edit_nomor', 'edit_nomor ', 'required');
        $this->form_validation->set_rules('edit_kode_species', 'edit_kode_species ', 'required');


    

        
        if ( $this->form_validation->run()  ) {
            
            //Insert to Database 
             $saved = $this->Model_trip->update_observerform_umpan_detail($this->input->post());

            if ($saved)
            {
                 $success = true;
                 $messages =  "Successfully adding Data! ";
            }
            else
            {
                 $success = false;
                 $messages =  "Update not working ! ";
            }

            
        }else{

            $success = false;
            $messages = 'Trouble adding Data!';
            
        }

            $validator['success'] = $success;
            $validator['messages'] = $messages;
        

        echo json_encode($validator);


	}


	public function delete_observerform_umpan_detail(){


        $saved = $this->Model_trip->delete_observerform_umpan_detail($_POST['id_trip'] , $_POST['seq'] , $_POST['nomor']);

            if ($saved)
            {
                 $success = true;
                 $messages =  "Successfully disable Data! ";
            }
            else
            {
                 $success = false;
                 $messages =  "disable not working ! ";
            }
        
        $validator['success'] = $success;
        $validator['messages'] = $messages;

        echo json_encode($validator);


	}

	/* form 4 */







	/* form 5 */

	public function form5($kode_trip){


		$data['kode_trip'] = $kode_trip; 

		$data['page_name'] = 'Data Umpan yang tidak Gunakan' ; 

		$data['page_name_detail'] = 'Form 5 Data Umpan yang tidak Gunakan' ; 

		$data['record'] = $this->Model_master->general_select("observerform_umpan_non_used", array('id_trip' => $kode_trip), "", "");

		$this->template->load('administrator/template','administrator/trip/form5/list', $data);

	}

	public function form5_add($kode_trip){


		$data['kode_trip'] = $kode_trip; 

		$data['page_name'] = 'Data Umpan yang tidak Gunakan' ; 

		$data['page_name_detail'] = 'Add Form 5 Data Umpan yang tidak Gunakan' ; 

		$data['post'] = array();  

		$data['kode'] = array( 'DIBUANG' , 'DIMAKAN' , 'DIAMBIL HIDUP UNTUK MANCING' , 'SISA UMPAN TIDAK DIPAKAI DARI TRIP' ) ; 
 

		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->form5_add($this->input->post());

				redirect('trip/form5/'.$kode_trip);


	          }else{

	          	$data['post'] = $_POST;
	    
	          	$this->template->load('administrator/template','administrator/trip/form5/add', $data);


	          }


		}else{

		
			$this->template->load('administrator/template','administrator/trip/form5/add', $data);

	

		}

	}


	public function form5_update($kode_trip , $id){

		$data['kode_trip'] = $kode_trip; 

		$data['seq'] = $id ; 

		$data['page_name'] = 'Data Umpan yang tidak Gunakan' ; 

		$data['page_name_detail'] = 'Update Form 5 Data Umpan yang tidak Gunakan' ; 

		$data['post'] = $this->Model_master->general_select("observerform_umpan_non_used", array('id_trip' => $kode_trip , 'seq' => $id) , "", "")->row_array();; 

		$data['kode'] = array( 'DIBUANG' , 'DIMAKAN' , 'DIAMBIL HIDUP UNTUK MANCING' , 'SISA UMPAN TIDAK DIPAKAI DARI TRIP' ) ; 
 
				

		if (isset($_POST['submit'])){


			$this->form_validation->set_rules('kode_trip', 'kode_trip required', 'required');

			$this->form_validation->set_rules('seq', 'seq required', 'required');

			

			if( $this->form_validation->run() == TRUE  ) {

	          	$this->Model_trip->form5_update($this->input->post());

				redirect('trip/form5/'.$kode_trip);


	          }else{

	    
	          	$data['post'] = $_POST;
	    
	          	$this->template->load('administrator/template','administrator/trip/form5/update', $data);


	          }


		}else{

		
				$this->template->load('administrator/template','administrator/trip/form5/update', $data);
	

		}


	}


	public function form5_delete($kode_trip , $id){


		$this->Model_trip->form5_delete($kode_trip , $id);

		redirect('trip/form5/'.$kode_trip);


	}
}