<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_arsip extends CI_Model
{

    function gettahun(){
        $query = $this->db->query("SELECT YEAR(tgl_surat) AS tahun FROM layanan GROUP BY YEAR(tgl_surat) ORDER BY YEAR(tgl_surat) ASC");

        return $query->result();
    }

    function filterbytanggal($tanggalawal,$tanggalakhir){
        $query = $this->db->query("SELECT * from layanan where tgl_surat BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tgl_surat ASC ");

        return $query->result();
    }

    function filterbybulan($tahun1,$bulanawal,$bulanakhir){
        $query = $this->db->query("SELECT * from layanan where YEAR(tgl_surat) = '$tahun1' and MONTH(tgl_surat) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tgl_surat ASC ");

        return $query->result();
    }

    function filterbytahun($tahun2){
        $query = $this->db->query("SELECT * from layanan where YEAR(tgl_surat) = '$tahun2' ORDER BY tgl_surat ASC ");

        return $query->result();
    }

}
