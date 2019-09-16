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
				$this->session->set_userdata('session_key',md5(date('Y-m-d H:i:s').$ct['id']));
				redirect('/dataroom','refresh');
			}else{
				redirect('/auth/userlogin?error=true', 'refresh');
				exit;
			}
		}else{
			if($data == 1){
				$this->session->unset_userdata('userid');
				$this->session->unset_userdata('session_key');
				$this->session->unset_userdata('visitedhome');
				$this->session->unset_userdata('visitedwhatwedo');
				$this->session->unset_userdata('visitedwhoweare');
				$this->session->unset_userdata('visitedforinvestors');
				$this->session->unset_userdata('visitedcasestudies');
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
		if($adm){
			$this->session->unset_userdata('adminid');
			redirect('/admin','refresh');
		}else{
			$this->session->unset_userdata('userid');
			$this->session->unset_userdata('session_key');
			$this->session->unset_userdata('visitedhome');
			$this->session->unset_userdata('visitedwhatwedo');
			$this->session->unset_userdata('visitedwhoweare');
			$this->session->unset_userdata('visitedforinvestors');
			$this->session->unset_userdata('visitedcasestudies');
			redirect('/dataroom','refresh');
		}
	}
}
