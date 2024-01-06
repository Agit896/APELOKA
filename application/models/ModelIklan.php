
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelIklan extends CI_Model
{

    public function getIklan()
    { 
        return $this->db->get('iklan'); 
    } 
    public function get_keyword()
    {
    $keyword=$this->input->post('keyword',true);

     $this->db->like('judul', $keyword);
     $this->db->or_like('perusahaan', $keyword);

     return $this->db->get('iklan')->result_array();
    }
    public function iklanWhere($where) 
    { 
        return $this->db->get_where('iklan', $where); 
    } 
    public function simpanIklan($data = null) 
    { 
        $this->db->insert('iklan',$data); 
    } 
    public function updateIklan($data = null, $where = null) { 
        $this->db->update('iklan', $data, $where); 
    } 
    public function hapus_data($id_iklan)
    {
        $this->db->where('id_iklan',$id_iklan);
        $this->db->delete('iklan'); 
    }

    // manajemen kategori
    public function getKategori() { 
        return $this->db->get('kategori'); 
    } 
    
    public function kategoriWhere($where) { 
        return $this->db->get_where('kategori', $where); 
    } 
    
    public function simpanKategori($data = null) { 
        $this->db->insert('kategori', $data); 
    } 
    
    public function hapus_kategori($id_kategori)
    {
        $this->db->where('id_kategori',$id_kategori);
        $this->db->delete('kategori'); 
    }

    
    public function updateKategori() { 
        $data = [
            "nama_kategori"=> $this->input->post('nama_kategori')
        ];
        $this->db->where('id_kategori', $this->input->post('id_kategori'));
        $this->db->update('kategori', $data);
    } 
    //join 
    public function joinKategoriIklan($where) { $this->db->select('iklan.id_kategori,kategori.id_kategori'); 
        $this->db->from('iklan'); $this->db->join('kategori','kategori.id_kategori = iklan.id_kategori'); 
        $this->db->where($where); return $this->db->get(); 
    }
    // pelamar
    public function getPelamar() { 
        return $this->db->get('pelamar'); 
    } 
}