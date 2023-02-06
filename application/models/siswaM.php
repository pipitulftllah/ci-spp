<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswaM extends CI_Model
{

    public function getSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function insertSiswa($data)
    {
        return $this->db->insert('siswa',$data);
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
        

        $data = array(
            'nisn'      =>$nisn,
            'nis'       =>$nis,
            'nama'      =>$nama,
            'id_kelas'  =>$id_kelas,
            'alamat'    =>$alamat,
            'no_telp'   =>$no_telp,
            'id_spp'    =>$id_spp,
            'id_login'  =>$id_login,

        );

        $this->siswa->input_data($data, 'siswa');
        redirect(site_url('siswa/index'));

    }
    
    public function deleteSiswa($nisn){
        // $this->db->where();
        $this->db->delete('siswa',['nisn'=>$nisn]);
    }

    public function getOne($id)
    {
        return $this->db->get_where('siswa',['nisn'=>$id])->result_array()[0];
    }

}

