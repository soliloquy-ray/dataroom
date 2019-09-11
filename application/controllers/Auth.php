<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$post = $this->input->post();
		$ct = $this->adminmodel->login($post['login'],$post['password']);

		if(count($ct) > 0){
			$this->load->view('welcome_message');
		}else{
			$this->load->view('admin/login');
		}
	}

	public function adminlogin(){
		if($post = $this->input->post()){
			$ct = $this->adminmodel->login($post['login'],$post['password']);

			if($ct){
				$this->session->set_userdata('adminid',$ct['id']);
				redirect('/admin','refresh');
			}else{
				redirect('/auth/adminlogin#error', 'refresh');
				exit;
				//$this->load->view('admin/login');
			}
		}else{
			if($this->session->userdata('adminid')){
				redirect('/admin','refresh');
			}else{
				$this->load->view('admin/login');
			}
		}
	}

	public function userlogin($data = 0){
		if($post = $this->input->post()){
			$ct = $this->usermodel->login($post['login'],$post['password']);
			if($ct){
				$this->session->set_userdata('userid',$ct['id']);
				redirect('/dataroom','refresh');
			}else{
				redirect('/auth/userlogin?error=true', 'refresh');
				exit;
			}
		}else{
			if($data == 1){
				$this->session->sess_destroy();
				redirect('/auth/userlogin','refresh');
			}else{				
				if($this->session->userdata('userid')){
					redirect('/dataroom','refresh');
				}else{
					$this->load->view('user/login');
				}
			}
		}
	}

	public function clearsession($adm = 0){
		$this->session->sess_destroy();
		echo "Session destroyed";
		if($adm){
			redirect('/admin','refresh');
		}else{
			redirect('/dataroom','refresh');
		}
	}
}
