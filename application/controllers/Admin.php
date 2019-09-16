<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct() {

        parent::__construct(); 
        //load model 
        $this->load->database();
        $this->load->model('Admin_model', 'adminmodel'); 
        $this->load->model('User_model', 'usermodel'); 
    }

	public function index()
	{
		if(!$sess = $this->session->userdata('adminid')){
			redirect('/auth/adminlogin', 'refresh');
			exit;
		}else{
			$users = $this->get_user_list();
			$this->load->view('components/admin-sidebar');
			$this->load->view('admin/home', array('users'=>$users));
			return true;
		}

	}

	public function visits()
	{
		if(!$sess = $this->session->userdata('adminid')){
			redirect('/auth/adminlogin', 'refresh');
			exit;
		}else{
			$v = $this->get_visit_list();
			$this->load->view('components/admin-sidebar');
			$this->load->view('admin/visits', array('visits'=>$v));
			return true;
		}

	}

	public function get_user_list(){
		return $this->adminmodel->userList();
	}

	public function get_visit_list(){
		return $this->adminmodel->visitList();
	}

	public function get_user_site_visits($id = 0){
		echo json_encode($this->usermodel->getUserSiteVisits($id));
	}

	public function create_user(){
		$dt = $this->input->post();
		$data = array('id'=>NULL, 'email'=>$dt['email'], 'raw'=>$dt['raw'], 'status'=>1, 'date_added'=>NULL);

		echo $this->adminmodel->createUser($data);
	}

	public function update_code(){
		$dt = $this->input->post();

		echo $this->adminmodel->updatePassword($dt['id'],$dt['code']);
	}

	public function deactivate(){
		$dt = $this->input->post();

		echo $this->adminmodel->deactivate($dt['id']);
	}

}
