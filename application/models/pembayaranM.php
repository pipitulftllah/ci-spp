<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaranM extends CI_Model
{

    public function getPembayaran()
    {
        return $this->db->get('pembayaran')->result_array();
    }

    public function insertPembayaran($data)
    {
        return $this->db->insert('pembayaran',$data);
    }
    
    public function deletePembayaran($id_pembayaran){
        // $this->db->where();
        $this->db->delete('pembayaran',['id_pembayaran'=>$id_pembayaran]);
    }

    public function getOne($id)
    {
        return $this->db->get_where('pembayaran',['id_pembayaran'=>$id])->result_array()[0];
    }

}

