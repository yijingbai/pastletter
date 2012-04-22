<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
		 parent::__construct();
		//无法上网无法运行
	 	/* $IP_ip= $this->input->ip_address();
		$IP_str=file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?ip='."59.67.152.100");
		$IP_tmp = explode("	", $IP_str);
		if($IP_tmp != NULL)
			$IP_country=iconv("GBK", "UTF-8", $IP_tmp[3]);
		if($IP_country == "中国") {
			$data = array(
					"language" => "1"
				);
			$this->session->set_userdata($data);
		   //此与正常相反 切记
		} else {
			$data = array(
					"language" => "2"
				);
			$this->session->set_userdata($data);
			$this->lang->load('index', 'chinese');
		}*/
			$data = array(
					"language" => "2"
				);
			$this->session->set_userdata($data);
			$this->lang->load('index', 'english');
	}
	
	public function index()
	{
		$language = $this->session->userdata("language");
		echo $language;
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
			"pletters" => $this->letter_model->getPublicLetterByType(0,$language,0,4),
			"fletters" => $this->letter_model->getPublicLetterByType(1,$language,0,4)
		);
		$this->load->view('index',$out);
	}
	
	public function fullfilldata($type) {
		echo $type;
		echo $this->input->post("email");
	}
	public function languageCheck() {
		
	}
	
}
