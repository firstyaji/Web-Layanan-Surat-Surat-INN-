<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Word extends CI_Controller
{
    /*
 $view berfungsi untuk membaca file view seperti read.php, create.php
 dan edit.php dengan lokasi folder views/backend/v_admin/
 */
    private $view = "backend/v_word/";
    //memanggil control Admin/index dalam keadaan refresh
    private $redirect = "Word";

    public function __construct()
    {
        parent::__construct();
        //control Admin menghubungkan model M_admin
        $this->load->model('M_word');
    }
    public function index()
    {
        $data = array();

        $this->load->view('backend/v_word/read');
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

            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'ttl' => $this->input->post('ttl'),
            'status' => $this->input->post('status'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'alamat' => $this->input->post('alamat'),
            'keperluan' => $this->input->post('keperluan'),
        );

        $this->M_word->save($data);
        //dengan $this->redirect artinya memanggil private $redirect = "Admin"
        redirect($this->redirect, 'refresh');
    }

    public function edit()
    {
        /*
 segment 1 adalah control, segment 2 adalah function, segment 2 adalah PK,
 data yang akan ditambilkan hanya yang dipilih saja sesuai PK yang dipilih
 */
        $kd = $this->uri->segment(3);
        $data = array(
            //'edit' variabel yang akan dipanggil pada view edit.php
            'edit' => $this->M_word->edit($kd)
        );
        $this->load->view($this->view . 'edit', $data);
    }

}
