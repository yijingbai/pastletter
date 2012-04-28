<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Epaper extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function send(){
        $mail_body = "<h1>This is the mail</h1><img src = \"http://img.feedsky.com/images/icon_subshot01_rojo.gif\" />";
        $this->load->library('mailer');
        $this->mailer->sendmail(
            '782972119@qq.com',
            '永夜',
            '這是測試信'.date('Y-m-d H:i:s'),
            $mail_body
        );
    }
}


/* End of file epaper.php */