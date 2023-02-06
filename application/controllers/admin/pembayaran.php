<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pembayaranM');
    }

    public function index()
    {
        $data['pembayaran'] = $this->pembayaranM->getPembayaran();
        $this->load->view('admin/pembayaran', $data);
    }

    public function tambah_aksi(){
        $id_pembayaran = $this->input->post('id_pembayaran');
        $id_petugas = $this->input->post('id_petugas');
        $nisn = $this->input->post('nisn');
        $tgl_bayar = $this->input->post('tgl_bayar');
        $bulan_dibayar = $this->input->post('bulan_dibayar');
        $tahun_dibayar = $this->input->post('tahun_dibayar');
        $id_spp = $this->input->post('id_spp');
        $jumlah_bayar = $this->input->post('jumlah_bayar');

        $data = array(
            'id_pembayaran'     =>$id_pembayaran,
            'id_petugas'        =>$id_petugas,
            'nisn'              =>$nisn,
            'tgl_bayar'         =>$tgl_bayar,
            'bulan_dibayar'     =>$bulan_dibayar,
            'tahun_dibayar'     =>$tahun_dibayar,
            'id_spp'            =>$id_spp,
            'jumlah_bayar'      =>$jumlah_bayar,

        );

        $this->pembayaranM->insertPembayaran($data);
        redirect(site_url('admin/pembayaran/index'));

        $this->siswa->input_data($data, 'pembayaran');
        redirect(site_url('pembayaran/index'));
    }

    public function deletePembayaran($id_pembayaran){
        $this->pembayaranM->deletePembayaran($id_pembayaran);
        redirect(site_url('admin/pembayaran/index'));
    }

    public function editPembayaran($id_pembayaran)
    {
        $this->load->view('admin/editPembayaran',['pembayaran'=>$this->pembayaranM->getOne($id_pembayaran)]);
        
    }

}
