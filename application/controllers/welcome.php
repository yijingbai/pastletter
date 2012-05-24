<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
		 parent::__construct();
		
		if ($this->session->userdata('language') == null) {
	 		$IP_ip= $this->input->ip_address();
			$IP_str=file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?ip='.$IP_ip);
			$IP_tmp = explode("	", $IP_str);
			if($IP_tmp != NULL)
				$IP_country=iconv("GBK", "UTF-8", $IP_tmp[3]);
			if($IP_country == "中国") {
				$data = array(
						"language" => "1"
					);
				$this->session->set_userdata($data);
				$this->lang->load('index', 'chinese');
			} else {
				$data = array(
						"language" => "2"
					);
				$this->session->set_userdata($data);
				$this->lang->load('index', 'english');
			}
		} else {
			$language = $this->session->userdata("language");
			if ($language == 1) {
				$this->lang->load('index', 'chinese');
			} else {
				$this->lang->load('index','english');
			}
		}
	}
			


	public function index()
	{
		$language = $this->session->userdata("language");
		$this->load->model("letter_model");
		$out["pdata"] = array(
			"email" => "",
			"title" => "",
			"year" => "",
			"content" => "",
			"month" => "",
			"day" => "",
			"type" => "",
			"passcode" => "",
			"is_abey" => "",
			"pletters" => $this->letter_model->getPublicLetterByType(0,$language,0,4),
			"fletters" => $this->letter_model->getPublicLetterByType(1,$language,0,4)
		);
		$out["fdata"] = array(
			"email" => "",
			"title" => "",
			"year" => "",
			"content" => "",
			"month" => "",
			"day" => "",
			"type" => "",
			"passcode" => "",
			"is_abey" => "",
			"pletters" => $this->letter_model->getPublicLetterByType(0,$language,0,4),
			"fletters" => $this->letter_model->getPublicLetterByType(1,$language,0,4)
		);
		
		$this->load->view('index',$out);
	}
	
	public function support()
	{
		$this->load->view('headerrf');
		$this->load->view('support');
		$this->load->view('foot');
	}
	
	public function about()
	{
		$this->load->view('headerrf');
		$this->load->view('about');
		$this->load->view('foot');
	}
	
	public function fullfilldata($type,$page) {
		switch($type) {
			case 1 : 
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
						"passcode" => $this->input->post("passcode"),
						"is_abey" => $this->input->post("is_abey"),
						"letters" => $this->letter_model->getPublicLetterByType(0,$language,0,3)
					);

					$this->load->view('header');
					$this->load->view('indexfullp',$out);
					$this->load->view('foot');
					break;
			case 2 :
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
						"passcode" => $this->input->post("passcode"),
						"is_abey" => $this->input->post("is_abey"),
						"letters" => $this->letter_model->getPublicLetterByType(1,$language,0,3)
					);
					$this->load->view('headerf');
					$this->load->view('indexfullf',$out);
					$this->load->view('foot');
					break;
			case 3 :
				switch ($page) {
					case 1:
						$language = $this->session->userdata("language");
						$this->load->model("letter_model");
						$out["pdata"] = array(
							"email" => $this->input->post("email"),
							"title" => $this->input->post("title"),
							"year" => $this->input->post("year"),
							"content" => $this->input->post("content"),
							"month" => $this->input->post("month"),
							"day" => $this->input->post("day"),
							"type" => $this->input->post("is_public"),
							"passcode" => $this->input->post("passcode"),
							"is_abey" => $this->input->post("is_abey"),
								"pletters" => $this->letter_model->getPublicLetterByType(0,$language,0,4),
								"fletters" => $this->letter_model->getPublicLetterByType(1,$language,0,4)
						);
						$out["fdata"] = array(
							"email" => "",
							"title" => "",
							"year" => "",
							"content" => "",
							"month" => "",
							"day" => "",
							"type" => "",
							"passcode" => "",
							"is_abey" => "",
								"pletters" => $this->letter_model->getPublicLetterByType(0,$language,0,4),
								"fletters" => $this->letter_model->getPublicLetterByType(1,$language,0,4)
						);
						$this->load->view('index',$out);
						break;
					case 2 :
						$language = $this->session->userdata("language");
						$this->load->model("letter_model");
						$out["pdata"] = array(
							"email" => "",
							"title" => "",
							"year" => "",
							"content" => "",
							"month" => "",
							"day" => "",
							"type" => "",
							"passcode" => "",
							"is_abey" => "",
								"pletters" => $this->letter_model->getPublicLetterByType(0,$language,0,4),
								"fletters" => $this->letter_model->getPublicLetterByType(1,$language,0,4)
						);
						$out["fdata"] = array(
							"email" => $this->input->post("email"),
							"title" => $this->input->post("title"),
							"year" => $this->input->post("year"),
							"content" => $this->input->post("content"),
							"month" => $this->input->post("month"),
							"day" => $this->input->post("day"),
							"type" => $this->input->post("is_public"),
							"passcode" => $this->input->post("passcode"),
							"is_abey" => $this->input->post("is_abey"),
								"pletters" => $this->letter_model->getPublicLetterByType(0,$language,0,4),
								"fletters" => $this->letter_model->getPublicLetterByType(1,$language,0,4)
						);
						$this->load->view('index',$out);
				}
		}
		
	}
	public function languageCheck() {
		
	}
	
}
