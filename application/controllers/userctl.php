<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userctl extends CI_Controller {
	
	function __construct() {
		 parent::__construct();
		$language;
		$this->lang->load('index', 'english');//设定
		$this->lang->load('form_validation', 'english');
			if($this->session->userdata("language")==NULL) {
				$this->session->set_userdata(array("language" => 1));
				$language=1;
				$this->lang->load('index', 'chinese');
			} else {
				$language = $this->session->userdata("language");
				switch ($language) {
					case 1 : $this->lang->load('index', 'chinese');break;
					case 2 : $this->lang->load('index', 'english');
				}
				
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

	
	
	public function userlogin() {
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model("user_model");
		if ($this->session->userdata('username') == NULL) {
			$this->form_validation->set_rules('email', $this->lang->line('email'), 'required|valid_email');
			$this->form_validation->set_rules('password',$this->lang->line('password'), 'required');
			$this->form_validation->set_message('required', '%s'.$this->lang->line('notnull'));
			if ($this->form_validation->run() == FALSE) {
				$out["errormess"] = "";
			   	$this->load->view('usersignin',$out);
			} else {
					$vipname = $this->input->post("email");
					$vippass = $this->encrypt->sha1($this->input->post("password"));
					
					if ($this->user_check($vipname,$vippass) == "TRUE") {
						$users = $this->user_model->getUserByEmail($vipname);
						$user = $users[0];
						$username = $user["name"];
						$userid = $user["user_id"];
						$newdata = array(
								'username' => $username,
								'user_id' => $userid
						);
						$this->session->set_userdata($newdata);
						$out["message"] = $this->lang->line('loginsuccess');
					 	$this->load->view("success",$out);
					} else {
							$out["errormess"] = $this->user_check($vipname,$vippass);
	 					    $this->load->view('usersignin',$out);
							return;
					}
			}
		} else {
			$this->load->view('admin_top');
			$this->load->view('admin_left');
			$this->load->view('admin_info');
		}
	}
	
	public function user_check($name,$pass)
	 {
		$this->load->model("user_model");
		$users = $this->user_model->getUserByEmail($name);
	  	if (count($users) == 0) {
			$error = array(
				"result" => FALSE,
				"username" => $name,
				"message" => $this->lang->line('nouser')
			);
	   		return $error;
	  	} else {
			$user = $users[0];
			if ($pass == $user["password"]) {
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
	 }
	
	public function deluser($id) {
		$this->load->model('user_model');
		if($this->session->userdata("admin_name") != NULL) {
				$this->user_model->deluser($id);
		} else {
			redirect(base_url("adminlogin"));
		}

		redirect(base_url("userctl/listAllUser"));
	}
	
	public function userlogout() {
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
	  	$this->session->unset_userdata('username');
		$this->session->unset_userdata('user_id');
	  	redirect(base_url("/"));
	}
	

	
	public function userValid($key) {
		$this->load->model("user_model");
		if ($this->key_check($key) == "TRUE") {
			$this->user_model->setValidByKey($key);
			redirect("userctl/userlogin");
		} else  {
			$out["error"] = $this->key_check($key);
			$this->load->view("lettererror");
		}
	}
	
	public function key_check($name)
	 {
		$this->load->model("user_model");
		$users = $this->user_model->getUserByActionkey($name);
	  	if (count($users) == 0) {
			$error = array(
				"result" => FALSE,
				"username" => $name,
				"message" => $this->lang->line('nouser')
			);
	   		return $error;
	  	} else {
			$user = $users[0];
			if ($user["status"] == 0) {
				return "TRUE";
			} else if ($user["status"] == 1){
			   	$error = array(
					"result" => FALSE,
					"username" => $name,
					"message" => $this->lang->line('nouser')
				);
		   		return $error;
			}
		} 
	 }
	
	public function listAllUser() {
		$this->load->model("user_model");
		$this->load->library('pagination');
		if ($this->session->userdata('admin_name') == NULL) {
			redirect(base_url("adminlogin"));
		} else {
			$config['base_url'] = base_url("/userctl/listAllUser");
			$config['total_rows']= count($this->user_model->getUsersC());
	    	$config['per_page'] = 20;
			$pass =  $this->uri->segment(3)*1;
			$this->pagination->initialize($config); 
			$out = array(
					"users" => $this->user_model->getUsers($pass,$config['per_page'])
				);
			$this->loadheader();
			 
			$this->load->view('admin_listalluser',$out);
		}
	}
	
	public function listUnValidUser() {
		$this->load->model("user_model");
		$this->load->library('pagination');
		if ($this->session->userdata('admin_name') == NULL) {
			redirect(base_url("adminlogin"));
		} else {
			$config['base_url'] = base_url("/userctl/listUnValidUser");
			$config['total_rows']= count($this->user_model->getUnvalidUserC());
	    	$config['per_page'] = 20;
			$pass =  $this->uri->segment(3)*1;
			$this->pagination->initialize($config); 
			$out = array(
					"users" => $this->user_model->getUnvalidUser($pass,$config['per_page'])
				);
			$this->loadheader();
			 
			$this->load->view('admin_listalluser',$out);
		}
	}
	
	public function usersign() {
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model("user_model");

		$this->form_validation->set_rules('username',$this->lang->line('username'), 'required');
		$this->form_validation->set_rules('password', $this->lang->line('password'), 'required|matches[passconf]');
		$this->form_validation->set_rules('passconf', $this->lang->line('passconf'), 'required');
	 	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));
			$this->form_validation->set_message('matches', $this->lang->line('matches'));
		if ($this->form_validation->run() == FALSE) {

		   	$this->load->view('usersign');
		} else {
			$activationKey =  mt_rand() . mt_rand() . mt_rand() . mt_rand() . mt_rand();
			$data = array(
				"name" => $this->input->post("username"),
				"pass" => $this->encrypt->sha1($this->input->post("password")),
				"email" => $this->input->post("email"),
				"actionkey" => $activationKey,
				"status" => 0
			);
			$this->user_model->insertUser($data);
			
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
						<td><p style='font-family:Verdana;font-size:12px;float:left;margin-top:30px;margin-left:40px;color:#022b5a;'>Dear".$this->input->post("username").','.'Thank your for sign in PastLetter'."</p></td>
						<td><img src='".base_url('static/img/future.png')."'></td>
					</tr>
					<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
							<td colspan=2 style='padding-left:10px;font-family:Verdana;font-size:12px;color:#535455;'>Please click  &nbsp;<a href = ".base_url("userctl/userValid").'/'.$activationKey.">here</a> to valid your account
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
	            $this->input->post("email"),
	            'PastLetter',
	            $this->lang->line("validaccount"),
	            $mail_body
	        );
		   $out = array('message' => $this->lang->line('validmailsent'));
			$this->load->view("success",$out);
		}
	}
	
	public function resetPass($key,$id) {
			$this->load->model("user_model");
			if ($this->reset_check($key,$id) == "TRUE") {
				$this->form_validation->set_rules('password', $this->lang->line('password'), 'required|matches[passconf]');
				$this->form_validation->set_rules('passconf', $this->lang->line('passconf'), 'required');
				if ($this->form_validation->run() == FALSE) {
					$out["data"] = array("key" => $key,"id" => $id);
				   	$this->load->view('resetPass',$out);
				} else {
					$pass = $this->encrypt->sha1($this->input->post("password"));
					$this->user_model->setPassById($pass,$id);
					$out = array('message' => $this->lang->line('resetpasssuccess'));
					$this->load->view("success",$out);
				}
			} else {
					$out["error"] = $this->reset_check($this->input->post("email"));
					$this->load->view("lettererror",$out);
			}
	}
	

	
	public function resetPassword() {
		$this->load->model("user_model");
		if ($this->session->userdata("username") != NULL) {
			$this->form_validation->set_rules('oldpass', $this->lang->line('oldpass'),'required');
			$this->form_validation->set_rules('password', $this->lang->line('password'), 'required|matches[passconf]');
			$this->form_validation->set_rules('passconf', $this->lang->line('passconf'), 'required');
			if ($this->form_validation->run() == FALSE) {
			   	$this->load->view('resetPassword');
			} else {
				$users = $this->user_model->getUserById($this->session->userdata("user_id"));
				$user = $users[0];
				$password = $user["password"];
				if ($password ==  $this->encrypt->sha1($this->input->post("oldpass"))) {
					$pass = $this->encrypt->sha1($this->input->post("password"));
					$this->user_model->setPassById($pass,$this->session->userdata("user_id"));
					$out = array('message' => $this->lang->line('resetpasssuccess'));
					$this->load->view("success",$out);
				} else {
					$out["error"] = $this->lang->line("oldpasswrong");
					$this->load->view("lettererror",$out);
				}
			}
		} else {
			redirect("/userctl/userlogin");
		}
		
	}
	
	public function reset_check($key,$id) {
			$this->load->model("user_model");
			$users = $this->user_model->getUserByActionkey($key);
		  	if (count($users) == 0) {
				$error = array(
					"result" => FALSE,
					"username" => $name,
					"message" => $this->lang->line('nouser')
				);
		   		return $error;
		  	} else {
				$user = $users[0];
				if ($user["user_id"] == $id)
			     return "TRUE";
				else {
						$error = array(
							"result" => FALSE,
							"username" => $name,
							"message" => $this->lang->line('nouser') // 未改
						);
				   		return $error;
				}
			}
	}
	
	public function forgetPassword() {
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE) {

		   	$this->load->view('forgetpass');
		} else {
			if ($this->email_check($this->input->post("email")) == "TRUE") {
					$users = $this->user_model->getUserByEmail($this->input->post("email"));
					$user = $users[0];
					$id = $user["user_id"];
					$activationKey = $user["actionkey"];
					
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
									<td><p style='font-family:Verdana;font-size:12px;float:left;margin-top:30px;margin-left:40px;color:#022b5a;'>".$this->lang->line('dear')."".$user["name"].','.$this->lang->line('thanksign')."</p></td>
									<td><img src='".base_url('static/img/future.png')."'></td>
								</tr>
								<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
										<td colspan=2 style='padding-left:10px;font-family:Verdana;font-size:12px;color:#535455;'>".$this->lang->line('click')." &nbsp;<a href='".base_url("userctl/resetPass/$activationKey/$id")."'>".$this->lang->line('toresetpass')."</a></h2>
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
			            $this->input->post("email"),
			            'PastLetter',
			            $this->lang->line('findpass'),
			            $mail_body
			        );
					$out = array(
						"message" => $this->lang->line('forgetmailsent')
 					);
					$this->load->view("success",$out);
			} else {
				$out["error"] = $this->email_check($this->input->post("email"));
				$this->load->view("lettererror",$out);
			}
  		  
		}
	}
	
	public function singlesign()
	{
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->model("user_model");

			$this->form_validation->set_rules('username',$this->lang->line('username'), 'required');
			$this->form_validation->set_rules('password', $this->lang->line('password'), 'required|matches[passconf]');
			$this->form_validation->set_rules('passconf', $this->lang->line('passconf'), 'required');
		 	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
			$this->form_validation->set_message('required', $this->lang->line('required'));
			$this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));
				$this->form_validation->set_message('matches', $this->lang->line('matches'));
			if ($this->form_validation->run() == FALSE) {
						$this->load->view('headerrf');
						$this->load->view('singlesign');
						$this->load->view('foot');
			} else {
				$activationKey =  mt_rand() . mt_rand() . mt_rand() . mt_rand() . mt_rand();
				$data = array(
					"name" => $this->input->post("username"),
					"pass" => $this->encrypt->sha1($this->input->post("password")),
					"email" => $this->input->post("email"),
					"actionkey" => $activationKey,
					"status" => 0
				);
				$this->user_model->insertUser($data);

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
							<td><p style='font-family:Verdana;font-size:12px;float:left;margin-top:30px;margin-left:40px;color:#022b5a;'>Dear".$this->input->post("username").','.'Thank your for sign in PastLetter'."</p></td>
							<td><img src='".base_url('static/img/future.png')."'></td>
						</tr>
						<tr background='".base_url('static/img/index_fullscreen_13.jpg')."'>
								<td colspan=2 style='padding-left:10px;font-family:Verdana;font-size:12px;color:#535455;'>Please click  &nbsp;<a href = ".base_url("userctl/userValid").'/'.$activationKey.">here</a> to valid your account
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
		            $this->input->post("email"),
		            'PastLetter',
		            $this->lang->line("validaccount"),
		            $mail_body
		        );
			   $out = array('message' => $this->lang->line('validmailsent'));
				$this->load->view("success",$out);
			}
		
		
	}
	
	public function singlesignin()
	{
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->model("user_model");
			if ($this->session->userdata('username') == NULL) {
				$this->form_validation->set_rules('email', $this->lang->line('email'), 'required|valid_email');
				$this->form_validation->set_rules('password',$this->lang->line('password'), 'required');
				$this->form_validation->set_message('required', '%s'.$this->lang->line('notnull'));
				if ($this->form_validation->run() == FALSE) {
					$out["errormess"] = "";
				   	$this->load->view('headerrf');
					$this->load->view('singlesignin',$out);
					$this->load->view('foot');
				} else {
						$vipname = $this->input->post("email");
						$vippass = $this->encrypt->sha1($this->input->post("password"));

						if ($this->user_check($vipname,$vippass) == "TRUE") {
							$users = $this->user_model->getUserByEmail($vipname);
							$user = $users[0];
							$username = $user["name"];
							$userid = $user["user_id"];
							$newdata = array(
									'username' => $username,
									'user_id' => $userid
							);
							$this->session->set_userdata($newdata);
							$out["message"] = $this->lang->line('loginsuccess');
						 	$this->load->view("success",$out);
						} else {
								$out["errormess"] = $this->user_check($vipname,$vippass);
								
								$this->load->view('headerrf');
								$this->load->view('singlesignin',$out);
								$this->load->view('foot');
								return;
						}
				}
			} else {
				$this->load->view('admin_top');
				$this->load->view('admin_left');
				$this->load->view('admin_info');
			}
	}
	
	public function email_check($email) {
			$this->load->model("user_model");
			$users = $this->user_model->getUserByEmail($email);
		  	if (count($users) == 0) {
				$error = array(
					"result" => FALSE,
					"username" => $name,
					"message" => $this->lang->line('nouser')
				);
		   		return $error;
		  	} else {
			     return "TRUE";
			}
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */