<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stage_model extends CI_Model 
{
    function viewAll(){
        $this->db->select('*');
        $this->db->from('tb_stage');
        return $this->db->get()->result_array();
    }
    function getEvent($id){
        $this->db->select('*');
        $this->db->from('tb_stage');
        $this->db->where(['id_stage'=>$id]);
        return $this->db->get()->row_array();
    }

    function updateEvents($data,$id){
        $this->db->where('id_stage', $id);
        $this->db->update('tb_stage', $data);
    } 

    function viewArea(){
        $this->db->select('nama');
        return $this->db->get('wilayah')->result_array();
    }
}