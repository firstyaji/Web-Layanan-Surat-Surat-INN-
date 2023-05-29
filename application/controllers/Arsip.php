<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Arsip extends CI_Controller
{
    private $view = "backend/v_arsip/";
    //memanggil control Admin/index dalam keadaan refresh
    private $redirect = "Arsip";

    public function __construct()
    {
        parent::__construct();
        IsAdmin();
        
        $this->load->model('M_arsip');
    }
    function index()
    {
        $data['tahun'] = $this->M_arsip->gettahun();
        
        $this->template->load('backend/template', $this->view . 'read', $data);
        
    }

    function filter(){
        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $tahun2 = $this->input->post('tahun2');
        $nilaifilter = $this->input->post('nilaifilter');

        if ($nilaifilter == 1) {
            $data['title'] = "Arsip Berdasarkan Tanggal";
            $data['subtitle'] = "Dari Tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
            $data['datafilter'] = $this->M_arsip->filterbytanggal($tanggalawal,$tanggalakhir);
            

            $this->load->view('backend/v_arsip/laporan_surat', $data);

        }elseif ($nilaifilter == 2){
            $data['title'] = "Arsip Berdasarkan Bulan";
            $data['subtitle'] = "Dari Bulan : ".$bulanawal.' Sampai Bulan : '.$bulanakhir.' Tahun : '.$tahun1;
            $data['datafilter'] = $this->M_arsip->filterbybulan($tahun1,$bulanawal,$bulanakhir);
            

            $this->load->view('backend/v_arsip/laporan_surat', $data);
        }elseif ($nilaifilter == 3){
            $data['title'] = "Arsip Berdasarkan Tahun";
            $data['subtitle'] = ' Tahun : '.$tahun2;
            $data['datafilter'] = $this->M_arsip->filterbytahun($tahun2);
            

            $this->load->view('backend/v_arsip/laporan_surat', $data);
        }
    }

    
}
