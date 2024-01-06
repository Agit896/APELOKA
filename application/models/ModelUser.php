<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ModelUser extends CI_Model {
 
    public function simpanData($data = null) { 
        $this->db->insert('pengguna', $data); 
    } 
    
    public function cekData($where = null) { 
        return $this->db->get_where('pengguna', $where); 
    } 
    
    public function getUser($where = null) { 
        return $this->db->get_where('pengguna', $where); 
    }
    public function getPelamar($where = null) { 
        return $this->db->get_where('pelamar', $where); 
    }
    
    public function cekUserAccess($where = null) { 
        $this->db->select('*'); $this->db->from('access_menu'); 
        $this->db->where($where); 
        return $this->db->get();
    } 
    public function getIklan()
    { 
        return $this->db->get('iklan'); 
    } 
    public function detail_ikl($id_iklan)
    { 
        $result = $this->db->where('id_iklan',$id_iklan)->get('iklan');
        if ($result->num_rows()>0) {
            return $result->result_array();
        }else{
            return false;
        }
    } 
    public function proses_tambah_data($data = null) 
    { 

           $data = [
                "nama_lengkap" => $this->input->post('nama_lengkap'),
                "jenjang_pendidikan" => $this->input->post('jenjang_pendidikan'),
                "tanggal_lahir" => $this->input->post('tanggal_lahir'),
                "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                "alamat" => $this->input->post('alamat'),
                "no_wa" => $this->input->post('no_wa'),
                "cv" => $this->input->post('cv'),
                
           ]; 
            $this->db->insert('pelamar',$data);
    } 
    public function simpanUser() 
    { 
        $this->db->insert('pelamar'); 
    }
 
}