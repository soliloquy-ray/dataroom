<?php
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Admin_model extends CI_Model {
	
	public $login;
	public $pass;


	public function login($login,$pass){
		return $this->db->select('*')
			->from('admin')
			->where('login',$login)
			->where('password',md5($pass))
			->get()
			->row_array();
	}

	public function userList(){
		return $this->db->select('id,email,raw,date_added')
			->from('users')
			->where('status',1)
			->get()
			->result_array();
	}

	public function updatePassword($id = 0, $pass = ''){
		$this->db->where('id',$id);
		$this->db->update('users',array('raw'=>$pass, 'password'=>md5($pass)));

		return ($this->db->affected_rows() != 1) ? $this->db->_error_message() : true;
	}

	public function createUser($data = array()){
		$data['password'] = md5($data['raw']);
		return $this->db->replace('users',$data);
	}

	public function deactivate($id = 0){
		$this->db->where('id',$id);
		$this->db->update('users', array('status'=>0));
		
		return ($this->db->affected_rows() != 1) ? $this->db->_error_message() : true;
	}
	
}

?>