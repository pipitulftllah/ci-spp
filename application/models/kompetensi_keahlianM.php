<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kompetensi_keahlianM extends CI_Model
{

    public function getKompetensi_Keahlian()
    {
        return $this->db->get('kompetensi_keahlian')->result_array();
    }

    public function insertKompetensi_Keahlian($data)
    {
        return $this->db->insert('kompetensi_keahlian',$data);
    }
    
    public function deleteKompetensi_Keahlian($id_kk){
        // $this->db->where();
        $this->db->delete('kompetensi_keahlian',['id_kk'=>$id_kk]);
    }

    public function getOne($id)
    {
        return $this->db->get_where('kompetensi_keahlian',['id_kk'=>$id])->result_array()[0];
    }
}

