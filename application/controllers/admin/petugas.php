<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('petugasM');
    }

    public function index()
    {
        $data['petugas'] = $this->petugasM->getPetugas();
        $this->load->view('admin/petugas', $data);
    }

    public function edit()
    {
        $this->load->view('admin/editPetugas');
        
    }

    public function tambah_aksi(){
        $nama_petugas = $this->input->post('nama_petugas');
        $id_petugas = $this->input->post('id_petugas');
        $id_login = $this->input->post('id_login');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg';
        $config['file_name'] = $nama_petugas . '.jpg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        

        $data = array(
            'id_petugas'      =>$id_petugas,
            'nama_petugas'    =>$nama_petugas,
            'id_login'        =>$id_login,
            'image'           =>base_url('uploads/') . $config ['file_name'],

        );

        $this->db->insert('petugas', $data);
        redirect(site_url('admin/petugas/index'));

        $this->siswa->input_data($data, 'petugas');
        redirect(site_url('petugas/index'));
    }

    public function deletePetugas($id_petugas){
        $this->petugasM->deletePetugas($id_petugas);
        redirect(site_url('admin/petugas/index'));
    }

    public function editPetugas($id_petugas)
    {
        $this->load->view('admin/editPetugas',['petugas'=>$this->petugasM->getOne($id_petugas)]);
        
    }
}
