<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Layanan extends CI_Controller
{
    private $view = "backend/v_pelayanan/";
    private $redirect = "Layanan";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_layanan');
    }

    // bagian menampilakan awal masuk layanan surat
    public function index()
    {
        $read = $this->M_layanan->GetAll();
        $data = array(
            'read' => $read
        );

        $this->load->view('backend/v_layanan/layanan');
    }

    function filter()
    {
        $nik = $this->input->post('nik'); // halaman mencari bagian layanan surat

        $data['title'] = "DATA PENDUDUK";

        $data['datafilter'] = $this->M_layanan->getnama($nik);

        $data['datakategori'] = $this->M_layanan->getdata();

        $this->load->view('backend/v_layanan/detail',$data);

        //$data['jenis_surat'] = $this->db->get('surat')->result_array();
    }

    public function save()
    {
        $data = array(
            'no_kk' => $this->input->post('no_kk'),
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'tempat_lhr' => $this->input->post('tempat_lhr'),
            'tanggal_lhr' => $this->input->post('tanggal_lhr'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'negara' => $this->input->post('negara'),
            'agama' => $this->input->post('agama'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'alamat' => $this->input->post('alamat'),
            'no_rt' => $this->input->post('no_rt'),
            'no_rw' => $this->input->post('no_rw'),
            'jenis' => $this->input->post('jenis'),
            'keperluan' => $this->input->post('keperluan'),
            'no_surat' => '  ',
            'tgl_surat' => date('Y-m-d'),
            'st_surat' => 'Diproses'
        );

        $this->M_layanan->save($data);

        redirect($this->redirect, 'refresh');
    }



}
