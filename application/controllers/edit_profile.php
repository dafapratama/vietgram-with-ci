<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_profile extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('modelvietgram');
    $this->load->library('session');
 }
 
 public function index()
 {
  $this->load->view('edit_profile'); 
 }
 public function editprofile()
 {
     $data = [
         "name" => $this->input->post('name', true),
         "website" => $this->input->post('website', true),
         "bio" => $this->input->post('bio', true),
         "email" => $this->input->post('email', true),
         "nohp" => $this->input->post('nohp', true),
         "gender" => $this->input->post('gender', true),
     ];
     $this->modelvietgram->edit_profile($_SESSION['username'], $data);
     redirect('/profile','refresh');
 }
}
?>