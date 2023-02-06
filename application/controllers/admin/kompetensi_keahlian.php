<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kompetensi_keahlian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kompetensi_keahlianM');
    }

    public function index()
    {
        $data['kompetensi_keahlian'] = $this->kompetensi_keahlianM->getKompetensi_keahlian();
        $this->load->view('admin/kompetensi_keahlian', $data);
    }

    public function edit()
    {
        $this->load->view('admin/editKompetensi_Keahlian');
        
    }

    public function tambah_aksi(){
        $id_kk = $this->input->post('id_kk');
        $nama_kk = $this->input->post('nama_kk');
        

        $data = array(
            'id_kk'        =>$id_kk,
            'nama_kk'      =>$nama_kk,


        );

        $this->kompetensi_keahlianM->insertKompetensi_Keahlian($data);
        redirect(site_url('admin/kompetensi_keahlian/index'));

        $this->siswa->input_data($data, 'kompetensi_keahlian');
        redirect(site_url('kompetensi_keahlian/index'));
    }

    public function deleteKompetensi_Keahlian($id_kk){
        $this->kompetensi_keahlianM->deleteKompetensi_Keahlian($id_kk);
        redirect(site_url('admin/kompetensi_keahlian/index'));
    }

    public function editKompetensi_Keahlian($id_kk)
    {
        $this->load->view('admin/editKompetensi_Keahlian',['kompetensi_keahlian'=>$this->kompetensi_keahlianM->getOne($id_kk)]);
        
    }
}
