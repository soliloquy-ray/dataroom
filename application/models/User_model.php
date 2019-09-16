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
			->where('status',1)
			->get()
			->row_array();
	}

	public function pageVisit($userId = 0,$pageId = 1,$sess_key = ''){
		$data = array("id"=>NULL,  "user_id"=>$userId, "timestamp"=>date('Y-m-d H:i:s'), "page_id"=>$pageId,"session_key"=>$sess_key);
		return $this->db->replace('site_visits',$data);
	}

	public function getUserSiteVisits($userId){	
		return $this->db->select('user_id, DATE_ADD(timestamp, INTERVAL 8 HOUR) as timestamp')
			->from('site_visits')
			->where('user_id',$userId)			
			->get()
			->result_array();
	}

	
}

?>