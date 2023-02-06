<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugasM extends CI_Model
{

    public function getPetugas()
    {
        return $this->db->get('petugas')->result_array();
    }

    public function insertPetugas($data)
    {
        return $this->db->insert('petugas',$data);
    }

    public function tambah_aksi(){
        $id_login = $this->input->post('id_login');
        $nama_petugas = $this->input->post('nama_petugas');
        

        $data = array(
            'id_petugas'      =>$id_petugas,
            'nama_petugas'    =>$nama_petugas,
            'id_login'        =>$id_login,

        );

        $this->petugas->input_data($data, 'petugas');
        redirect(site_url('petugas/index'));
    }

    public function deletePetugas($id_petugas){
        // $this->db->where();
        $this->db->delete('petugas',['id_petugas'=>$id_petugas]);
    }

    public function getOne($id)
    {
        return $this->db->get_where('petugas',['id_petugas'=>$id])->result_array()[0];
    }

}

