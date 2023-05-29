<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cetak extends CI_Controller
{
    private $view = "backend/v_cetak/";
    private $redirect = "Cetak";

    public function __construct()
    {
        parent::__construct();
        IsAdmin();
        $this->load->model('M_cetak');
    }
    function index()
    {
        $read = $this->M_cetak->GetAll();
        $data = array(
            'read' => $read
        );
        $this->template->load('backend/template', $this->view . 'read', $data);
    }
    public function belumMenikah()
    {
        $data['title'] = "Laporan Pemasangan";
        $data['layanan'] = $this->db->get_where('layanan',['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('backend/v_surat/st_belum_menikah',$data);
    }

    public function tidakMampu()
    {
        $data['title'] = "Laporan Pemasangan";
        $data['layanan'] = $this->db->get_where('layanan',['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('backend/v_surat/tidak_mampu',$data);
    }

    public function usaha()
    {
        $data['title'] = "Laporan Pemasangan";
        $data['layanan'] = $this->db->get_where('layanan',['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('backend/v_surat/st_ket_usaha',$data);
    }

    function filter()
    {  
        //$data['datakategori'] = $this->M_cetak->getdata();//
        $nomor = $this->input->post('no_surat');
        $nomor1 = $this->input->post('no_surat');
        $nomor2 = $this->input->post('no_surat');
        $nilaifilter = $this->input->post('nilaifilter');

        if ($nilaifilter == 1) {
            $data ['subtitle'] = "Nomor Surat : " .$nomor;
            $data['datafilter'] = $this->M_cetak->getbelumMenikah($nomor);

            $this->load->view('backend/v_surat/st_belum_menikah', $data);
        }elseif ($nilaifilter == 2) {
            $data ['subtitle'] = "Nomor Surat : " .$nomor1;
            $data['datafilter'] = $this->M_cetak->getTidakMampu($nomor1); 

            $this->load->view('backend/v_surat/tidak_mampu', $data);
        }elseif ($nilaifilter == 3) {
            $data ['subtitle'] = "Nomor Surat : " .$nomor2;
            $data['datafilter'] = $this->M_cetak->getUsaha($nomor2); 

            $this->load->view('backend/v_surat/st_ket_usaha', $data);
    }
}

    public function create()
    {
        //untuk create tidak memangil model, langsung ke view dengan data baru
        $data = array('create' => '');

        $this->load->view($this->view . 'create', $data);
    }

    public function save()
    {
        $data = array(
            'kd_admin' => $this->input->post('kd_admin'),
            'nama_admin' => $this->input->post('nama_admin'),
            'pswd_admin' => md5($this->input->post('pswd_admin')),
        );

        $this->M_admin->save($data);
        
        $this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show" role="alert"> Data Berhasil Ditambahkan !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');

        redirect($this->redirect, 'refresh');
    }

    public function edit()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'edit' => $this->M_admin->edit($kd)
        );
        $this->load->view($this->view . 'edit', $data);
    }

    public function update()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'nama_admin' => $this->input->post('nama_admin')
        );
        $this->M_admin->update($kd, $data);

        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil Diupdate !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');

        redirect($this->redirect, 'refresh');
    }
    public function delete()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'kd_admin' => $kd
        );
        $this->M_admin->delete($data);
        $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Berhasil Dihapus !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect($this->redirect, 'refresh');
    }
}
