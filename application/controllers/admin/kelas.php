<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kelasM');
    }

    public function index()
    {
        $data['kelas'] = $this->kelasM->getKelas();
        $this->load->view('admin/kelas', $data);
    }

    public function edit()
    {
        $this->load->view('admin/editKelas');
        
    }

    public function tambah_aksi(){
        $id_kelas = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');
        $id_kk = $this->input->post('id_kk');

        $data = array(
            'id_kelas'        =>$id_kelas,
            'nama_kelas'      =>$nama_kelas,
            'id_kk'           =>$id_kk,

        );
        $this->kelasM->insertKelas($data);
            redirect(site_url('admin/kelas/index'));
            
            $this->kelas->input_data($data, 'kelas');
            redirect(site_url('kelas/index'));
            
    }
    
        public function deleteKelas($id_kelas){
            $this->kelasM->deleteKelas($id_kelas);
            redirect(site_url('admin/kelas/index'));
        }

        public function editKelas($id_kelas)
        {
            $this->load->view('admin/editKelas',['kelas'=>$this->kelasM->getOne($id_kelas)]);
            
        }
    }
