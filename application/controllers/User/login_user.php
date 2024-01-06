<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_user extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('email')) {
      if ($this->session->userdata('role') == 1) {
        redirect('admin/admin');
      }else {
        redirect('user/user');
      }
    }

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
      'required' => 'Email mohon diisi',
      'valid_email' => 'Mohon masukkan email yang valid'
    ]);

    $this->form_validation->set_rules('password', 'Password', 'required', [
      'required' => 'Password mohon diisi'
    ]);

    if ($this->form_validation->run() == false) 
    {
      $this->load->view('user/login');
    } 
    else 
    {
      $this-> _login();
    }
  }

  private function _login()
  {
    $email = htmlspecialchars($this->input->post('email', true));
    $password = $this->input->post('password', true);

    $pengguna = $this->ModelUser->cekData(['email' => $email])->row_array();

    if ($pengguna) {
      if (md5($password) == $pengguna['password']) {
        if ($pengguna['role'] == 2) {
          $data = [
            'nama' => $pengguna['nama'],
            'email' => $pengguna['email'],
            'role' => $pengguna['role']
          ];
          $this->session->set_userdata($data);
          redirect('user/user');
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-white" role="alert"><strong>Akses ditolak!</strong> silahkan masuk sebagai admin.</div>');
          redirect('user/login_user');
        }
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-white" role="alert"><strong>Password salah!</strong></div>');
        redirect('user/login_user');
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-white" role="alert"><strong>Akun tidak terdaftar!</strong></div>');
      redirect('user/login_user');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('nama');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role');

    redirect(base_url());
  }
}
