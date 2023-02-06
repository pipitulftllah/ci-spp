<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sppM extends CI_Model
{

    public function getSpp()
    {
        return $this->db->get('spp')->result_array();
    }

    public function insertSpp($data)
    {
        return $this->db->insert('spp',$data);
    }

    public function deleteSpp($id_spp){
        // $this->db->where();
        $this->db->delete('spp',['id_spp'=>$id_spp]);
    }

    public function getOne($id)
    {
        return $this->db->get_where('spp',['id_spp'=>$id])->result_array()[0];
    }
    public function update($data,$id)
    {
    
    $this->db->where('id_spp', $id);
    $this->db->update('spp', $data);
    }

}

