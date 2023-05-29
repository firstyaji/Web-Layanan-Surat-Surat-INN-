<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    private $view = "backend/v_admin/";
    private $redirect = "Admin";

    public function __construct()
    {
        parent::__construct();
        IsAdmin();
        $this->load->model('M_admin');
    }
    function index()
    {
        $read = $this->M_admin->GetAll();
        $data = array(
            'read' => $read
        );
        $this->template->load('backend/template', $this->view . 'read', $data);
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
