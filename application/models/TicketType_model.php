<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketType_model extends CI_Model 
{
    var $table = 'tb_tmp_detail_event';
    var $column_order = array(null,'jenis_tiket','stok_tiket','harga_tiket'); //set column field database for datatable orderable
    var $column_search = array(); //set column field database for datatable searchable 
    var $order = array('id_event' => 'asc'); // default order 
  
    private function _get_datatables_query($tmp)
    {
        if($tmp==1){
            $this->db->select('t.id_jenis_tiket,jenis_tiket,stok_tiket,harga_tiket');
            $this->db->from('tb_tmp_detail_event AS t');
            $this->db->join('tb_jenis_tiket j','j.id_jenis_tiket=t.id_jenis_tiket','left');
        }else{
            $this->db->select('t.id_jenis_tiket,jenis_tiket,stok_tiket,harga_tiket,status_tiket');
            $this->db->from('tb_detail_event AS d');
            $this->db->join('tb_jenis_tiket j','d.id_jenis_tiket=t.id_jenis_tiket','left');
        }
        
        
        
       

        $i = 0;
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {  
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables($tmp)
    {
        $this->_get_datatables_query($tmp);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
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
        $sql="INSERT INTO tb_detail_event (id_event,id_jenis_tiket,harga_tiket,stok_tiket,status_tiket) SELECT '".$id."' AS id_event,id_jenis_tiket,harga_tiket,stok_tiket,1 FROM tb_tmp_detail_event";
        $this->db->query($sql);
        $this->db->truncate('tb_tmp_detail_event');
    } 
}