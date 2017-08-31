<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->view('head');
		$this->load->model('Post_model');
	}

	public function index()
	{
		echo "nic";
	}
}
