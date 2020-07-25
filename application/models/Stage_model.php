<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stage_model extends CI_Model 
{
    function viewAll(){
        $this->db->select('*');
        return $this->db->get('tb_stage')->result_array();
    }

    function getStage($id){
        $this->db->select('*');
        $this->db->from('tb_stage');
        $this->db->where(['id_stage'=>$id]);
        return $this->db->get()->row_array();
    }

    function updateStage($data,$id){
        $this->db->where('id_stage', $id);
        $this->db->update('tb_stage', $data);
    } 

    function viewArea(){
        $this->db->select('nama');
        return $this->db->get('wilayah')->result_array();
    }

    function total(){
        return $this->db->count_all('tb_stage');
    }
}