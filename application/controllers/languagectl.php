<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Languagectl extends CI_Controller {
	public function setLanguage($language) {
		$this->load->helper(array('url','form'));
		$this->load->model("user_model");
		$newdata = array(
						'language' => $language
				   );
		$this->session->set_userdata($newdata);
		redirect(base_url("/"));
	}
}