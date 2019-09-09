<?php
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class User_model extends CI_Model {
	
	public $login;
	public $pass;


	public function login($login,$pass){
		return $this->db->select('*')
			->from('users')
			->where('email',$login)
			->where('password',md5($pass))
			->get()
			->row_array();
	}

	
}

?>