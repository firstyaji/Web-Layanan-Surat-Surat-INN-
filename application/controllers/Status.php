<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Status extends CI_Controller
{

    private $view = "backend/v_status/";
    //memanggil control Admin/index dalam keadaan refresh
    private $redirect = "Status";

    public function __construct()
    {
        parent::__construct();
        //control Admin menghubungkan model M_admin
        $this->load->model('M_status');
    }
    function index()
    {
        $read = $this->M_status->GetAll();
        $data = array(
            'read' => $read
        );

        $this->load->view('backend/v_status/read', $data);

        //$this->template->load('backend/template', $this->view . 'read', $data);
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
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_kategori' => $this->input->post('nama_kategori')
        );

        $this->M_kategori->save($data);
        //dengan $this->redirect artinya memanggil private $redirect = "Admin"
        redirect($this->redirect, 'refresh');
    }

    public function edit()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'edit' => $this->M_kategori->edit($kd)
        );
        $this->load->view($this->view . 'edit', $data);
    }

    public function update()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            /*
    'nama_admin' =nama yang diambil dari fild pada tabel
    $this->input->post('nama_admin') =nama yang diambil dari form
    */
            'nama' => $this->input->post('nama')
        );
        $this->M_pelayanan->update($kd, $data);
        redirect($this->redirect, 'refresh');
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
