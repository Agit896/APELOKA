
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelKategori extends CI_Controller{

    public function SemuaData()
    {
       return $this->db->get('kategori')->result_array();
    }
}