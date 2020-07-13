<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketType_model extends CI_Model 
{
    function viewType(){
        $this->db->select('*');
        return $this->db->get('tb_jenis_tiket')->result_array();
    }
}