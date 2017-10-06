<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Files_model');
	}

	public function index(){
		if(!empty($_FILES)){
			$originalName=$_FILES['file0']['name'];
			
			$config['file_name']			= $this->Files_model->getrandomstring(16);
			$config['upload_path']          = './files/';
			$config['allowed_types']        = '*';
			$config['max_size']             = intval(ini_get('upload_max_filesize'))*1024;

			$this->load->library('upload', $config);

			$ip = getenv('HTTP_CLIENT_IP')?:getenv('HTTP_X_FORWARDED_FOR')?:getenv('HTTP_X_FORWARDED')?:getenv('HTTP_FORWARDED_FOR')?:getenv('HTTP_FORWARDED')?:getenv('REMOTE_ADDR');

			if ( ! $this->upload->do_upload('file0'))
			{
				$this->smarty->assign(array('alert' => $this->upload->display_errors()));
				$this->parser->parse('add');
			}
			else
			{
				if(!empty($_POST['pass'])){
					$hash=password_hash($this->input->post('pass'),PASSWORD_BCRYPT,array('cost'=>12));
				}
				else $hash=NULL;
				$this->Files_model->newfile($originalName,$this->upload->data('file_name'),$this->upload->data('file_size'),$this->upload->data('is_image'),$ip,$hash);
				$this->parser->parse('add');
				redirect('/');
			}
		}
		else $this->parser->parse('add');
	}
}