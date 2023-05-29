<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
    private $view = "backend/v_home/";
    private $redirect = "Home";
    public function __construct()
    {
        parent::__construct();
        //mengaktifkan session dengan demikian halaman ini jika dipanggil kini membutuhkan session 
        IsAdmin();
    }

    public function index()
    {
        $data = array();

        $this->load->view('backend/v_home/read');
    }
}
