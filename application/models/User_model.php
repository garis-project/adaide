<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
    public function getRole()
    {
        $this->db->select('id_user,nama_user,email_user,kontak,alamat,gender,id_role');
        return $this->db->get('tb_user')->row_array();
    }
    function total(){
        return $this->db->count_all('tb_user');
    }
}