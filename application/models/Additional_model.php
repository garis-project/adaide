<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additional_model extends CI_Model 
{
    function getWA(){
        $this->db->select('*');
        return $this->db->get('tb_wa')->row_array();
    }

    function getPayment(){
        $this->db->select('*');
        return $this->db->get('tb_payment')->row_array();
    }

    function updateWA($data){
        $this->db->where('id',1);
        $this->db->update('tb_wa',$data);
    }
}