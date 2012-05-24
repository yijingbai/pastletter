<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Indexfullp extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata("language") == "1") {
			$this->lang->load('index', 'chinese');
		} else {
			$this->lang->load('index', 'english');
		}
	}
	
	public function index()
	{
	 	echo validation_errors();
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
	}
	
	public function languageCheck() {
		
	}
	
}
