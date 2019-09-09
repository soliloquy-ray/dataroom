<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
        $this->load->model('Page_model', 'pagemodel'); 
        $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		if(!$sess = $this->session->userdata('adminid')){
			redirect('/auth/adminlogin', 'refresh');
			exit;
		}else{
			$contents = $this->get_page_contents();
			$this->load->view('components/admin-sidebar');
			$this->load->view('admin/pages', array('contents'=>$contents));
			return true;
		}

	}

	public function get_page_contents(){
		return $this->pagemodel->getPageContents();
	}

	public function get_content(){
		$id = $this->input->post('id');
		echo json_encode( $this->pagemodel->getContent($id) );
	}

	public function new(){
		$post = $this->input->post();
		$data = array("id"=>NULL, "pageId"=>$post['pageId'], "title"=>$post['title'], "subtitle"=>$post['subtitle'], "type"=>$post['type']);

		if($post['type'] == "text"){
			$data['content'] = $post['content_text'];
			echo $this->pagemodel->updateContent($data);
		}else{

			$path = "";
			switch($post['type']){
				case "pdf": $path = "assets/pdf/";
					break;
				case "image": $path = "assets/imgs/";
					break;
				case "video": $path = "assets/video/";
					break;
			}

            $config['upload_path']          = './'.$path;
            $config['allowed_types']        = 'gif|jpg|png|mp4|pdf|avi|mov|m4v|jpeg';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;


            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                echo $this->upload->display_errors();
            }
            else
            {
            	$retdata = $this->upload->data();
            	$data['content'] = $path.preg_replace('/\s+/','_',$retdata['client_name']);
				echo $this->pagemodel->updateContent($data);
            }
		}
	}

	public function edit(){
		$post = $this->input->post();
		$data = array("id"=>$post['idnum'], "pageId"=>$post['pidnum'], "title"=>$post['title'], "subtitle"=>$post['subtitle'], "type"=>$post['type']);

		if($post['type'] == "text"){
			$data['content'] = $post['content_text'];
			echo $this->pagemodel->updateContent($data);
			return ;
		}else{

			if(!isset($_FILES['userfile']) || $_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE) {
				$data['content'] = $post['oldcontent'];
				echo $this->pagemodel->updateContent($data);
				return ;
			}

			$path = "";
			switch($post['type']){
				case "pdf": $path = "assets/pdf/";
					break;
				case "image": $path = "assets/imgs/";
					break;
				case "video": $path = "assets/video/";
					break;
			}

            $config['upload_path']          = './'.$path;
            $config['allowed_types']        = 'gif|jpg|png|mp4|pdf|avi|mov|m4v';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;


            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                echo $this->upload->display_errors();
            }
            else
            {
            	$retdata = $this->upload->data();
            	$data['content'] = $path.preg_replace('/\s+/','_',$retdata['client_name']);
				echo $this->pagemodel->updateContent($data);
            }
		}
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

		echo $this->pagemodel->deactivate($dt['id']);
	}

}
