<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbbakctl extends CI_Controller {
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

	function backup(){
	$this->load->dbutil();

	$this->load->helper('file');

	$prefs = array(
	                'tables'      => array('image','letter','user','user_like'),  // 包含了需备份的表名的数组.
	                'ignore'      => array(),           // 备份时需要被忽略的表
	                'format'      => 'txt',             // gzip, zip, txt
	                'filename'    => 'mybackup.sql',    // 文件名 - 如果选择了ZIP压缩,此项就是必需的
	                'add_drop'    => TRUE,              // 是否要在备份文件中添加 DROP TABLE 语句
	                'add_insert'  => TRUE,              // 是否要在备份文件中添加 INSERT 语句
	                'newline'     => "\n"               // 备份文件中的换行符
	              );

	$backup = $this->dbutil->backup($prefs);
	$filename = date("Y-m-d_H:i:s").'database.sql';
	$filepath = './'.$filename;
	write_file($filepath, $backup); 
	header("Content-disposition:filename=".$filename);  
	header("Content-type:application/octetstream");  
	header("Pragma:no-cache");  
	header("Expires:0");

	}

	
}