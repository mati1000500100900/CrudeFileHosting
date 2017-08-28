<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Files_model');
	}

	public function deletefile(){
		header('Content-Type: application/json');
		if(isset($_POST['id'])){
			if($this->Files_model->deletefile($this->input->post('id'),$this->input->post('pass'))){
				echo json_encode(array('success' => 'delete'));
			}
			else echo json_encode(array('error' => 'denied'));
		}
		else echo json_encode(array('error' => 'POST'));
	}
	
	public function download(){
		if(isset($_POST['id']) && isset($_POST['pass'])){
			$response = $this->Files_model->downloadfile($this->input->post('id'),$this->input->post('pass'));
			if($response){
				echo json_encode(array('success' => 'grantred','name'=>$response['name'],'src'=>$response['src']));
			}
			else {
				header('Content-Type: application/json');
				echo json_encode(array('error' => 'denied'));
			}
		}
		else {
			header('Content-Type: application/json');
			echo json_encode(array('error' => 'POST'));
		}
	}
}