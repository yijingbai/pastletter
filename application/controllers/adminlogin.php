<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminlogin extends CI_Controller {
	function __construct() {
	 	parent::__construct();
		$language;
		if($this->session->userdata("language")==NULL) {
			$this->session->set_userdata(array("language" => 1));
			$language=1;
			$this->lang->load('index', 'chinese');
		} else {
			$language = $this->session->userdata("language");
			switch ($language) {
				case 1 : $this->lang->load('index', 'chinese');break;
				case 2 : $this->lang->load('index', 'english');break;
			}

		}	
	}

	public function index() {
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model("user_model");
		if ($this->session->userdata('admin_name') == NULL) {
			$this->form_validation->set_rules('username', $this->lang->line('username'), 'required');
			$this->form_validation->set_rules('password',$this->lang->line('password'), 'required');
			$this->form_validation->set_rules('passcode',$this->lang->line('passcode'), 'required');
			$this->form_validation->set_message('required', '%s'.$this->lang->line('notnull'));
			if ($this->form_validation->run() == FALSE) {
				$out["errormess"] = "";
			   	$this->load->view('admin_login',$out);
			} else {
					$vipname = $this->input->post("username");
					$vippass = $this->input->post("password");
					$passcode = $this->input->post("passcode");
					if ($this->user_check($vipname,$vippass,$passcode) == "TRUE") {
						$users = $this->user_model->getUserByName($vipname);
						$user = $users[0];
						$userid = $user["user_id"];
						$newdata = array(
								'admin_name' => $vipname,
								'admin_id' => $userid
						);
						$this->session->set_userdata($newdata);
					   redirect(base_url("/letterctl/listAllLetterPublic"));
					} else {
							$out["errormess"] = $this->user_check($vipname,$vippass,$passcode);
	 					    $this->load->view('admin_login',$out);
							return;
					}
			}
		} else {
		    redirect(base_url("/letterctl/listAllLetterPublic"));
		}
	}
	
	public function loadheader() {
		$this->load->model("letter_model");
		$data["num"] = array(
			$sent = count($this->letter_model->getAllPublicLetterSentC()),
			$unsent = count($this->letter_model->getAllPublicLetterUnsentC()),
			$user = count($this->user_model->getUsersC())
		);
		$this->load->view('admin_header',$data);
		$this->load->view('admin_left');
	}
	
	public function user_check($name,$pass,$passcode)
	 {
		$this->load->model("user_model");
		if($passcode == $this->session->userdata("Checknum")) {
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
	
	public function logout() {
	  	$this->session->unset_userdata('admin_name');
	    redirect(base_url("/adminlogin"));
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */