<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Letterctl extends CI_Controller {
	function __construct() {
		parent::__construct();
		/*if ($this->session->userdata("language") == "1") {
			$this->lang->load('index', 'chinese');
		} else {
			$this->lang->load('index', 'english');
		}*/
			$this->lang->load('index', 'english');
				$this->lang->load('form_validation', 'english');
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
	
	public function user_check($name,$pass,$passcode)
	 {
		$this->load->model("user_model");
		if($passcode == $this->session->userdata("Checknumuser")) {
			$users = $this->user_model->getUserByName($name);
		  	if (count($users) == 0) {
				$error = array(
					"result" => FALSE,
					"username" => $name,
					"message" => $this->lang->line('nouser')
				);
		   		return $error;
		  	} else {
				$user = $users[0];
				if ($pass == $user["password"] && $user["admin"] == 1) {
					return "TRUE";
				} else {
					$error = array(
						"result" => FALSE,
						"username" => $name,
						"message" => $this->lang->line('passwrong')
					);
			   		return $error;
				}
			}
		} else {
			$error = array(
				"result" => FALSE,
				"username" => $name,
				"message" => $this->lang->line('errorcode')
			);
	   		return $error;
		} 
	 }
	
	public function insertLetterToPast() {
		$this->load->model("letter_model");
			$language = $this->session->userdata("language");
			$language = 1; //设定
	//	if ($this->session->userdata('username') != NULL) {
			$this->form_validation->set_rules('email',$this->lang->line('email'), 'required|valid_email');
			$this->form_validation->set_rules('title', $this->lang->line('title'), 'required');
			$this->form_validation->set_rules('content', $this->lang->line('content'), 'required');
		 	$this->form_validation->set_rules('year', $this->lang->line('year'), 'required|integer');
		 	$this->form_validation->set_rules('month', $this->lang->line('month'), 'required|integer');
		 	$this->form_validation->set_rules('day', $this->lang->line('day'), 'required|integer');
			$this->form_validation->set_rules('is_public', $this->lang->line('is_public'), 'required|integer');
			$this->form_validation->set_message('required', $this->lang->line('required'));
			$this->form_validation->set_message('integer', $this->lang->line('integer'));
			echo $this->session->userdata("Checknumuser");
		//	if ($this->input->post("passcode") == $this->session->userdata("Checknumuser")) {
				if ($this->form_validation->run() == FALSE) {
						$language = $this->session->userdata("language");
						$this->load->model("letter_model");
						$out["data"] = array(
							"email" => $this->input->post("email"),
							"title" => $this->input->post("title"),
							"year" => $this->input->post("year"),
							"content" => $this->input->post("content"),
							"month" => $this->input->post("month"),
							"day" => $this->input->post("day"),
							"type" => $this->input->post("type"),
							"is_abey" => $this->input->post("is_abey"),
							"letters" => $this->letter_model->getPublicLetterByType(0,$language,0,3)
						);
					
						$this->load->view('header');
						$this->load->view('indexfullp',$out);
						$this->load->view('foot');
				} else {
				
					 	  	$data = array(
								"email" => $this->input->post("email"),
								"title" => $this->input->post("title"),
								"year" => $this->input->post("year"),
								"month" => $this->input->post("month"),
								"day" => $this->input->post("day"),
								"type" => 0,
								"user_id" => $this->session->userdata("user_id"),
								"is_public" => $this->input->post("is_public"),
								"content" => $this->input->post("content"),
								"language" => $language
							);
						$this->letter_model->insertLetter($data);
						echo "<script>alert(\"发送成功\")</script>";
						$this->load->view('header');
						$this->load->view('indexfullp');
						$this->load->view('foot');			 		 
				}
/*		} else {
			$out['error'] = $this->lang->line("errorcode");
				$this->load->view('header');
				$this->load->view('indexfullp',$out);
				$this->load->view('foot');
		};*/
  	//	} else { echo  "验证码错误";}
			
	}
	
	public function insertLetterToFuture() {
		$this->load->model("letter_model");
		$this->load->helper(array('form', 'url'));
		$language = $this->session->userdata("language");
		$language = 1; //设定
		if ($this->session->userdata('username') != NULL) {
			$this->form_validation->set_rules('email',$this->lang->line('email'), 'valid_email|required');
			$this->form_validation->set_rules('title', $this->lang->line('subject'), 'required');
			$this->form_validation->set_rules('content', $this->lang->line('content'), 'required');
		 	$this->form_validation->set_rules('year', $this->lang->line('year'), 'required|integer');
		 	$this->form_validation->set_rules('month', $this->lang->line('month'), 'required|integer');
		 	$this->form_validation->set_rules('day', $this->lang->line('day'), 'required|integer');
			$this->form_validation->set_rules('is_public', $this->lang->line('is_public'), 'required|integer');
			$this->form_validation->set_message('required', $this->lang->line('required'));
			$this->form_validation->set_message('integer', $this->lang->line('integer'));
			if ($this->form_validation->run() == FALSE) {
			  		$this->load->view('headerf');
					$this->load->view('indexfullf');
					$this->load->view('foot');
			} else {
				 	  	$data = array(
							"email" => $this->input->post("email"),
							"title" => $this->input->post("title"),
							"year" => $this->input->post("year"),
							"month" => $this->input->post("month"),
							"day" => $this->input->post("day"),
							"type" => 1,
							"user_id" => $this->session->userdata("user_id"),
							"is_public" => $this->input->post("is_public"),
							"content" => $this->input->post("content"),
							"language" => $language
						);
					$this->letter_model->insertLetter($data);
						$this->load->view('headerf');
						$this->load->view('indexfullf');
						$this->load->view('foot');
		 		 

			}
		} else {
			redirect();
		}
	}
	
	public function changePage($change,$type) {
		$out["data"] = array(
			"pagetype" => $type,
			"email" => $this->input->post("email"),
			"title" => $this->input->post("title"),
			"year" => $this->input->post("year"),
			"month" => $this->input->post("month"),
			"day" => $this->input->post("day"),
			"type" => $this->input->post("type"),
			"is_abey" => $this->input->post("is_abey")
		);
		switch($type) {
			case 0 :
				switch($change) {
					case 0 :
						$this->load->view("header");
						$this->load->view("indexfullp",$out);
						break;
					case 1 :
						$this->load->view("header");
						$this->load->view("index",$out);
						break;
				}
			case 1 :
				switch($change) {
					case 0 :
						$this->load->view("headerf");
						$this->load->view("indexfullf",$out);
						break;
					case 1 :
						$this->load->view("headerf");
						$this->load->view("index",$out);
				}
		}
	}
	
	public function listAllLetterPublic() {
		$this->load->model("letter_model");
		$this->load->library('pagination');
		if ($this->session->userdata('admin_name') == NULL) {
			redirect(base_url("adminlogin"));
		} else {
			$config['base_url'] = base_url("/letterctl/listAllLetterPublic");
			$config['total_rows']= count($this->letter_model->getAllPublicLetterC());
	    	$config['per_page'] = 20;
			$pass =  $this->uri->segment(3)*1;
			$this->pagination->initialize($config); 
			$out = array(
					"letters" => $this->letter_model->getAllPublicLetter($pass,$config['per_page'])
				);
			$this->loadheader();
			$this->load->view('admin_listallletter',$out);
		}
	}
	
	public function listPublicLetterToPastA() {
		$this->load->model("letter_model");
		$this->load->library('pagination');
		
			if ($this->session->userdata('admin_name') == NULL) {
				redirect(base_url("adminlogin"));
			} else {
					$config['base_url'] = base_url("/letterctl/listPublicLetterToPastA");
					$config['total_rows']= count($this->letter_model->getAllPublicLetterByTypeC(0));
			    	$config['per_page'] = 20;
					$pass =  $this->uri->segment(3)*1;
					$this->pagination->initialize($config); 
					$out = array(
							"letters" => $this->letter_model->getAllPublicLetterByType(0,$pass,$config['per_page'])
						);
					$this->loadheader();
					 
					$this->load->view('admin_listallletter',$out);
			}
		
	
	}
	
	public function listPublicLetterToFutureA() {
			$this->load->model("letter_model");
			$this->load->library('pagination');
			if ($this->session->userdata('admin_name') == NULL) {
				redirect(base_url("adminlogin"));
			} else {
					$config['base_url'] = base_url("/letterctl/listPublicLetterToFutureA");
					$config['total_rows']= count($this->letter_model->getAllPublicLetterByTypeC(1));
			    	$config['per_page'] = 20;
					$pass =  $this->uri->segment(3)*1;
					$this->pagination->initialize($config); 
					$out = array(
							"letters" => $this->letter_model->getAllPublicLetterByType(1,$pass,$config['per_page'])
						);
					$this->loadheader();
					 
					$this->load->view('admin_listallletter',$out);
			}
	}
	
	public function listPublicLikeLetterA() {
			$this->load->model("letter_model");
			$this->load->library('pagination');
			if ($this->session->userdata('admin_name') == NULL) {
				redirect(base_url("adminlogin"));
			} else {
					$config['base_url'] = base_url("/letterctl/listPublicLikeLetterA");
					$config['total_rows']= count($this->letter_model->getAllPublicFavoriteLetterC());
			    	$config['per_page'] = 20;
					$pass =  $this->uri->segment(3)*1;
					$this->pagination->initialize($config); 
					$out = array(
							"letters" => $this->letter_model->getAllPublicFavoriteLetter($pass,$config['per_page'])
						);
					$this->loadheader();
					 
					$this->load->view('admin_listallletter',$out);
			}
	}
	
	public function listPublicLetterUnsentA() {
			$this->load->model("letter_model");
			$this->load->library('pagination');
			if ($this->session->userdata('admin_name') == NULL) {
				redirect(base_url("adminlogin"));
			} else {
					$config['base_url'] = base_url("/letterctl/listPublicLetterUnsentA");
					$config['total_rows']= count($this->letter_model->getAllPublicLetterUnsentC());
			    	$config['per_page'] = 20;
					$pass =  $this->uri->segment(3)*1;
					$this->pagination->initialize($config); 
					$out = array(
							"letters" => $this->letter_model->getAllPublicLetterUnsent($pass,$config['per_page'])
						);
					$this->loadheader();
					$this->load->view('admin_listallletter',$out);
			}
	}
	
	public function listPublicLetterSentA() {
			$this->load->model("letter_model");
			$this->load->library('pagination');
			if ($this->session->userdata('admin_name') == NULL) {
				redirect(base_url("adminlogin"));
			} else {
					$config['base_url'] = base_url("/letterctl/listPublicLetterSentA");
					$config['total_rows']= count($this->letter_model->getAllPublicLetterSentC());
			    	$config['per_page'] = 20;
					$pass =  $this->uri->segment(3)*1;
					$this->pagination->initialize($config); 
					$out = array(
							"letters" => $this->letter_model->getAllPublicLetterSent($pass,$config['per_page'])
						);
					$this->loadheader();
					$this->load->view('admin_listallletter',$out);
			}
	}
	
	public function delletter($id) {
		$this->load->model('letter_model');
		if($this->session->userdata("admin_name") != NULL) {
				$this->letter_model->delLetter($id);
		} else {
			redirect(base_url("adminlogin"));
		}
	
		redirect(base_url("letterctl/listAllLetterPublic"));
	}
	
	public function listFathestToFutureA() {
		$this->load->model("letter_model");
		$this->load->library('pagination');
		if ($this->session->userdata('admin_name') == NULL) {
			redirect(base_url("adminlogin"));
		} else {
				$config['base_url'] = base_url("/letterctl/listFathestToFutureA");
				$config['total_rows']= count($this->letter_model->getAllPublicFathestLetterc());
		    	$config['per_page'] = 20;
				$pass =  $this->uri->segment(3)*1;
				$this->pagination->initialize($config); 
				$out = array(
						"letters" => $this->letter_model->getAllPublicFathestLetter($pass,$config['per_page'])
					);
				$this->loadheader();
				 
				$this->load->view('admin_listallletter',$out);
		}
	}
	
	public function listPublicLetterToPast($type) {
		$language = $this->session->userdata("language");
		$this->load->model("letter_model");
		$this->load->library('pagination');
    	$config['per_page'] = 5;
		$pass =  $this->uri->segment(4)*1;
		$this->pagination->initialize($config); 
		switch($type) {
			case 1 :
				$config['base_url'] = base_url("/letterctl/listPublicLetterToPast/1");
		 		$config['total_rows']= count($this->letter_model->getPublicLetterByTypeC(0,$language));
				$out = array(
					"letters" => $this->letter_model->getPublicLetterByType(0,$language,$pass,$config['per_page'])
				);
				break;
			case 2 : 
				$config['base_url'] = base_url("/letterctl/listPublicLetterToPast/2");
		 		$config['total_rows']= count($this->letter_model->getPublicFavoriteLetterC($language));
				$out = array(
					"letters" => $this->letter_model->getPublicFavoriteLetterPage($language,$pass,$config['per_page'])
				);
				break;
			case 3 : 
				$config['base_url'] = base_url("/letterctl/listPublicLetterToPast/3");
		 		$config['total_rows']= count($this->letter_model->getPublicFathestPastLetterC($language));
				$out = array(
					"letters" => $this->letter_model->getPublicFathestPastLetterPage($language,$pass,$config['per_page'])
				);
				break;
		}
		
		$this->load->view('readpublicpast',$out);
	}
	
	public function listPublicLetterToFuture($type) {
			$language = $this->session->userdata("language");
			$this->load->model("letter_model");
			$this->load->library('pagination');
	    	$config['per_page'] = 5;
			$pass =  $this->uri->segment(4)*1;
			$this->pagination->initialize($config); 
			switch($type) {
				case 1 :
					$config['base_url'] = base_url("/letterctl/listPublicLetterToFuture/1");
			 		$config['total_rows']= count($this->letter_model->getPublicLetterByTypeC(1,$language));
					$out = array(
						"letters" => $this->letter_model->getPublicLetterByType(0,$language,$pass,$config['per_page'])
					);
					break;
				case 2 : 
					$config['base_url'] = base_url("/letterctl/listPublicLetterToPast/2");
			 		$config['total_rows']= count($this->letter_model->getPublicFavoriteLetterC($language));
					$out = array(
						"letters" => $this->letter_model->getPublicFavoriteLetterPage($language,$pass,$config['per_page'])
					);
					break;
				case 3 : 
					$config['base_url'] = base_url("/letterctl/listPublicLetterToPast/3");
			 		$config['total_rows']= count($this->letter_model->getPublicFathestLetterC($language));
					$out = array(
						"letters" => $this->letter_model->getPublicFathestLetterPage($language,$pass,$config['per_page'])
					);
					break;
			}

			$this->load->view('readpublicfuture',$out);
	}
	
	public function listPublicLetter() {
		$this->load->model("letter_model");
		$config['base_url'] = base_url("/letterctl/listPublicLetterToFuture");
		$config['total_rows']= count($this->letter_model->getPublicLetterByTypeC(1,$language));
    	$config['per_page'] = 5;
		$pass =  $this->uri->segment(3)*1;
		$this->pagination->initialize($config); 
		$out = array(
				"letter" => $this->letter_model->getPublicLetterByType(1,$language,$pass,$config['per_page'])
			);
		$this->load->view('list',$out);
	}
	
	public function listUserLetter($type) {
		$userid = $this->session->userdata("user_id");
		$this->load->model("letter_model");
		$this->load->library('pagination');
		$config['per_page'] = 5;
		if ($this->session->userdata("username") != NULL) {
			switch ($type) {
				case 1 :  
					$config['base_url'] = base_url("/letterctl/listUserLetter/1");
					$config['total_rows']= count($this->letter_model->getAllUserLetterC($userid));
					$pass =  $this->uri->segment(4)*1;
					$this->pagination->initialize($config); 
					$out = array(
							"letters" => $this->letter_model->getAllUserLetter($userid,$pass,$config['per_page'])
						);
					break;
				case 2 :
					$config['base_url'] = base_url("/letterctl/listUserLetter/2");
					$config['total_rows']= count($this->letter_model->getUserLetterByTypeC(0,$userid));
					$pass =  $this->uri->segment(4)*1;
					$this->pagination->initialize($config); 
					$out = array(
							"letters" => $this->letter_model->getUserLetterByType(0,$userid,$pass,$config['per_page'])
						);
					break;
				case 3 :
					$config['base_url'] = base_url("/letterctl/listUserLetter/3");
					$config['total_rows']= count($this->letter_model->getUserLikeLetterC($userid));
					$pass =  $this->uri->segment(4)*1;
					$this->pagination->initialize($config); 
					$out = array(
							"letters" => $this->letter_model->getUserLikeLetter($userid,$pass,$config['per_page'])
						);
					break;
				case 4 :
					$userid = $this->session->userdata("user_id");
					$this->load->model("letter_model");
					$this->load->library('pagination');
					$config['base_url'] = base_url("/letterctl/listUserLetter/4");
					$config['total_rows']= count($this->letter_model->getUserLetterByTypeC(1,$userid));
					$pass =  $this->uri->segment(4)*1;
					$this->pagination->initialize($config); 
					$out = array(
							"letters" => $this->letter_model->getUserLetterByType(1,$userid,$pass,$config['per_page'])
						);
						break;
			}
			$this->load->view('listUserLetter',$out);	
		} else {
			redirect("/userctl/userlogin");
		}
	}
	

	public function checkletterToSend() {
		
	}
	
	
}
