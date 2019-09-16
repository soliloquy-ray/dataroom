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
		$i = $this->db->query("SELECT u.id, u.email, u.raw, u.date_added, COUNT(distinct s.session_key) as logins FROM users u LEFT JOIN site_visits s ON u.id = s.user_id WHERE u.status = 1 GROUP BY u.id");
		return $i->result_array();
	}

	public function visitList(){
		$i = $this->db->query("SELECT u.id, u.email, DATE_ADD(s.timestamp, INTERVAL 8 HOUR) as timestamp, s.page_id, p.title FROM users u INNER JOIN site_visits s ON u.id = s.user_id inner join pages p on s.page_id = p.id ORDER BY s.timestamp DESC");
		return $i->result_array();
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