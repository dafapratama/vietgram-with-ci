<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('modelvietgram');
    $this->load->library('session');
 }
 
 public function index()
 {
  $this->load->view('login'); 
 }
 
 public function aksi_login(){
   $data['username'] = $this->input->post('username');
   $data['password'] = $this->input->post('password');
  if($this->modelvietgram->login($data)) {
   	$this->session->set_userdata('username', $this->input->post('username'));
   redirect('/feed');
  } else {
   $data['error_message'] = "invalid username or password";
   $this->load->view('login', $data);
  }
 }
}
?>