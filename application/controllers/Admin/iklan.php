<?php
defined('BASEPATH') or exit('No direct script access allowed');
class iklan extends CI_Controller
{
public function search()
  {
   $keyword = $this->input->post('keyword');
   $data['iklan']=$this->ModelIklan->get_keyword($keyword);

    $this->load->view('admin/tampilan/header');
    $this->load->view('admin/tampilan/index');
    $this->load->view('admin/iklan');
  }
  public function index()
    {
      $data['title'] = "iklan";
      $data['section'] = "Iklan";
      $data['iklan'] = $this->ModelIklan->getIklan()->result_array();
      $data['kategori'] = $this->ModelIklan->getKategori()->result_array();

      if( $this->input->post('keyword')){
        $data['iklan']=$this->ModelIklan->get_keyword();
      }
       $this->form_validation->set_rules('gender', 'Gender', 'required', ['required' => 'Gender harus diisi',]);
     $this->form_validation->set_rules('judul', 'Nama Pekerjaan', 'required|min_length[3]', ['required' => 'Nama Pekerjaan harus diisi', 'min_length' => 'Nama Pekerjaan terlalu pendek']);
      $this->form_validation->set_rules('perusahaan', 'Nama Perusahaan', 'required|min_length[3]', ['required' => 'Nama Perusahaan harus diisi', 'min_length' => 'Nama Perusahaan terlalu pendek']);
      $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', ['required' => 'Nama perusahaan harus diisi',]);
      $this->form_validation->set_rules('lokasi', 'Nama Lokasi', 'required|min_length[3]', ['required' => 'Nama Lokasi harus diisi', 'min_length' => 'Nama Lokasi terlalu pendek']);
      $this->form_validation->set_rules('lokasi', ' Pendidikan', 'required|min_length[3]', ['required' => ' Pendidikan harus diisi', 'min_length' => ' Pendidikan terlalu pendek']);
      $this->form_validation->set_rules('gaji', 'Gaji', 'required|numeric', ['required' => 'Gaji harus diisi', 'numeric' => 'Yang anda masukan bukan angka']);
      //konfigurasi sebelum gambar diupload 
      $config['upload_path'] = './assets/admin/img/gambar/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '3000';
      $config['max_width'] = '5000';
      $config['max_height'] = '5000';
      $config['file_name'] = 'img' . time();

      $this->load->library('upload', $config);
      
      if ($this->form_validation->run() == false) {
        $this->load->view('admin/tampilan/header');
        $this->load->view('admin/tampilan/index',$data);
        $this->load->view('admin/iklan',$data);
      } else {
          if ($this->upload->do_upload('gambar')) {
              $gambar = $this->upload->data();
              $gambar = $gambar['file_name'];
          } else {
              $gambar = '';
          }
          $data = [
                        'judul' => $this->input->post('judul', TRUE),
                        'perusahaan' => $this->input->post('perusahaan', TRUE),
                        'id_kategori' => $this->input->post('id_kategori', TRUE),
                        'lokasi' => $this->input->post('lokasi', TRUE),
                        'pendidikan' => $this->input->post('pendidikan', TRUE),
                        'gaji' => $this->input->post('gaji', TRUE),
                        'gender' => $this->input->post('gender', TRUE),
                        'pengalaman' => $this->input->post('pengalaman', TRUE),
                        'deskripsi' => $this->input->post('deskripsi', TRUE),
                        'gambar' => $gambar
                        
          ];
          $this->ModelIklan->simpanIklan($data);
          redirect('admin/iklan');
      }
    }
    public function ubahIklan()
    {
      $data['title'] = "iklan";
      $data['section'] = "Iklan";
      $data['iklan'] = $this->ModelIklan->getIklan()->result_array();
      $kategori = $this->ModelIklan->joinKategoriIklan(['iklan.id_kategori' => $this->uri->segment(3)])->result_array();
        $data['kategori'] = $this->ModelIklan->getKategori()->result_array();

        $this->form_validation->set_rules('judul', 'Nama Pekerjaan', 'required|min_length[3]', ['required' => 'Nama Pekerjaan harus diisi', 'min_length' => 'Nama Pekerjaan terlalu pendek']);
        $this->form_validation->set_rules('perusahaan', 'Nama Perusahaan', 'required|min_length[3]', ['required' => 'Nama Perusahaan harus diisi', 'min_length' => 'Nama Perusahaan terlalu pendek']);
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', ['required' => 'Nama perusahaan harus diisi',]);
        $this->form_validation->set_rules('lokasi', 'Nama Lokasi', 'required|min_length[3]', ['required' => 'Nama Lokasi harus diisi', 'min_length' => 'Nama Lokasi terlalu pendek']);
        $this->form_validation->set_rules('lokasi', ' Pendidikan', 'required|min_length[3]', ['required' => ' Pendidikan harus diisi', 'min_length' => ' Pendidikan terlalu pendek']);
        $this->form_validation->set_rules('gaji', 'Gaji', 'required|numeric', ['required' => 'Gaji harus diisi', 'numeric' => 'Yang anda masukan bukan angka']);
        $this->form_validation->set_rules('gender', 'Gender', 'required', ['required' => 'Gender harus diisi',]);

        $id_iklan = $this->input->post('id_iklan');
        $config['upload_path'] = './assets/admin/img/gambar/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';

        $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('gambar'))
    {
      $judul = $this->input->post('judul', TRUE);
      $perusahaan = $this->input->post('perusahaan', TRUE);
      $id_kategori = $this->input->post('id_kategori', TRUE);
      $lokasi = $this->input->post('lokasi', TRUE);
      $pendidikan = $this->input->post('pendidikan', TRUE);
      $gaji = $this->input->post('gaji', TRUE);
      $gender = $this->input->post('gender', TRUE);
      $pengalaman = $this->input->post('pengalaman', TRUE);
      $deskripsi = $this->input->post('deskripsi', TRUE);

      $data = array(
        'judul' => $judul,
        'perusahaan' => $perusahaan,
        'id_kategori' => $id_kategori,
        'lokasi' => $lokasi,
        'pendidikan' => $pendidikan,
        'gaji' => $gaji,
        'gender' => $gender,
        'pengalaman' => $pengalaman,
        'deskripsi' => $deskripsi,
      );
      $this->db->where('id_iklan',$id_iklan);
      $this->db->update('iklan', $data);

      redirect('admin/iklan');
    }
    else
    {
           
            $judul = $this->input->post('judul', TRUE);
            $perusahaan = $this->input->post('perusahaan', TRUE);
            $id_kategori = $this->input->post('id_kategori', TRUE);
            $lokasi = $this->input->post('lokasi', TRUE);
            $pendidikan = $this->input->post('pendidikan', TRUE);
            $gaji = $this->input->post('gaji', TRUE);
            $gender = $this->input->post('gender', TRUE);
            $pengalaman = $this->input->post('pengalaman', TRUE);
            $deskripsi = $this->input->post('deskripsi', TRUE);
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
      

            $data = array(
              'judul' => $judul,
              'perusahaan' => $perusahaan,
              'id_kategori' => $id_kategori,
              'lokasi' => $lokasi,
              'pendidikan' => $pendidikan,
              'gaji' => $gaji,
              'gender' => $gender,
              'pengalaman' => $pengalaman,
              'deskripsi' => $deskripsi,
              'gambar' => $gambar,
            );
            $this->db->where('id_iklan',$id_iklan);
            $this->db->update('iklan', $data);
            
            redirect('admin/iklan');
          }
    
  
  }
    public function hapus_data($id_iklan)
    {
        $this->ModelIklan->hapus_data($id_iklan);
        redirect('admin/iklan');
    }
    public function kategori()
    {
      $data['title'] = "iklan";
      $data['section'] = "Kategori";
        $data['kategori'] = $this->ModelIklan->getKategori()->result_array();
        $this->form_validation->set_rules('nama_kategori', 'Kategori', 'required', ['required' => 'Nama Kategori harus diisi']);
        if ($this->form_validation->run() == false) {
          $this->load->view('admin/tampilan/header');
          $this->load->view('admin/tampilan/index',$data);
          $this->load->view('admin/kategori',$data);
        } else {
            $data = ['nama_kategori' => $this->input->post('nama_kategori')];
            $this->ModelIklan->simpanKategori($data);
            redirect('admin/iklan/kategori');
        }
    }

  public function updateKategori()
  {
      $data['kategori'] = $this->ModelIklan->kategoriWhere(['id_kategori' => $this->uri->segment(3)])->result_array();

      $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|min_length[3]', [
          'required' => 'Nama Kategori harus diisi',
          'min_length' => 'Nama Kategori terlalu pendek'
      ]);

      if ($this->form_validation->run() == false) {
          $this->load->view('admin/tampilan/header', $data);
          $this->load->view('admin/tampilan/index', $data);
          $this->load->view('iklan/kategori', $data);
      } else {

          $data = [
              'nama_kategori' => $this->input->post('nama_kategori', true)
          ];

          $this->ModelIklan->updateKategori(['id_kategori' => $this->input->post('id_kategori')], $data);
          redirect('admin/iklan/kategori');
      }
  }
  public function hapus_kategori($id_kategori)
  {
    $this->ModelIklan->hapus_kategori($id_kategori);
      redirect('admin/iklan/kategori');
  }
  public function pelamar()
    {
      $data['title'] = "iklan";
      $data['section'] = "Pelamar";
        $data['pelamar'] = $this->ModelUser->getPelamar()->result_array();

          $this->load->view('admin/tampilan/header');
          $this->load->view('admin/tampilan/index',$data);
          $this->load->view('admin/pelamar',$data);
       
    }
}