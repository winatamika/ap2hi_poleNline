<?php
class Users_model extends CI_Model{
	

		function auth_user($username,$password){

		$query=$this->db->query("SELECT * FROM tb_user WHERE username='$username' AND password='$password' LIMIT 1");
		
		return $query;
	}



}

