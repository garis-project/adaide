<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_model extends CI_Model 
{
    function viewAll(){
        $this->db->select('*');
        $this->db->from('tb_event e');
        $this->db->join('tb_stage s','s.id_stage=e.id_stage','left');
        return $this->db->get()->result_array();
    }

    function viewActive(){
        $this->db->select('*');
        $this->db->from('tb_event e');
        $this->db->join('tb_stage s','s.id_stage=e.id_stage','left');
        return $this->db->get()->result_array();
    }

    function getEvent($id){
        $this->db->select('*');
        $this->db->from('tb_event');
        $this->db->where(['id_event'=>$id]);
        return $this->db->get()->row_array();
    }

    function getEventDetail($id){
        $this->db->select('e.*,s.*');
        $this->db->from('tb_event e');
        $this->db->join('tb_stage s','s.id_stage=e.id_stage');
        $this->db->where(['id_event'=>$id]);
        return $this->db->get()->row_array();
    }
    function updateEvents($data,$id){
        $this->db->where('id_event', $id);
        $this->db->update('tb_event', $data);
    } 
}