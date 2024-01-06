<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    cek_login();

    if ($this->session->userdata('email')) {
      if ($this->session->userdata('role') != 2) {
        redirect('admin/admin');
      }
    }
  }

  public function index()
  {
    $data['title'] = "Home";
    $data['section'] = "Home";
    $data['iklan'] = $this->ModelUser->getIklan()->result_array();
    $this->load->view('user/interface', $data);

    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = 'docx|pdf|gif';
    $config['max_size']      = 0;
    $config['max_width']     = 1000;
    $config['max_height']    = 1000;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile')) {
    } else {
      $cv = $this->upload->data();
      $cv = $cv['file_name'];
      $nama_lengkap = $this->input->post('nama_lengkap', TRUE);
      $jenjang_pendidikan = $this->input->post('jenjang_pendidikan', TRUE);
      $tanggal_lahir = $this->input->post('tanggal_lahir', TRUE);
      $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
      $alamat = $this->input->post('alamat', TRUE);
      $no_wa = $this->input->post('no_wa', TRUE);

      $data = array(
        'nama_lengkap' => $nama_lengkap,
        'jenjang_pendidikan' => $jenjang_pendidikan,
        'tanggal_lahir' => $tanggal_lahir,
        'jenis_kelamin' => $jenis_kelamin,
        'alamat' => $alamat,
        'no_wa' => $no_wa,
        'cv' => $cv,

      );
      $this->db->insert('pelamar', $data);
      redirect('user/user');
    }
  }
  public function detail($id_iklan)
  {

    $data['iklan'] = $this->ModelUser->detail_ikl($id_iklan);

    $this->load->view('user/tampilan/topbar');
    $this->load->view('user/detail', $data);
  }
  public function proses_tambah_data()
  {
  }
  public function lamar()
  {
    $data['pelamar'] = $this->ModelUser->getPelamar()->result_array();
    $this->load->view('user/tampilan/topbar');
    $this->load->view('user/lamar');
  }
  public function menu_semua()
  {
    $data['iklan'] = $this->ModelUser->getIklan()->result_array();

    $this->load->view('user/menu_semua', $data);
  }
}
