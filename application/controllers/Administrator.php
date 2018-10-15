<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Administrator extends CI_Controller {

	function index(){

		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$cek = $this->Users_model->auth_user($username,$password);
		    $row = $cek->row_array();
		    $total = $cek->num_rows();
			if ($total > 0){
				$this->session->set_userdata('upload_image_file_manager',true);
				$this->session->set_userdata(array('username'=>$row['username'],
								   'level'=>$row['role'] , 'id_user'=>$row['id_user']));
				redirect('administrator/home');
			}else{
				$data['title'] = 'Administrator &rsaquo; Log In';
				$this->load->view('administrator/view_login',$data);
			}
		}else{


			if ($this->session->level != ''){
				redirect('administrator/home');
			}else{
				
				$data['title'] = 'Administrator &rsaquo; Log In';
				$this->load->view('administrator/view_login',$data);
			}

		}

	}

	function home(){
		cek_session_admin();
		$this->template->load('administrator/template','administrator/view_home');
	}



	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}	