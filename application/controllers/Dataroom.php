<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataroom extends CI_Controller {

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
        $this->load->model('Page_model', 'pagemodel'); 
    }

	public function index()
	{
		if(!$sess = $this->session->userdata('userid')){
			redirect('/auth/userlogin', 'refresh');
			exit;
		}else{
			if(!$this->session->userdata('visitedhome')){
				$this->usermodel->pageVisit($this->session->userdata('userid'),1,$this->session->userdata('session_key'));
				$this->session->set_userdata('visitedhome',true);
			}
			$contents = $this->pagemodel->getPageContents(1);
			$this->load->view('components/sidebar');
			$this->load->view('main/home',array("contents"=>$contents));
			return true;
		}

	}

	public function what_we_do()
	{
		if(!$sess = $this->session->userdata('userid')){
			redirect('/auth/userlogin', 'refresh');
			exit;
		}else{			
			if(!$this->session->userdata('visitedwhatwedo')){
				$this->usermodel->pageVisit($this->session->userdata('userid'),2,$this->session->userdata('session_key'));
				$this->session->set_userdata('visitedwhatwedo',true);
			}
			$contents = $this->pagemodel->getPageContents(2);
			$this->load->view('components/sidebar');
			$this->load->view('main/what-we-do',array("contents"=>$contents));
			return true;
		}

	}

	public function who_we_are()
	{
		if(!$sess = $this->session->userdata('userid')){
			redirect('/auth/userlogin', 'refresh');
			exit;
		}else{
			if(!$this->session->userdata('visitedwhoweare')){
				$this->usermodel->pageVisit($this->session->userdata('userid'),3,$this->session->userdata('session_key'));
				$this->session->set_userdata('visitedwhoweare',true);
			}
			$this->load->view('components/sidebar');
			$this->load->view('main/who-we-are');
			return true;
		}

	}

	public function for_investors()
	{
		if(!$sess = $this->session->userdata('userid')){
			redirect('/auth/userlogin', 'refresh');
			exit;
		}else{			
			if(!$this->session->userdata('visitedforinvestors')){
				$this->usermodel->pageVisit($this->session->userdata('userid'),4,$this->session->userdata('session_key'));
				$this->session->set_userdata('visitedforinvestors',true);
			}
			$contents = $this->pagemodel->getPageContents(4);
			$this->load->view('components/sidebar');
			$this->load->view('main/for-investors',array("contents"=>$contents));
			return true;
		}

	}

	public function case_studies()
	{
		if(!$sess = $this->session->userdata('userid')){
			redirect('/auth/userlogin', 'refresh');
			exit;
		}else{
			if(!$this->session->userdata('visitedcasestudies')){
				$this->usermodel->pageVisit($this->session->userdata('userid'),5,$this->session->userdata('session_key'));
				$this->session->set_userdata('visitedcasestudies',true);
			}
			$contents = $this->pagemodel->getPageContents(5);
			$this->load->view('components/sidebar');
			$this->load->view('main/case-studies',array("contents"=>$contents));
			return true;
		}

	}
}
