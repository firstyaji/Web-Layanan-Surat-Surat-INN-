<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_penduduk extends CI_Model
{

    private $table = 'penduduk';
    private $pk = 'nik';

    public function GetAll()
    {
        $this->db->order_by($this->pk, 'asc');
        return $this->db->get($this->table);

        return $this->db->get('penduduk')->result_array();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getData(){
        return $this->db->get('penduduk')->result_array();
    }
    
}
