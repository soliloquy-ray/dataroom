<?php
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Page_model extends CI_Model {
	

	public function getPageContents($pageId = 0){
		if($pageId == 0){
			return $this->db->select('*')
				->from('contents')
				->where('status',1)
				->get()
				->result_array();
		}else{
			return $this->db->select('*')
				->from('contents')
				->where('pageId',$pageId)
				->where('status',1)
				->get()
				->result_array();
		}
	}

	public function getContent($id = 0){		
		return $this->db->select('*')
			->from('contents')
			->where('id',$id)
			->where('status',1)
			->get()
			->row_array();
	}

	public function updateContent($data){
		return $this->db->replace('contents',$data);
	}

	public function deactivate($id = 0){
		$this->db->where('id',$id);
		$this->db->update('contents', array('status'=>0));
		
		return ($this->db->affected_rows() != 1) ? $this->db->_error_message() : true;
	}
	
}

?>