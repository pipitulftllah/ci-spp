<?php
class Login_model extends CI_Model{
    function cek_user($username,$password){
        $this->db->get_where('login', ['username'=>$username])->row();
        $this->db->get_where('login', ['password'=>$password])->row();
        $result = $this->db->get('login');
        return $result;
    } 
}