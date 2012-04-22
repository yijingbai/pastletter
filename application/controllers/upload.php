<?php

class Upload extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
 
 }
 

	
	
	public function loadheader() {
		$this->load->model("letter_model");
			$this->load->model("user_model");
		$data = array(
			"sent" => count($this->letter_model->getAllPublicLetterSentC()),
			'unsent' => count($this->letter_model->getAllPublicLetterUnsentC()),
			"user" => count($this->user_model->getUsersC())
		);
		$this->load->view('admin_header',$data);
		$this->load->view('admin_left');
	}



 function index()
 {
	if ($this->session->userdata('admin_name') == NULL) {
		redirect(base_url("adminlogin"));
	} else {
		$config['upload_path'] = './static/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->library('upload', $config);
		$this->load->model("image_model");
	
		$this->form_validation->set_rules('level', '图片优先级', '');	
		$this->form_validation->set_rules('type', '图片类型', 'numuric');
		$this->form_validation->set_rules('page', '图片页面', 'integer');
	
		$this->form_validation->set_message('required', '%s不能为空');
		$this->form_validation->set_message('is_unique', '%s唯一');
		if ($this->form_validation->run() == FALSE) {
		  		$this->loadheader();
				 
				$this->load->view('admin_upimg',array('error' => "",'upload_data' => ""));
		} else {
				if (!$this->upload->do_upload()) {
			 		$error = array('error' => $this->upload->display_errors());
	   					$this->loadheader();
						 
						$this->load->view('admin_upimg',array('error' => $this->upload->display_errors(),'upload_data' => ""));
	  		 	} else {
						$imgdata = $this->upload->data();
				 	  	$data = array(
							"src"   => base_url("static/uploads/".$imgdata["file_name"]),
							"type" => $this->input->post("type"),
							"title" => $this->input->post("title"),
							"titlea" => $this->input->post("titlea"),
							"imagea" => $this->input->post("imagea"),
							"page" => $this->input->post("page"),
							"level" => $this->input->post("level"),
							"language" => $this->input->post("language")
						);
					$this->image_model->insertImage($data);
					$this->loadheader();
					 
					$this->load->view('admin_upimg',array('error' => "",'upload_data' => $imgdata));
	 		 }
		
		}
	}
		
	
 
 } 
}
?>