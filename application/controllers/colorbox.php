<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colorbox extends CI_Controller {
	public function index() {
			$this->load->view("colorbox");
	}
}