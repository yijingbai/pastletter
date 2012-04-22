<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userlogin extends CI_Controller {
	function __construct() {
		 parent::__construct();
			$this->lang->load('index', 'english');
	}
	
	public function index()
	{
		$out["errormess"] = "";
		$this->load->view('usersignin',$out);
	}

	
}
