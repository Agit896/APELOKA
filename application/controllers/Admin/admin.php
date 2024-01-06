
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function construct()
    {
        parent::construct(); 
        cek_login();
    }
    public function index()
  {
    $data['title'] = "Home";
    $data['section'] = "Dashboard";
    $data['iklan'] = $this->ModelIklan->getIklan()->result_array();

    $this->load->view('admin/tampilan/header', $data);
    $this->load->view('admin/tampilan/index',$data);
    $this->load->view('admin/dashboard');
  }
//   public function iklan()
//   {
//     $data['title'] = "iklan";
//     $data['section'] = "Iklan";
//     $data['iklan'] = $this->ModelIklan->SemuaData();
//     if( $this->input->post('keyword')){
//       $data['iklan']=$this->ModelIklan->get_keyword();
//     }

//     $this->load->view('admin/tampilan/header');
//     $this->load->view('admin/tampilan/index', $data);
//     $this->load->view('admin/iklan');
//   }
//   public function kategori()
//   {
//     $data['title'] = "kategori";
//     $data['section'] = "Kategori";
//     $data['kategori'] = $this->ModelIklan->getKategori();

//     $this->load->view('admin/tampilan/header', $data);
//     $this->load->view('admin/tampilan/index');
//     $this->load->view('admin/kategori',$data);
//   }
//   public function pelamar()
//   {
//     $data['title'] = "pelamar";
//     $data['section'] = "Pelamar";

//     $this->load->view('admin/tampilan/header', $data);
//     $this->load->view('admin/tampilan/index');
//     $this->load->view('admin/pelamar');
//   }
//   public function simpanKategori()
//   {
//     $this->ModelIklan->simpanKategori();
//     $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
//           Data Berhasil Ditambah!
//           </div>');
//     redirect('admin/admin/kategori');
//   }
//   public function updateKategori()
//   {
//     $id_kategori = $this->input->post('id_kategori');
//     $this->ModelIklan->updateKategori();
//     $data['kategori'] = $this->ModelIklan->kategoriWhere(['id_kategori' => $this->uri->segment(3)])->result_array();

//     $this->session->set_flashdata('pesan','<br><div class="alert alert-success" role="alert">
//           Data Berhasil Diubah!
//           </div>');
//     redirect('admin/admin/kategori');
//   }
//   public function hapusKategori($id_kategori)
//   {
//     $this->ModelIklan->hapusKategori($id_kategori);
//     $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
//           Data Berhasil Dihapus!
//           </div>');
//     redirect('admin/admin/kategori');
    
//   }
//   public function proses_tambah_data()
//   {
//     $config['upload_path']          = './gambar/';
//     $config['allowed_types']        = 'gif|jpg|png';
//     $config['max_size']             = 10000;
//     $config['max_width']            = 10000;
//     $config['max_height']           = 10000;
    
//     $this->load->library('upload', $config);
//     $kategori = $this->ModelIklan->joinKategoriIklan(['iklan.id_kategori' => $this->uri->segment(3)])->result_array();

//     if ( ! $this->upload->do_upload('userfile'))
//     {
//            echo "Gagal Tambah";
//     }
//     else
//     {
//             $gambar = $this->upload->data();
//             $gambar = $gambar['file_name'];
//             $judul = $this->input->post('judul', TRUE);
//             $perusahaan = $this->input->post('perusahaan', TRUE);
//             $lokasi = $this->input->post('lokasi', TRUE);
//             $pendidikan = $this->input->post('pendidikan', TRUE);
//             $gaji = $this->input->post('gaji', TRUE);
//             $pengalaman = $this->input->post('pengalaman', TRUE);
//             $deskripsi = $this->input->post('deskripsi', TRUE);
//             $id_kategori = $this->input->post('id_kategori', TRUE);

//             $data = array(
//               'gambar' => $gambar,
//               'judul' => $judul,
//               'perusahaan' => $perusahaan,
//               'lokasi' => $lokasi,
//               'pendidikan' => $pendidikan,
//               'gaji' => $gaji,
//               'pengalaman' => $pengalaman,
//               'deskripsi' => $deskripsi,
//               'id_kategori' => $id_kategori,
//             );
//             $this->db->insert('iklan', $data);
//             $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
//             Data Berhasil Ditambah!
//             </div>');
//             redirect('admin/admin/iklan');
//           }
//   }
//   public function hapus_data($id_iklan)
//   {
//     $this->ModelIklan->hapus_data($id_iklan);
//     $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
//           Data Berhasil Dihapus!
//           </div>');
//     redirect('admin/admin/iklan');
    
//   }
  
//   public function proses_edit_data()
//   {
//     $kategori = $this->ModelIklan->joinKategoriIklan(['iklan.id_kategori' => $this->uri->segment(3)])->result_array();
//      $id_iklan = $this->input->post('id_iklan');
//     $config['upload_path']          = './gambar/';
//     $config['allowed_types']        = 'gif|jpg|png';
//     $config['max_size']             = 10000;
//     $config['max_width']            = 10000;
//     $config['max_height']           = 10000;

//     $this->load->library('upload', $config);

//     if ( ! $this->upload->do_upload('userfile'))
//     {
//       $judul = $this->input->post('judul', TRUE);
//       $perusahaan = $this->input->post('perusahaan', TRUE);
//       $lokasi = $this->input->post('lokasi', TRUE);
//       $pendidikan = $this->input->post('pendidikan', TRUE);
//       $gaji = $this->input->post('gaji', TRUE);
//       $pengalaman = $this->input->post('pengalaman', TRUE);
//       $deskripsi = $this->input->post('deskripsi', TRUE);
//       $id_kategori = $this->input->post('id_kategori', TRUE);

//       $data = array(
//         'judul' => $judul,
//         'perusahaan' => $perusahaan,
//         'lokasi' => $lokasi,
//         'pendidikan' => $pendidikan,
//         'gaji' => $gaji,
//         'pengalaman' => $pengalaman,
//         'deskripsi' => $deskripsi,
//         'id_kategori' => $id_kategori,
//       );
//       $this->db->where('id_iklan',$id_iklan);
//       $this->db->update('iklan', $data);
//       $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
//       Data Berhasil Diubah!
//       </div>');
//       redirect('admin/admin/iklan');
//     }
//     else
//     {
           
//             $gambar = $this->upload->data();
//             $gambar = $gambar['file_name'];
//             $judul = $this->input->post('judul', TRUE);
//             $perusahaan = $this->input->post('perusahaan', TRUE);
//             $lokasi = $this->input->post('lokasi', TRUE);
//             $pendidikan = $this->input->post('pendidikan', TRUE);
//             $gaji = $this->input->post('gaji', TRUE);
//             $pengalaman = $this->input->post('pengalaman', TRUE);
//             $deskripsi = $this->input->post('deskripsi', TRUE);
//             $id_kategori = $this->input->post('id_kategori', TRUE);

//             $data = array(
//               'gambar' => $gambar,
//               'judul' => $judul,
//               'perusahaan' => $perusahaan,
//               'lokasi' => $lokasi,
//               'pendidikan' => $pendidikan,
//               'gaji' => $gaji,
//               'pengalaman' => $pengalaman,
//               'deskripsi' => $deskripsi,
//               'id_kategori' => $id_kategori,
//             );
//             $this->db->where('id_iklan',$id_iklan);
//             $this->db->update('iklan', $data);
//             $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
//             Data Berhasil Diubah!
//             </div>');
//             redirect('admin/admin/iklan');
//           }
    
//   }

 }
