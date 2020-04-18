<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('modelvietgram');
    $this->load->library('session');
 }
 
 public function index()
 {
  $data = $this->modelvietgram->get_profile($this->session->userdata('username'));
  $this->load->view('profile', $data); 
 }
}
?>