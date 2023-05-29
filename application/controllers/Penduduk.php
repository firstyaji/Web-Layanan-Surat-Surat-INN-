<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Penduduk extends CI_Controller
{
    private $view = "backend/v_penduduk/";
    //memanggil control Admin/index dalam keadaan refresh
    private $redirect = "Penduduk";
    public function __construct()
    {
        parent::__construct();
        IsAdmin();
        //control Admin menghubungkan model M_kategori
        $this->load->model('M_penduduk');
        $this->load->library('Excel');
    }

    public function create()
    {
        //untuk create tidak memangil model, langsung ke view dengan data baru
        $data = array(
            'create' => ''
        );
        $this->load->view($this->view . 'create', $data);
    }

    public function save()
    {
        $data = array(
            'no_kk' => $this->input->post('no_kk'),
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'tempat_lhr' => $this->input->post('tempat_lhr'),
            'tanggal_lhr' => $this->input->post('tanggal_lhr'),
            'kawin' => $this->input->post('kawin'),
            'negara' => $this->input->post('negara'),
            'agama' => $this->input->post('agama'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_rt' => $this->input->post('no_rt'),
            'no_rw' => $this->input->post('no_rw')
        );
        $this->M_penduduk->save($data);
        //dengan $this->redirect artinya memanggil private $redirect = "Admin"
        redirect($this->redirect, 'refresh');
    }

    function index()
    {
        
        $read = $this->M_penduduk->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'read' => $read
        );
        $data['data'] = $this->M_penduduk->getData();
        /*dengan $this->view artinya memanggil private $view="backend/v_admin/"dilanjutkan dengan 'read' untuk memanggil read.php*/
        $this->template->load('backend/template', $this->view . 'read', $data);
        /*$this->load->view($this->view . 'read', $data);*/
    }

    //function untuk memanggil file data penduduk dari Excel
    public function importExcel(){
        $fileName = $_FILES['file']['name'];
        $config['upload_path'] = './assets/'; //path upload
        $config['file_name'] = $fileName;  // nama file
        $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
        $config['max_size'] = 10000; // maksimal sizze
 
        $this->load->library('upload'); //meload library upload
        $this->upload->initialize($config);
          
        if(! $this->upload->do_upload('file') ){
            echo $this->upload->display_errors();exit();
        }
              
        $inputFileName = './assets/'.$fileName;
 
        try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
 
            for ($row = 2; $row <= $highestRow; $row++){              
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                    NULL,
                    TRUE,
                    FALSE);   
 
                 // Sesuaikan key array dengan nama kolom di database                                                         
                 $data = array(
                    "no_kk"=> $rowData[0][0],
                    "nik"=> $rowData[0][1],
                    "nama"=> $rowData[0][2],
                    "tempat_lhr"=> $rowData[0][3],
                    "tanggal_lhr"=> $rowData[0][4],
                    "kawin"=> $rowData[0][5],
                    "jenis_kelamin"=> $rowData[0][6],
                    "alamat"=> $rowData[0][7],
                    "no_rt"=> $rowData[0][8],
                    "no_rw"=> $rowData[0][9],
                );
 
                $insert = $this->db->insert("penduduk",$data);
                      
            }
            redirect('Penduduk');
        }
        public function search(){
            $keyword = $this->input->post('keyword');
            $data['penduduk']=$this->M_penduduk->get_keyword($keyword);
            $this->template->load('backend/template', $this->view . 'read', $data);
        }  
    }      
