<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feed extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('modelvietgram');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('username')){
			$data = $this->modelvietgram->get_profile($this->session->userdata('username'));
			$this->load->view('feed',$data);
		}else{
			redirect('/login');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('/login'); 
	}
	
}
?>