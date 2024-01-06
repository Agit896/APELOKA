<?php
defined('BASEPATH') or exit('No direct script access allowed');

class to_login extends CI_Controller
{

  public function index()
  {
    $data['title'] = "Home";
    $data['section'] = "Home";
    $this->load->view('CL/menu_semua');
  }
}