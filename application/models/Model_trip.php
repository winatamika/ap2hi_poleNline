<?php
class Model_trip extends CI_Model{
	

	function checkExsistingTrip($code){

		$query = $this->db->query("Select id_trip from observerform_trip where id_trip = '".$code."' ");

		
		return $query->num_rows();

		
	}

	function checkExsisting($table, $data, $column=""){

		$where_ = "";
        if (count($data)>0) {
            foreach ($data as $inputkey => $input_value) {
                $where_ .= " AND ".$inputkey." = '".$input_value."' ";
            }
        }
        $where_ = ($where_ != ""?"(".substr($where_, 4).")":"(1=1)");

        $select = "*";
        if ($column!="") {
            $select = $column;
        }

     

        $query = "
            SELECT ".$select." 
            FROM ".$table." 
            WHERE (1=1)
            AND ".$where_;


        return $this->db->query($query)->num_rows();

	}


	function createCodeTrip($POST){

		$supplierData = $this->Model_master->master_supplier_update($POST['id_supplier'])->row_array();

		$codeSupplier = $supplierData['kode_name'] ; 

		$tanggal_keberangkatan=strtotime($POST['tanggal_keberangkatan']); 

		$tanggal_keberangkatan=date("Ymd",$tanggal_keberangkatan);

		$tanggal_kedatangan=strtotime($POST['tanggal_kedatangan']); 

		$tanggal_kedatangan=date("Ymd",$tanggal_kedatangan);

		$id_vessel = $_POST['id_vessel']; 

		$code = $codeSupplier."_".$tanggal_keberangkatan."_".$tanggal_kedatangan."_".$id_vessel; 

		return $code; 
	}


	function add_trip_utama($data=array()){

		$ci = & get_instance();

		if($data){

			$code = $this->createCodeTrip($data);

			$id_user = $ci->session->userdata('id_user');

            $created_date = date('Y-m-d h:i:s');

			$tanggal_keberangkatan=strtotime($data['tanggal_keberangkatan']); 

			$tanggal_keberangkatan=date("Y-m-d",$tanggal_keberangkatan);

			$tanggal_kedatangan=strtotime($data['tanggal_kedatangan']); 

			$tanggal_kedatangan=date("Y-m-d",$tanggal_kedatangan);


			$sql = "INSERT INTO observerform_trip(
		            id_trip, id_vessel, id_supplier, call_sign, wcpfc, iotc, csbt, 
		            nama_nahkoda, nama_fishing_master, pelabuhan_keberangkatan, pelabuhan_kedatangan, 
		            tanggal_keberangkatan, tanggal_kedatangan, jumlah_wni, jumlah_wna, 
		            vms, kondisi_vms, vts, kondisi_vts, penanganan_diatas_kapal, 
		            cara_penanganan_pasca_panen, foto_kapal, upload_foto, id_user, 
		            tanggal, nama_kapal, tanda_selar, no_sipi, no_siup, rfmo, tahun_pembuatan_kapal, 
		            bendera, bahan, gt, hp, panjang_kapal, lebar_kapal)
					    VALUES ('".$code."', '".$data['id_vessel']."', '".$data['id_supplier']."', '".$data['call_sign']."', '".$data['wcpfc']."', '".$data['iotc']."', '".$data['csbt']."', 
		            '".$data['nama_nahkoda']."', '".$data['nama_fishing_master']."', '".$data['pelabuhan_keberangkatan']."', '".$data['pelabuhan_kedatangan']."', 
		            '".$tanggal_keberangkatan."', '".$tanggal_kedatangan."', '".$data['jumlah_wni']."', '".$data['jumlah_wna']."', 
		            '".$data['vms']."', '".$data['kondisi_vms']."', '".$data['vts']."', '".$data['kondisi_vts']."', '".$data['penanganan_diatas_kapal']."', 
		            '".$data['cara_penanganan_pasca_panen']."', '".$data['foto_kapal']."', '".$data['upload_foto']."', '".$id_user."', 
		            '".$created_date."', '".$data['nama_kapal']."', '".$data['tanda_selar']."', '".$data['no_sipi']."', '".$data['no_siup']."', '".$data['rfmo']."', '".$data['tahun_pembuatan_kapal']."', 
		            '".$data['bendera']."', '".$data['bahan']."', '".$data['gt']."', '".$data['hp']."', '".$data['panjang_kapal']."', '".$data['lebar_kapal']."');" ; 

			
			$result = $this->db->query($sql);



			return $code; 
		}


	}


	public function update_trip_utama($data=array()){

		$ci = & get_instance();

		if ($data)
        {

        	$id_user = $ci->session->userdata('id_user');

        	$changed_date = date('Y-m-d h:i:s');

        	$sql = "UPDATE observerform_trip
						   SET call_sign='".$data['call_sign']."', wcpfc='".$data['wcpfc']."', 
						       iotc='".$data['iotc']."', csbt='".$data['csbt']."', nama_nahkoda='".$data['nama_nahkoda']."', nama_fishing_master='".$data['nama_fishing_master']."', pelabuhan_keberangkatan='".$data['pelabuhan_keberangkatan']."', 
						       pelabuhan_kedatangan='".$data['pelabuhan_kedatangan']."', 
						       jumlah_wni='".$data['jumlah_wni']."', jumlah_wna='".$data['jumlah_wna']."', vms='".$data['vms']."', kondisi_vms='".$data['kondisi_vms']."', vts='".$data['vts']."', kondisi_vts='".$data['kondisi_vts']."', 
						       penanganan_diatas_kapal='".$data['penanganan_diatas_kapal']."', cara_penanganan_pasca_panen='".$data['cara_penanganan_pasca_panen']."', foto_kapal='".$data['foto_kapal']."', 
						       upload_foto='".$data['upload_foto']."', tanda_selar='".$data['tanda_selar']."', 
						       no_sipi='".$data['no_sipi']."', no_siup='".$data['no_siup']."', rfmo='".$data['rfmo']."', tahun_pembuatan_kapal='".$data['tahun_pembuatan_kapal']."', bendera='".$data['bendera']."', 
						       bahan='".$data['bahan']."', gt='".$data['gt']."', hp='".$data['hp']."', panjang_kapal='".$data['panjang_kapal']."', lebar_kapal='".$data['lebar_kapal']."', changed_by='".$id_user."', 
						       changed_date='".$changed_date."'
 					WHERE  id_trip = '".$data['kode_trip']."'"; 

			$this->db->query($sql);


			return TRUE;
        }

        return FALSE;


	}


	public function update_detail_pancing($data=array()){

		$kode_trip = $data['kode_trip'];

		$table = "observerform_detail_pancing"; 

		$where = array('id_trip' => $kode_trip); 

		
		if( $this->checkExsisting($table , $where , "") == 0 ){

				$sql = "INSERT INTO observerform_detail_pancing(
		            id_trip, ukuran_mata_pancing, jumlah_pemancing, jumlah_boiboi, 
		            jumlah__palka, kapasitas_palka_umpan, sistem_sirkulasi_air_palka_umpan)
					    VALUES (".$this->db->escape($data['kode_trip']).", ".$this->db->escape($data['ukuran_mata_pancing']).", ".$this->db->escape($data['jumlah_pemancing']).", ".$this->db->escape($data['jumlah_boiboi']).", 
					            ".$this->db->escape($data['jumlah__palka']).", ".$this->db->escape($data['kapasitas_palka_umpan'])." ,  ".$this->db->escape($data['sistem_sirkulasi_air_palka_umpan'])." ) " ; 

		}else{

				$sql = "UPDATE observerform_detail_pancing
						   SET ukuran_mata_pancing = ".$this->db->escape($data['ukuran_mata_pancing']).", jumlah_pemancing=".$this->db->escape($data['jumlah_pemancing']).", jumlah_boiboi=".$this->db->escape($data['jumlah_boiboi']).", 
						       jumlah__palka=".$this->db->escape($data['jumlah__palka']).", kapasitas_palka_umpan=".$this->db->escape($data['kapasitas_palka_umpan']).", sistem_sirkulasi_air_palka_umpan=".$this->db->escape($data['sistem_sirkulasi_air_palka_umpan'])."
						 WHERE id_trip = ".$this->db->escape($data['kode_trip'])." ;
						" ; 



		}

		$this->db->query($sql);


		return TRUE; 


	}


	public function update_detail_kelengkapan($data=array()){


		$kode_trip = $data['kode_trip'];

		$table = "observerform_detail_kelengkapan"; 

		$where = array('id_trip' => $kode_trip); 

		
		if( $this->checkExsisting($table , $where , "") == 0 ){

				$sql = "INSERT INTO observerform_detail_kelengkapan(
		            id_trip, sonar, fishfinder, radio, gps, telepon_satelite)
					    VALUES (".$this->db->escape($data['kode_trip']).", ".$this->db->escape($data['sonar']).", ".$this->db->escape($data['fishfinder']).", ".$this->db->escape($data['radio']).", 
					            ".$this->db->escape($data['gps']).", ".$this->db->escape($data['telepon_satelite'])." ) " ; 

		}else{

				$sql = "UPDATE observerform_detail_kelengkapan
						   SET sonar = ".$this->db->escape($data['sonar']).", fishfinder=".$this->db->escape($data['fishfinder']).", radio=".$this->db->escape($data['radio']).", 
						       gps=".$this->db->escape($data['gps']).", telepon_satelite=".$this->db->escape($data['telepon_satelite'])."
						 WHERE id_trip = ".$this->db->escape($data['kode_trip'])." ;
						" ; 



		}

		$this->db->query($sql);


		return TRUE; 


	}


	public function update_detail_palka($data=array()){

		$kode_trip = $data['kode_trip'];


		$sql = " DELETE FROM observerform_detail_palka WHERE id_trip = '".$kode_trip."'  " ; 

		$this->db->query($sql);

		$palka_no_1 = $data['palka_no_1']; 

		$palka_no_2 = $data['palka_no_2']; 

		$palka_no_3 = $data['palka_no_3']; 

		$palka_no_4 = $data['palka_no_4']; 
		
		$palka_no_5 = $data['palka_no_5']; 

		$palka_no_6 = $data['palka_no_6']; 

		$palkas = array( '1' =>  $palka_no_1 , '2' => $palka_no_2 , '3' =>$palka_no_3 , '4' => $palka_no_4 , '5' => $palka_no_5 , '6' => $palka_no_6 ) ;


			for($i=1; $i<=6; $i++ ){




					$sql = "INSERT INTO observerform_detail_palka(
						            id_trip, palka_no, palka_detail)
						    VALUES (".$this->db->escape($data['kode_trip']).", ".$this->db->escape($i).", ".$this->db->escape($palkas[$i])." )" ; 


					$this->db->query($sql);

			}

			return TRUE; 



	}


	public function update_detail_alat_umpan($data=array()){

		$kode_trip = $data['kode_trip'];

		$table = "observerform_detail_alat_umpan"; 

		$where = array('id_trip' => $kode_trip); 

		
		if( $this->checkExsisting($table , $where , "") == 0 ){

				$sql = "INSERT INTO observerform_detail_alat_umpan(
		            id_trip, lampu , boke_ami )
					    VALUES (".$this->db->escape($data['kode_trip']).", ".$this->db->escape($data['lampu']).", ".$this->db->escape($data['boke_ami']).") " ; 

		}else{

				$sql = "UPDATE observerform_detail_alat_umpan
						   SET lampu = ".$this->db->escape($data['lampu']).", boke_ami=".$this->db->escape($data['boke_ami'])."
						 WHERE id_trip = ".$this->db->escape($data['kode_trip'])." ;
						" ; 



		}

		$this->db->query($sql);


		return TRUE; 

	}

	public function update_detail_lain($data=array()){

		$kode_trip = $data['kode_trip'];

		$table = "observerform_detail_lain"; 

		$where = array('id_trip' => $kode_trip); 

		
		if( $this->checkExsisting($table , $where , "") == 0 ){

				$sql = "INSERT INTO observerform_detail_lain(
		            id_trip, solar , es , biaya_trip )
					    VALUES (".$this->db->escape($data['kode_trip']).",  ".$this->db->escape($data['solar']).", ".$this->db->escape($data['es']).", ".$this->db->escape($data['biaya_trip']).") " ; 

		}else{

				$sql = "UPDATE observerform_detail_lain
						   SET solar = ".$this->db->escape($data['solar']).", es=".$this->db->escape($data['es']).", biaya_trip=".$this->db->escape($data['biaya_trip'])."
						 WHERE id_trip = ".$this->db->escape($data['kode_trip'])." ;
						" ; 



		}

		$this->db->query($sql);


		return TRUE; 


	}


	public function add_kuantitas_tangkapan($data=array()){


		$sql = "
        	
            INSERT INTO observerform_detail_quantityfish(
            id_trip, kode_species, jumlah_ekor)
    				VALUES (".$this->db->escape($data['kode_trip'] ? : "").", ".$this->db->escape($data['kode_species'] ? : "")." , ".$this->db->escape($data['jumlah_ekor'] ? : "").")
    		";


			$this->db->query($sql);

			return TRUE; 
	}

	public function update_kuantitas_tangkapan($data=array()){

		$sql = "
        	
           UPDATE observerform_detail_quantityfish
					   SET jumlah_ekor= ".$this->db->escape($data['jumlah_ekor'])."
					 WHERE  id_trip =  ".$this->db->escape($data['kode_trip'])." and kode_species= ".$this->db->escape($data['kode_species'])."

					 ";


			$this->db->query($sql);

			return TRUE; 

	}

	public function disable_kuantitas_tangkapan($kode_trip , $kode_species){

		 return $this->db->query("DELETE from observerform_detail_quantityfish where id_trip ='$kode_trip' and kode_species = '$kode_species'");



	}


	public function form2_add($data=array()){

		$data['tanggal'] = strtotime($data['tanggal'] ); 

		$data['tanggal'] = date("Y-m-d",$data['tanggal']);

			$sql = "

					INSERT INTO observerform_catatan_harian(
           			 id_trip, tanggal, waktu, lintang, u_s, bujur, kode_aktivitas)
				    VALUES (".$this->db->escape($data['kode_trip'] ? : "").", ".$this->db->escape($data['tanggal'] ? : "").", ".$this->db->escape($data['waktu'] ? : "").", ".$this->db->escape($data['lintang'] ? : "").", ".$this->db->escape($data['u_s'] ? : "").", ".$this->db->escape($data['bujur'] ? : "").", ".$this->db->escape($data['kode_aktivitas'] ? : "").");
        	
          	";


			$this->db->query($sql);

		

			return TRUE; 

	}


	

	public function form2_update($data=array()){

		$data['tanggal'] = strtotime($data['tanggal'] ); 

		$data['tanggal'] = date("Y-m-d",$data['tanggal']);

			$sql = "

			UPDATE observerform_catatan_harian
				   SET tanggal=".$this->db->escape($data['tanggal']).", waktu=".$this->db->escape($data['waktu']).", lintang=".$this->db->escape($data['lintang']).", u_s=".$this->db->escape($data['u_s']).", bujur=".$this->db->escape($data['bujur']).", 
				       kode_aktivitas=".$this->db->escape($data['kode_aktivitas'])."
				 WHERE id_trip=".$this->db->escape($data['kode_trip'])." and seq=".$this->db->escape($data['seq']).";

				   	";


			$this->db->query($sql);

		

			return TRUE; 

		}


	public function form2_delete($kode_trip , $id){


		 return $this->db->query("DELETE from observerform_catatan_harian where id_trip ='$kode_trip' and seq = '$id'");



	}


	public function form3_add($data=array()){

			$sql = "

			INSERT INTO observerform_tangkapan(
            id_trip,  id_pemantau, hari, bulan, tahun, set_nomor, jam_mulai, 
            menit_mulai, jam_selesai, menit_selesai, jumlah_pemancing, alat_pengukur, 
            lintang, u_s, bujur, t_b, fad, jenis_fad, ikan_terasosiasi, ikan_terlihat_dengan, 
            total_hasil_tangkapan, detail_hasil_tangkapan)
			    VALUES (".$this->db->escape($data['kode_trip']).", ".$this->db->escape($data['id_pemantau']).", ".$this->db->escape($data['hari']).", ".$this->db->escape($data['bulan']).", ".$this->db->escape($data['tahun']).", ".$this->db->escape($data['set_nomor']).", ".$this->db->escape($data['jam_mulai']).", 
			            ".$this->db->escape($data['menit_mulai']).", ".$this->db->escape($data['jam_selesai']).", ".$this->db->escape($data['menit_selesai']).", ".$this->db->escape($data['jumlah_pemancing']).", ".$this->db->escape($data['alat_pengukur']).", 
			            ".$this->db->escape($data['lintang']).", ".$this->db->escape($data['u_s']).", ".$this->db->escape($data['bujur']).", ".$this->db->escape($data['t_b']).", ".$this->db->escape($data['fad']).", ".$this->db->escape($data['jenis_fad']).", ".$this->db->escape($data['ikan_terasosiasi']).", ".$this->db->escape($data['ikan_terlihat_dengan']).", 
			            ".$this->db->escape($data['total_hasil_tangkapan']).", ".$this->db->escape($data['detail_hasil_tangkapan']).");

			  	";


			$this->db->query($sql);

		

			return TRUE; 

	}

	public function form3_update($data=array()){


		$sql = "


		UPDATE observerform_tangkapan
				   SET id_pemantau=".$this->db->escape($data['id_pemantau']).", hari=".$this->db->escape($data['hari']).", bulan=".$this->db->escape($data['bulan']).", tahun=".$this->db->escape($data['tahun']).", set_nomor=".$this->db->escape($data['set_nomor']).", 
				       jam_mulai=".$this->db->escape($data['jam_mulai']).", menit_mulai=".$this->db->escape($data['menit_mulai']).", jam_selesai=".$this->db->escape($data['jam_selesai']).", menit_selesai=".$this->db->escape($data['menit_selesai']).", jumlah_pemancing=".$this->db->escape($data['jumlah_pemancing']).", 
				       alat_pengukur=".$this->db->escape($data['alat_pengukur']).", lintang=".$this->db->escape($data['lintang']).", u_s=".$this->db->escape($data['u_s']).", bujur=".$this->db->escape($data['bujur']).", t_b=".$this->db->escape($data['t_b']).", fad=".$this->db->escape($data['fad']).", jenis_fad=".$this->db->escape($data['jenis_fad']).", 
				       ikan_terasosiasi=".$this->db->escape($data['ikan_terasosiasi']).", ikan_terlihat_dengan= ".$this->db->escape($data['ikan_terlihat_dengan'])."
				 WHERE id_trip=".$this->db->escape($data['kode_trip'])." and seq=".$this->db->escape($data['seq'])." ;



			  	";


			$this->db->query($sql);

		

			return TRUE; 



	}


	public function form3_delete($kode_trip , $id){


		 return $this->db->query("DELETE from observerform_tangkapan where id_trip ='$kode_trip' and seq = '$id'");



	}


	public function add_observerform_tangkapan_hasil($data=array()){

		if ($data)
        {

        	$no = $this->Model_master->select_max( "observerform_tangkapan_hasil" , array('id_trip' => $data['id_trip'] , 'seq_tangkapan' =>  $data['seq'] ) , "nomor" )->row_array();
        	$no = $no['max'] + 1; 

        			$sql = "


        			INSERT INTO observerform_tangkapan_hasil(
					            id_trip, seq_tangkapan, nomor, kode_species, jum_ekor_tangkap, 
					            jum_ekor_sample)
					    VALUES (".$this->db->escape($data['id_trip']).", ".$this->db->escape($data['seq']).", '".$no."', ".$this->db->escape($data['kode_species']).", ".$this->db->escape($data['jum_ekor_tangkap']).", 
					            ".$this->db->escape($data['jum_ekor_sample']).")
		
			  	";


			$this->db->query($sql);

			return TRUE; 

        }

        return FALSE; 

	}



	public function update_observerform_tangkapan_hasil($data=array()){

		if ($data)
        {
        
        	$sql = "

        		UPDATE observerform_tangkapan_hasil
						   SET kode_species=".$this->db->escape($data['edit_kode_species']).", jum_ekor_tangkap=".$this->db->escape($data['edit_jum_ekor_tangkap']).", 
						       jum_ekor_sample=".$this->db->escape($data['edit_jum_ekor_sample'])."
						 WHERE id_trip=".$this->db->escape($data['edit_id_trip'])." and seq_tangkapan=".$this->db->escape($data['edit_seq'])." and nomor=".$this->db->escape($data['edit_nomor'])."


        		  	";


			$this->db->query($sql);

			return TRUE; 




        	   }

        return FALSE; 

	}


	public function delete_observerform_tangkapan_hasil($id_trip , $seq , $nomor){

		if($id_trip){


			$sql = "DELETE FROM observerform_tangkapan_hasil WHERE id_trip = ".$this->db->escape($id_trip)."  and seq_tangkapan = ".$this->db->escape($seq)." and nomor = ".$this->db->escape($nomor)." "; 

			$this->db->query($sql);


			return TRUE;

		}

		return FALSE;

	}










	public function add_observerform_tangkapan_detail($data=array()){

		if ($data)
        {

        	$no = $this->Model_master->select_max( "observerform_tangkapan_detail" , array('id_trip' => $data['id_trip'] , 'seq_tangkapan' =>  $data['seq'] ) , "nomor" )->row_array();
        	$no = $no['max'] + 1; 

        			$sql = "


        			INSERT INTO observerform_tangkapan_detail(
					            id_trip, seq_tangkapan, nomor, kode_species, panjang, 
					            berat)
					    VALUES (".$this->db->escape($data['id_trip']).", ".$this->db->escape($data['seq']).", '".$no."', ".$this->db->escape($data['kode_species']).", ".$this->db->escape($data['panjang']).", 
					            ".$this->db->escape($data['berat']).")
		
			  	";


			$this->db->query($sql);

			return TRUE; 

        }

        return FALSE; 

	}


	public function update_observerform_tangkapan_detail($data=array()){

		if ($data)
        {
        
        	$sql = "

        		UPDATE observerform_tangkapan_detail
						   SET kode_species=".$this->db->escape($data['edit_kode_species']).", panjang=".$this->db->escape($data['edit_panjang']).", 
						       berat=".$this->db->escape($data['edit_berat'])."
						 WHERE id_trip=".$this->db->escape($data['edit_id_trip'])." and seq_tangkapan=".$this->db->escape($data['edit_seq'])." and nomor=".$this->db->escape($data['edit_nomor'])."


        		  	";


			$this->db->query($sql);

			return TRUE; 




        	   }

        return FALSE; 

	}


	public function delete_observerform_tangkapan_detail($id_trip , $seq , $nomor){

		if($id_trip){


			$sql = "DELETE FROM observerform_tangkapan_detail WHERE id_trip = ".$this->db->escape($id_trip)."  and seq_tangkapan = ".$this->db->escape($seq)." and nomor = ".$this->db->escape($nomor)." "; 

			$this->db->query($sql);


			return TRUE;

		}

		return FALSE;

	}



	public function form4_add($data=array()){

		$sql = "


						INSERT INTO observerform_umpan(
				            id_trip,  no_angkut, hari, bulan, tahun, jam_mulai, menit_mulai, 
				            jam_selesai, menit_selesai, rasio_ember_umpan_kapal, rasio_ember_umpan_sampel, 
				            berat_ember_sample_umpan_kosong, berat_tupper_umpan_kosong, asal_umpan, 
				            sample_ember_no, lintang, bujur, harga_umpan, jumlah_ember_diangkut, 
				            berat_sample_ember_umpan, berat_sample_tupper_umpan)
				    VALUES (".$this->db->escape($data['kode_trip']).",  ".$this->db->escape($data['no_angkut']).", ".$this->db->escape($data['hari']).", ".$this->db->escape($data['bulan']).", ".$this->db->escape($data['tahun']).", ".$this->db->escape($data['jam_mulai']).", ".$this->db->escape($data['menit_mulai']).", 
				            ".$this->db->escape($data['jam_selesai']).", ".$this->db->escape($data['menit_selesai']).", ".$this->db->escape($data['rasio_ember_umpan_kapal']).", ".$this->db->escape($data['rasio_ember_umpan_sampel']).", 
				            ".$this->db->escape($data['berat_ember_sample_umpan_kosong']).", ".$this->db->escape($data['berat_tupper_umpan_kosong']).", ".$this->db->escape($data['asal_umpan']).", 
				            ".$this->db->escape($data['sample_ember_no']).", ".$this->db->escape($data['lintang']).", ".$this->db->escape($data['bujur']).", ".$this->db->escape($data['harga_umpan']).", ".$this->db->escape($data['jumlah_ember_diangkut']).", 
				            ".$this->db->escape($data['berat_sample_ember_umpan']).", ".$this->db->escape($data['berat_sample_tupper_umpan'])." )
		
			  	";


			$this->db->query($sql);

		

			return TRUE; 


	}

	public function form4_update($data=array()){


		$sql = "

		UPDATE observerform_umpan
			   SET  no_angkut=".$this->db->escape($data['no_angkut']).", hari=".$this->db->escape($data['hari']).", bulan=".$this->db->escape($data['bulan']).", tahun=".$this->db->escape($data['tahun']).", jam_mulai=".$this->db->escape($data['jam_mulai']).", 
			       menit_mulai=".$this->db->escape($data['menit_mulai']).", jam_selesai=".$this->db->escape($data['jam_selesai']).", menit_selesai=".$this->db->escape($data['menit_selesai']).", rasio_ember_umpan_kapal=".$this->db->escape($data['rasio_ember_umpan_kapal']).", 
			       rasio_ember_umpan_sampel=".$this->db->escape($data['rasio_ember_umpan_sampel']).", berat_ember_sample_umpan_kosong=".$this->db->escape($data['berat_ember_sample_umpan_kosong']).", 
			       berat_tupper_umpan_kosong=".$this->db->escape($data['berat_tupper_umpan_kosong']).", asal_umpan=".$this->db->escape($data['asal_umpan']).", sample_ember_no=".$this->db->escape($data['sample_ember_no']).", 
			       lintang=".$this->db->escape($data['lintang']).", bujur=".$this->db->escape($data['bujur']).", harga_umpan=".$this->db->escape($data['harga_umpan']).", jumlah_ember_diangkut=".$this->db->escape($data['jumlah_ember_diangkut']).", berat_sample_ember_umpan=".$this->db->escape($data['berat_sample_ember_umpan']).", 
			       berat_sample_tupper_umpan=".$this->db->escape($data['berat_sample_tupper_umpan'])."
			 WHERE id_trip=".$this->db->escape($data['kode_trip'])." and seq=".$this->db->escape($data['seq']).";



			  	";


			$this->db->query($sql);

		

			return TRUE; 



	}


	public function form4_delete($kode_trip , $id){


		 return $this->db->query("DELETE from observerform_umpan where id_trip ='$kode_trip' and seq = '$id'");


	}


	public function add_observerform_umpan_detail($data=array()){

		if ($data)
        {

        	$no = $this->Model_master->select_max( "observerform_umpan_detail" , array('id_trip' => $data['id_trip'] , 'seq_umpan' =>  $data['seq'] ) , "nomor" )->row_array();
        	$no = $no['max'] + 1; 

        			$sql = "
 

        			INSERT INTO observerform_umpan_detail(
					            id_trip, seq_umpan, nomor, kode_species, jumlah, 
					            berat)
					    VALUES (".$this->db->escape($data['id_trip']).", ".$this->db->escape($data['seq']).", '".$no."', ".$this->db->escape($data['kode_species']).", ".$this->db->escape($data['jumlah']).", 
					            ".$this->db->escape($data['berat']).")
		
			  	";


			$this->db->query($sql);

			return TRUE; 

        }

        return FALSE; 



	}


	public function update_observerform_umpan_detail($data=array()){

		if ($data)
        {
        
        	$sql = "

        		UPDATE observerform_umpan_detail
						   SET kode_species=".$this->db->escape($data['edit_kode_species']).", jumlah=".$this->db->escape($data['edit_jumlah']).", 
						       berat=".$this->db->escape($data['edit_berat'])."
						 WHERE id_trip=".$this->db->escape($data['edit_id_trip'])." and seq_umpan=".$this->db->escape($data['edit_seq'])." and nomor=".$this->db->escape($data['edit_nomor'])."


        		  	";


			$this->db->query($sql);

			return TRUE; 




        	   }

        return FALSE; 

	}


	public function delete_observerform_umpan_detail($id_trip , $seq , $nomor){

		if($id_trip){


			$sql = "DELETE FROM observerform_umpan_detail WHERE id_trip = ".$this->db->escape($id_trip)."  and seq_umpan = ".$this->db->escape($seq)." and nomor = ".$this->db->escape($nomor)." "; 

			$this->db->query($sql);


			return TRUE;

		}

		return FALSE;


	}






	public function form5_add($data=array()){

		$data['tanggal'] = strtotime($data['tanggal'] ); 

		$data['tanggal'] = date("Y-m-d",$data['tanggal']);

		$sql = "


						INSERT INTO observerform_umpan_non_used(
				            id_trip,  tanggal, waktu, berat_umpan_non_used, kode_aktivitas, 
            					keterangan)
				    	VALUES (".$this->db->escape($data['kode_trip']).",  ".$this->db->escape($data['tanggal']).", ".$this->db->escape($data['waktu']).", ".$this->db->escape($data['berat_umpan_non_used']).", ".$this->db->escape($data['kode_aktivitas']).",  
				    	".$this->db->escape($data['keterangan'])."
				           )
		
			  	";


			$this->db->query($sql);

		

			return TRUE; 


	}

	public function form5_update($data=array()){

		$data['tanggal'] = strtotime($data['tanggal'] ); 

		$data['tanggal'] = date("Y-m-d",$data['tanggal']);

		$sql = "


		UPDATE observerform_umpan_non_used
			   SET  tanggal=".$this->db->escape($data['tanggal']).", waktu=".$this->db->escape($data['waktu']).", berat_umpan_non_used=".$this->db->escape($data['berat_umpan_non_used']).", 
			       kode_aktivitas=".$this->db->escape($data['kode_aktivitas']).", keterangan=".$this->db->escape($data['keterangan'])."
			 WHERE id_trip=".$this->db->escape($data['kode_trip'])." and seq=".$this->db->escape($data['seq']).";

			  	";


			$this->db->query($sql);

		

			return TRUE; 



	}


	public function form5_delete($kode_trip , $id){


		 return $this->db->query("DELETE from observerform_umpan_non_used where id_trip ='$kode_trip' and seq = '$id'");


	}



}
