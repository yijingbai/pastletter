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
							"type" => $this->input->post("is_public"),
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
				$language = $this->session->userdata("language");
				$language = 1; //设定
		//	if ($this->session->userdata('username') != NULL) {
				$content = $this->input->post("content");
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
								"content" => $content,
								"month" => $this->input->post("month"),
								"day" => $this->input->post("day"),
								"type" => $this->input->post("is_public"),
								"is_abey" => $this->input->post("is_abey"),
								"letters" => $this->letter_model->getPublicLetterByType(0,$language,0,3)
							);

							$this->load->view('headerf');
							$this->load->view('indexfullf',$out);
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
							echo "<script>alert(\"发送成功\")</script>";
							$this->load->view('headerf');
							$this->load->view('indexfullf');
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
	
	public function delUserletter($id) {
		$this->load->model("letter_model");
		$userid = $this->session->userdata("user_id");
		if ($userid != NULL) {
			$this->letter_model->delUserLetter($id,$userid);
			redirect(base_url("letterctl/listUserLetter/1"));
		} else {
			
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
	
	public function showPastLetterById($id)
	{
		$language = $this->session->userdata("language");
		$this->load->model("letter_model");
		if ($this->session->userdata("username")!==NULL) {
			$out["letters"] = $this->letter_model->getPublicLetterById($id,$language);
			$this->load->view("email-past",$out);
		} else {
			
		}
	}
	
	public function showFutureLetterById($id)
	{
		$language = $this->session->userdata("language");
		$this->load->model("letter_model");
		if ($this->session->userdata("username")!==NULL) {
			$out["letters"] = $this->letter_model->getPublicLetterById($id,$language);
			$this->load->view("email-future",$out);
		} else {
			
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
		$this->load->view('headerrp');
		$this->load->view('readpublicpast',$out);
		$this->load->view('foot');
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

			$this->load->view('headerrf');
			$this->load->view('readpublicfuture',$out);
			$this->load->view('foot');
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
	
	public function	editUserLetter($id) {
		$language = $this->session->userdata("language");
		$userid = $this->session->userdata("user_id");
		$this->load->model("letter_model");
		if ($this->session->userdata("username") != NULL) {
				if (!$this->input->post("email")) {
					$out = array(
						'data'  =>  $this->letter_model->getUserLetterById($id,$userid),
						'id' => $id,
					);	
					$this->load->view('editletter',$out);
				} else {
						$this->form_validation->set_rules('email',$this->lang->line('email'), 'required|valid_email');
						$this->form_validation->set_rules('is_public',$this->lang->line('is_public'), 'required');
						$this->form_validation->set_message('valid_email', $this->lang->line("valid_email"));
						$this->form_validation->set_message('required', $this->lang->line("required"));
						if ($this->form_validation->run() == false) {
							$out = array(
								'data'  =>  $this->letter_model->getUserLetterById($id,$userid),
								'id' => $id,
							);
							$this->load->view('editletter',$out);
						} else {
							$data = array(
								"email" => $this->input->post("email"),
								"is_public" => $this->input->post("is_public"),
							);
							$this->letter_model->updateLetter($id,$data);
							$out = array(
								"message" => $this->lang->line('editsuccess')
							);
							$this->load->view("success",$out);
						}
				}
		} else {
			
		}
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
				$this->load->view('headerrp');
	 			$this->load->view('listUserLetter',$out);	
				$this->load->view('foot');
		} else {
			redirect("/userctl/userlogin");
		}
	}
	

	public function checkletterToSend() {
		$this->load->model("letter_model");
		$fletters = $this->letter_model->getLetterToSendFuture();
		$pletters = $this->letter_model->getLetterToSendPast();
		foreach ($fletters as $letter) {
				$mail_body = "<html xmlns='http://www.w3.org/1999/xhtml'>

				<body>
					<table border='0' align ='center' cellspacing='0' cellpadding='0' style ='width:791px;' >
						<tbody width='791'>
						<tr >
							<td><img src='".base_url('static/img/index_fullscreen_04.png')."' /></td>
							<td style = 'font-family:Verdana;font-size:12px;color:#576b8e;float:right;margin-top:30px;'>www.pastletter.com</td>
						</tr>

							<tr style = 'width:791'>
								<td colspan=2><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."'><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /></td>
							</tr>
						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
							<td><p style='font-family:Verdana;font-size:12px;float:left;margin-top:30px;margin-left:40px;color:#022b5a;'>".$letter["title"]."</p></td>
							<td><img src='".base_url('static/img/future.png')."'></td>
						</tr>
						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
								<td colspan=2 style='padding-left:10px;font-family:Verdana;font-size:12px;color:#535455;'>".$letter["content"]."</a></h2>
								</td>
						</tr >
						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
							<td colspan=2><br /><br /><br /><br /><br /><br /></td>
						</tr>

						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
							<td colspan=2><hr style='width:785px;float:left;color:#cbcbcb;border:dashed; border-width:1px;'></td>
						</tr>

						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
							<td colspan=2><br /><br /></td>
						</tr>

						<tr style = 'width:791'>
							<td colspan=2><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."'><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /></td>
						</tr>


						<tr background='".base_url('static/img/index_fullscreen_27.jpg')."'>

							<td colspan=2 style = 'padding:10px;'>Copyright © 2012 - pastletter labs - All rights reserved.
					                <div style = 'float:right; margin-right:20px;'>
					                    <img src='".base_url('static/img/index_fullscreen_31.jpg')."'>
					                    <img src='".base_url('static/img/index_fullscreen_33.jpg')."'>
					                    <img src='".base_url('static/img/index_fullscreen_35.jpg')."'>
					                    <img src='".base_url('static/img/index_fullscreen_37.jpg')."'>
					                </div>
					         </td>


						</tr>

						</tbody>
					</table>

				</body>
				</html>";
			

	        $this->load->library('mailer');
	        $this->mailer->sendmail(
	            $letter["email"],
	            "PastLetter",
	            $letter["title"],
	            $mail_body
	        );
			$this->letter_model->setLetterSent($letter["letter_id"]);
		}
	
	
		foreach ($pletters as $letter) {
				$mail_body = "<html xmlns='http://www.w3.org/1999/xhtml'>

				<body>
					<table border='0' align ='center' cellspacing='0' cellpadding='0' style ='width:791px;' >
						<tbody width='791'>
						<tr >
							<td><img src='".base_url('static/img/index_fullscreen_04.png')."' /></td>
							<td style = 'font-family:Verdana;font-size:12px;color:#576b8e;float:right;margin-top:30px;'>www.pastletter.com</td>
						</tr>

							<tr style = 'width:791'>
								<td colspan=2><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."'><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /></td>
							</tr>
						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
							<td><p style='font-family:Verdana;font-size:12px;float:left;margin-top:30px;margin-left:40px;color:#022b5a;'>".$letter["title"]."</p></td>
							<td><img src='".base_url('static/img/email-chuo.png')."'></td>
						</tr>
						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
								<td colspan=2 style='padding-left:10px;font-family:Verdana;font-size:12px;color:#535455;'>".$letter["content"]."</a></h2>
								</td>
						</tr >
						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
							<td colspan=2><br /><br /><br /><br /><br /><br /></td>
						</tr>

						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
							<td colspan=2><hr style='width:785px;float:left;color:#cbcbcb;border:dashed; border-width:1px;'></td>
						</tr>

						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
							<td colspan=2><br /><br /></td>
						</tr>

						<tr style = 'width:791'>
							<td colspan=2><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."'><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /><img src='".base_url('static/img/index_fullscreen_09.jpg')."' /></td>
						</tr>


						<tr background='".base_url('static/img/index_fullscreen_27.jpg')."'>

							<td colspan=2 style = 'padding:10px;'>Copyright © 2012 - pastletter labs - All rights reserved.
					                <div style = 'float:right; margin-right:20px;'>
					                    <img src='".base_url('static/img/index_fullscreen_31.jpg')."'>
					                    <img src='".base_url('static/img/index_fullscreen_33.jpg')."'>
					                    <img src='".base_url('static/img/index_fullscreen_35.jpg')."'>
					                    <img src='".base_url('static/img/index_fullscreen_37.jpg')."'>
					                </div>
					         </td>


						</tr>

						</tbody>
					</table>

				</body>
				</html>";
			

	        $this->load->library('mailer');
	        $this->mailer->sendmail(
	            $letter["email"],
	            "PastLetter",
	            $letter["title"],
	            $mail_body
	        );
			$this->letter_model->setLetterSent($letter["letter_id"]);
		}
	}
	
}
