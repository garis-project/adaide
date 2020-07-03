<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_model extends CI_Model 
{
    function viewAll(){
        $this->db->select('*');
        $this->db->from('event');
        return $this->db->get()->result_array();
    }
    function getEvent($id){
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where(['id_event'=>$id]);
        return $this->db->get()->row_array();
    }

    function updateEvents($data,$id){
        $this->db->where('id_event', $id);
        $this->db->update('event', $data);
    } 
}