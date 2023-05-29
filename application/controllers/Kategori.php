<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori extends CI_Controller
{
    /*
 $view berfungsi untuk membaca file view seperti read.php, create.php
 dan edit.php dengan lokasi folder views/backend/v_admin/
 */
    private $view = "backend/v_kategori/";
    //memanggil control Admin/index dalam keadaan refresh
    private $redirect = "Kategori";

    public function __construct()
    {
        parent::__construct();
        IsAdmin();
        //control Admin menghubungkan model M_admin
        $this->load->model('M_kategori');
    }
    function index()
    {
        //memanggil model M_admin dengan function GetAll
        $read = $this->M_kategori->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'read' => $read
        );

        $this->template->load('backend/template', $this->view . 'read', $data);
        /*
        $this->load->view($this->view . 'read', $data);
        */
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
            'id_surat' => $this->input->post('id_surat'),
            'jenis' => $this->input->post('jenis'),
            'kode_surat' => $this->input->post('kode_surat')
        );

        $this->M_kategori->save($data);
        //dengan $this->redirect artinya memanggil private $redirect = "Admin"
        redirect($this->redirect, 'refresh');
    }

    public function edit()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            //'edit' variabel yang akan dipanggil pada view edit.php
            'edit' => $this->M_kategori->edit($kd)
        );
        $this->load->view($this->view . 'edit', $data);
    }

    public function update()
    {
        $kd = $this->uri->segment(3);
        $data = array(
        
            'jenis' => $this->input->post('jenis'),
            'kode_surat' => $this->input->post('kode_surat')
            
        );
        $this->M_kategori->update($kd, $data);


        redirect($this->redirect, 'refresh');
      
    }
    
    public function delete()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            //data akan dihapus sesuai uri->segment(3) yang dipilih
            'id_surat' => $kd
        );
        $this->M_kategori->delete($data);
        redirect($this->redirect, 'refresh');
    }
}
