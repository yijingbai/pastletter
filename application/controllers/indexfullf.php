<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Indexfullf extends CI_Controller {
	function __construct() {
		parent::__construct();
		/*if ($this->session->userdata("language") == "1") {
			$this->lang->load('index', 'chinese');
		} else {
			$this->lang->load('index', 'english');
		}*/
			$this->lang->load('index', 'english');//额外添加
	}
	
	public function index()
	{
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
			"letters" => $this->letter_model->getPublicLetterByType(1,$language,0,3)
		);
	
		$this->load->view('headerf');
		$this->load->view('indexfullf',$out);
		$this->load->view('foot');
	}
	
	public function languageCheck() {
		
	}
	
}
