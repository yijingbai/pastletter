<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imagectl extends CI_Controller {
	 
	public function index()
	{
				$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
			if ($this->session->userdata('username') == NULL) {
				   $this->load->view('login');
			} else {
				$this->load->view('admin_top');
				 
				$this->load->view('admin_addnews');
			}
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


	
	
	public function listAllImage() {
			$this->load->helper(array('url','form'));
			$this->load->model('image_model');
			$this->load->library('pagination');
			$out = array(
				'data' =>$this->image_model->getImages()
			);
			$config['base_url'] = base_url("imagectl/listAllImage");
			$count = $this->image_model->countAllImage();
			foreach($count as $num) {
				$config['total_rows'] = $num["amount"];
			}
	    	$config['per_page'] = 10;

			if ($this->session->userdata('admin_name') != NULL) {
					$pass =  $this->uri->segment(3)*1;
					$out = array(
						'images' =>$this->image_model->listAllImagePage($pass,$config['per_page'])
					);
					$this->pagination->initialize($config); 
			   		 $this->loadheader();
					 
					$this->load->view('admin_listimg',$out);
			} else {
				redirect('adminlogin');
			}
	}
	
	public function listIndexImage() {
		$this->load->helper(array('url','form'));
		$this->load->model('image_model');
		$out = array(
			'data' =>$this->image_model->getImageByPage(1)
		);
		
		$count = $this->image_model->countIndexImage();
		foreach($count as $num) {
			$config['total_rows'] = $num["amount"];
		}
    	$config['per_page'] = 10;
		
		if ($this->session->userdata('username') != NULL) {
				$pass =  $this->uri->segment(3)*1;
				$out = array(
					'vip' =>$this->news_model->listAllCommentPage($pass,$config['per_page'])
				);
				$this->pagination->initialize($config); 
		   		$this->load->view('admin_top');
				 
				$this->load->view('admin_listallimages',$out);
		} else {
			$this->load->view('login');
		}
	
	}
	
	public function listSecondImage() {
		$this->load->helper(array('url','form'));
		$this->load->model('image_model');
		$out = array(
			'data' =>$this->news_model->getImageByPage(2)
		);
		if ($this->session->userdata('username') != NULL) {
			$this->load->view('admin_top');
			 
			$this->load->view('admin_listallimages',$out);
		} else {
			$this->load->view('login');
		}
	}
	
	public function delImage($id) {
		$this->load->model('image_model');
		if($this->session->userdata("admin_name") != NULL) {
				$this->image_model->delImage($id);
		} else {
			redirect(base_url("adminlogin"));
		}
	
		redirect(base_url("index.php/imagectl/listallimage"));
	}
	
	public function listThirdImage() {
		$this->load->helper(array('url','form'));
		$this->load->model('image_model');
		$out = array(
			'data' =>$this->news_model->getImageByPage(3)
		);
		if ($this->session->userdata('username') != NULL) {
			$this->load->view('admin_top');
			 
			$this->load->view('admin_listallimages',$out);
		} else {
			$this->load->view('login');
		}
	}
	
	public function editImage($id) {
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('image_model');
		if ($this->session->userdata('admin_name') != NULL) {
			if (!($this->input->post('level')&&$this->input->post('page'))) {
				$out = array(
					'data'  =>  $this->image_model->getImages($id)
				);	
				 $this->loadheader();
				 
				$this->load->view('admin_editimg',$out);
		
			} else {
				$this->form_validation->set_rules('level', '图片优先级', 'integer|required');	
				$this->form_validation->set_rules('page', '所属页面', 'integer');
				$this->form_validation->set_message('required', '%s不能为空');
				$this->form_validation->set_message('is_unique', '%s唯一');
				$this->form_validation->set_message('integer', '%s只能是整数');
				if ($this->form_validation->run() == FALSE) {
			  		 $this->loadheader();
					 
					$this->load->view('admin_editimg',$out);
				} else {
						$data = array(
							"type" => $this->input->post("type"),
							"title"  =>$this->input->post("title"),
							"titlea" => $this->input->post('titlea'),
							"imagea" => $this->input->post('imagea'),
							"page" => $this->input->post('page'),
							"language" => $this->input->post('language'),
							"level" => $this->input->post('level'),
							"page" => $this->input->post('page'),
							"id" => $id
						);
						$this->image_model->modifyImage($id,$data);
						redirect(base_url("imagectl/listAllImage"));
				}
			}
		} else {
			redirect("adminlogin");
		}
	}
	
	public function delNews($id) {
			$this->load->helper(array('url','form'));
			$this->load->model('news_model');
			if ($this->session->userdata('username') != NULL) {
				$this->news_model->delNews($id);
				redirect(base_url("index.php/newsctl/listnews"));
			} else {
				$this->load->view('login');
			}
	}
	
	public function getnewsbyid($id)  {
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('news_model');
		$out  =  array(
			"news" => $this->news_model->getNewsById($id),
			"fathers" =>  $this->news_model->getFatherCategory(),
			"sons" => $this->news_model->getAllCategory(),
		);
		$this->load->view("header", $out);
		$this->load->view("content", $out);
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */