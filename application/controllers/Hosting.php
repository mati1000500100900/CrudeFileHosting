<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hosting extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Files_model');
	}

	public function index(){
		$this->smarty->assign(array('query'=>$this->Files_model->getAll()->result()));
		$this->parser->parse('files');
	}
}
