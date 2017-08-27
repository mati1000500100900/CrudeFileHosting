<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Files_model extends CI_Model {
	
	private $table_name='myfiles';
	private $root_pass='root';
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function newfile($name,$src,$size,$isimage,$ip,$hash){
		$this->db->insert($this->table_name,array('name'=>$name,'src'=>$src,'size'=>$size,'isimage'=>$isimage,'ip'=>$ip,'pass'=>$hash));
	}
	
	public function getAll(){
		$this->db->order_by('id','DESC');
		return $this->db->get($this->table_name);
	}
	
	public function deletefile($id,$pass=''){
		$this->db->select('src, pass');
		$this->db->where('id',$id);
		$row=$this->db->get($this->table_name)->row();
		if($row->pass != NULL && $pass != $this->root_pass){
			if(password_verify($pass,$row->pass)){
				unlink('files/'.$row->src);
				return $this->db->delete($this->table_name,array('id'=>$id));
			}
			else return false;
		}
		else{
			unlink('files/'.$row->src);
			return $this->db->delete($this->table_name,array('id'=>$id));
		}
	}
	
	public function downloadfile($id,$pass=''){
		$this->db->select('name, src, pass');
		$this->db->where('id',$id);
		$row=$this->db->get($this->table_name)->row();
		if(password_verify($pass,$row->pass) || $pass==$this->root_pass){
			return array('src'=>$row->src,'name'=>$row->name);
		}
		else return false;
	}
	
	public function getrandomstring($length = 16){
		$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$str = "";    
		for ($i = 0; $i < $length; $i++) {
			$str .= $chars[mt_rand(0, strlen($chars) - 1)];
		}
		return $str;
	}
}