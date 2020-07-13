<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_model extends CI_Model 
{
    var $table = 'tb_tmp_detail_event';
    var $column_order = array(null,'jenis_tiket','stok_tiket','harga_tiket'); //set column field database for datatable orderable
    var $column_search = array(); //set column field database for datatable searchable 
    var $order = array('id_event' => 'asc'); // default order 
  
    private function _get_datatables_query()
    {
        $this->db->select('jenis_tiket,stok_tiket,harga_tiket');
      $this->db->from('tb_tmp_detail_event');
      $this->db->join('tb_jenis_tiket j','j.id_jenis_tiket=tb_tmp_detail_event.id_jenis_tiket','left');

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
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
      $this->db->from($this->table);
        return $this->db->count_all_results();
    }
 

    function viewAll(){
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

    function updateEvents($data,$id){
        $this->db->where('id_event', $id);
        $this->db->update('tb_event', $data);
    } 
}