<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pelayanan extends CI_Controller
{

    private $view = "backend/v_pelayanan/";
    //memanggil control Admin/index dalam keadaan refresh
    private $redirect = "Pelayanan";

    public function __construct()
    {
        parent::__construct();
        IsAdmin();
        //control Admin menghubungkan model M_admin
        $this->load->model('M_pelayanan');
    }
    function index()
    {

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        }

        if ($this->input->post('reset')) {
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('no_surat', $data['keyword']);

        $read = $this->M_pelayanan->Get($data['keyword']);
        $data = array(
            'read' => $read,
            'keyword' => $data['keyword']
        );

        $this->template->load('backend/template', $this->view. 'read', $data);
    

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
            'no_surat' => $this->input->post('no_surat')
        );

        $this->M_pelayanan->save($data);
        redirect($this->redirect, 'refresh');
    }

    public function edit()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'edit' => $this->M_pelayanan->edit($kd)
        );
        $this->load->view($this->view . 'edit', $data);
    }

    public function update()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'no_surat' => $this->input->post('no_surat')
        );
        $this->M_pelayanan->update($kd, $data);
        redirect($this->redirect, 'refresh');

        $this->load->view($this->view . 'no_surat', $data);

    }

    public function status()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'st_surat' => $this->uri->segment(4)
        );
        $this->M_pelayanan->update($kd, $data);

        $this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show" role="alert"> Surat Berhasil Dicetak !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        
        redirect($this->redirect, 'refresh');
    }
    
    
    public function printWord()
    {
        $data['title'] = "Laporan Pemasangan";
        $data['layanan'] = $this->db->get_where('layanan',['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('backend/v_pelayanan/cetak', $data);
        
    }

    function filter()
    {
        $data['title'] = "Laporan";

        
    }

    public function delete()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            //data akan dihapus sesuai uri->segment(3) yang dipilih
            'id_kategori' => $kd
        );
        $this->M_kategori->delete($data);
        redirect($this->redirect, 'refresh');
    }
}
