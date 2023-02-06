<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswaM');
    }

    public function index()
    {
        $data['siswa'] = $this->siswaM->getSiswa();
        $this->load->view('admin/siswa', $data);
    }

    public function edit()
    {
        $this->load->view('admin/editSiswa');
        
    }

    public function tambah_aksi(){
        $nisn = $this->input->post('nisn');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $id_kelas = $this->input->post('id_kelas');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $id_spp = $this->input->post('id_spp');
        $id_login = $this->input->post('id_login');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg';
        $config['file_name'] = $nama . '.jpg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = array(
            'nama'        =>$nama,
            'nisn'        =>$nisn,
            'nis'         =>$nis,
            'id_kelas'    =>$id_kelas,
            'alamat'      =>$alamat,
            'no_telp'     =>$no_telp,
            'id_spp'      =>$id_spp,
            'id_login'    =>$id_login,
            'image'       =>base_url('uploads/') . $config ['file_name'],

        );

        $this->siswaM->insertSiswa($data);
            redirect(site_url('admin/siswa/index'));

        $this->siswa->input_data($data, 'siswa');
        redirect(site_url('siswa/index'));
    }

    public function deleteSiswa($nisn){
        $this->siswaM->deleteSiswa($nisn);
        redirect(site_url('admin/siswa/index'));
    }

    public function editSiswa($nisn)
    {
        $this->load->view('admin/editSiswa',['siswa'=>$this->siswaM->getOne($nisn)]);
        
    }
}

