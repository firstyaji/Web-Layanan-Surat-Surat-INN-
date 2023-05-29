<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_layanan extends CI_Model
{

    private $table = 'layanan';

    private $pk = 'nik'; // primary key
    

    public function GetAll()
    {
       // 'id_layanan' + 1;
        $this->db->order_by($this->pk, 'asc'); // urutkan berdasarkan id layanan
        return $this->db->get($this->table);

        return $this->db->get('layanan')->result_array();
    }

    public function getnama($nik)
    {
        $query = $this->db->query("SELECT * from penduduk where nik = '$nik' ORDER BY nik ASC");
        
        return $query->result();
    }

    function getdata()
    {
        $query = $this->db->query("SELECT * from surat ORDER BY jenis ASC");

        return $query->result();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
} 