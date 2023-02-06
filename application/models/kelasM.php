<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelasM extends CI_Model
{

    public function getKelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function insertKelas($data)
    {
        return $this->db->insert('kelas',$data);
    }

    public function deleteKelas($id_kelas){
        // $this->db->where();
        $this->db->delete('kelas',['id_kelas'=>$id_kelas]);
    }

    public function getOne($id)
    {
        return $this->db->get_where('kelas',['id_kelas'=>$id])->result_array()[0];
    }
    
}
