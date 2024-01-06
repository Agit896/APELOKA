<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registrasi extends CI_Controller
{
  

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pengguna.email]',[
            'is_unique' =>'Nama Pengguna sudah ada!']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pengguna.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
             $this->load->view('register/registrasi');
        } else {
            $data = [
                'nama' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 2,
            ];

            $this->db->insert('pengguna', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun kamu berhasil dibuat. Pleas Login</div>');
            redirect('register/auth');
        }
    }
}

