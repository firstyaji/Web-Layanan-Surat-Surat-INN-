<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_cetak extends CI_Model
{

    private $table = 'layanan';
    private $pk = 'id_layanan';

    public function GetAll()
    {
        $this->db->order_by($this->pk, 'desc');
        return $this->db->get($this->table);
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function edit($kd)
    {
        $this->db->where($this->pk, $kd);
        return $this->db->get($this->table)->row_array();
    }
    public function update($kd, $data)
    {
        $this->db->where($this->pk, $kd);
        return $this->db->update($this->table, $data);
    }

    function getbelumMenikah($nomor)
    {
        $query = $this->db->query("SELECT * FROM layanan where no_surat = '$nomor' ORDER BY no_surat ASC");

        return $query->result();
    }

    function getTidakMampu($nomor1)
    {
        $query = $this->db->query("SELECT * FROM layanan where no_surat = '$nomor1' ORDER BY no_surat ASC");

        return $query->result();
    }

    // PENAMBAHAN SURAT BARU
    function getUsaha($nomor2)
    {
        $query = $this->db->query("SELECT * FROM layanan where no_surat = '$nomor2' ORDER BY no_surat ASC");

        return $query->result();
    }
    
    public function delete($data)
    {
        $this->db->where($data);
        return $this->db->delete($this->table);
    }
}
