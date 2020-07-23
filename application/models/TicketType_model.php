<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketType_model extends CI_Model 
{ 
    private function _get_datatables_query($tmp)
    {
        if($tmp==1){
            $this->db->select('t.id_jenis_tiket,jenis_tiket,stok_tiket,harga_tiket');
            $this->db->from('tb_tmp_detail_event AS t');
            $this->db->join('tb_jenis_tiket j','j.id_jenis_tiket=t.id_jenis_tiket','left');
        }else{
            $this->db->select('d.id_jenis_tiket,jenis_tiket,stok_tiket,harga_tiket,status_tiket');
            $this->db->from('tb_detail_event AS d');
            $this->db->join('tb_jenis_tiket j','d.id_jenis_tiket=j.id_jenis_tiket','left');
            $this->db->where('id_event',$tmp);
        }
    }
 
    function get_datatables($tmp)
    {
        $this->_get_datatables_query($tmp);
        $query = $this->db->get();
        return $query->result();
    }
 
    function viewType(){
        $this->db->select('*');
        return $this->db->get('tb_jenis_tiket')->result_array();
    }

    function getTicket($id){
        $this->db->select('*');
        $this->db->where('id_jenis_tiket',$id);
        return $this->db->get('tb_tmp_detail_event')->row_array();
    }
    function insertTicket($id){
        $sql="INSERT INTO tb_detail_event (id_event,id_jenis_tiket,harga_tiket,stok_tiket,status_tiket) SELECT '".$id."' AS id_event,id_jenis_tiket,harga_tiket,stok_tiket,0 FROM tb_tmp_detail_event";
        $this->db->query($sql);
        $this->db->truncate('tb_tmp_detail_event');
    } 

    function byIdEvent($id){
        $this->db->select('d.id_jenis_tiket,jenis_tiket,stok_tiket,harga_tiket,status_tiket');
        $this->db->from('tb_detail_event AS d');
        $this->db->join('tb_jenis_tiket j','d.id_jenis_tiket=j.id_jenis_tiket','left');
        $this->db->where('id_event',$id);
        return $this->db->get()->result_array();
    }

    function total(){
        return $this->db->count_all('tb_jenis_tiket');
    }
}