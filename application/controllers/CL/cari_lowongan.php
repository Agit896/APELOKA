<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cari_lowongan extends CI_Controller
{

  public function index()
  {
    $data['title'] = "Home";
    $data['section'] = "Home";
    $this->load->view('CL/interface2');
  }

}