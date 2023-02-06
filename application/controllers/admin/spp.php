<?php
defined('BASEPATH') or exit('No direct script access allowed');

class spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sppM');
    }

    public function index()
    {
        $data['spp'] = $this->sppM->getSpp();
        $this->load->view('admin/spp', $data);
    }
    
    public function edit()
    {
        $this->load->view('admin/editSpp');
        
    }

    public function tambah_aksi(){
        $id_spp = $this->input->post('id_spp');
        $nominal = $this->input->post('nominal');
        $tahun = $this->input->post('tahun');
        

        $data = array(
            'id_spp'        =>$id_spp,
            'nominal'       =>$nominal,
            'tahun'         =>$tahun,


        );

        $this->sppM->insertSpp($data);
        redirect(site_url('admin/spp/index'));

        $this->siswa->input_data($data, 'spp');
        redirect(site_url('spp/index'));
    }

    public function deleteSpp($id_spp){
        $this->sppM->deleteSpp($id_spp);
        redirect(site_url('admin/spp/index'));
    }

    public function editSpp($id_spp)
    {
        $this->load->view('admin/editSpp',['spp'=>$this->sppM->getOne($id_spp)]);
        
    }

    public function updateSpp($id_spp)
    {
        $data = array(
           
            'nominal'       =>$nominal,
            'tahun'         =>$tahun,


        );
        $this->sppM->updateSpp($id_spp,$data);
        redirect(site_url('spp/index'));  
    }
}
