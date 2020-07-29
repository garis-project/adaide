<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model 
{ 
    var $column_order = array(null, 'id_pemesanan','p.nama_user','nama_event','tanggal_pemesanan','total_harga','jml_beli','status_pemesanan'); //set column field database for datatable orderable
    var $column_search = array('id_pemesanan','nama_event','tanggal_pesan'); //set column field database for datatable searchable 
    var $order = array('id_pemesanan' => 'asc'); // default order 
 
    private function _get_datatables_query()
    {
     $this->db->select('id_pemesanan,tanggal_pemesanan,p.id_user,p.id_event,total_harga,status_pemesanan,nama_event,nama_user,tanggal_konfirmasi');
      $this->db->from('tb_pemesanan as p');
      $this->db->join('tb_event e', 'p.id_event=e.id_event','left'); 
      $this->db->join('tb_user u', 'u.id_user=p.id_user','left'); 
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
        $this->db->select('id_pemesanan,tanggal_pemesanan,p.id_user,p.id_event,total_harga,status_pemesanan,nama_event,nama_user,tanggal_konfirmasi');
        $this->db->from('tb_pemesanan as p');
        $this->db->join('tb_event e', 'p.id_event=e.id_event','left'); 
        $this->db->join('tb_user u', 'u.id_user=p.id_user','left'); 
        return $this->db->count_all_results();
    }

    public function getData($id){
        $this->db->select('id_pemesanan,tanggal_pemesanan,p.id_user,p.id_event,bukti_pembayaran,id_konfirmasi,tanggal_konfirmasi,total_harga,status_pemesanan,p.id_event,nama_event,nama_user,p.id_jenis_tiket,jenis_tiket,stok_tiket,status_tiket,jml_beli,harga_tiket');
        $this->db->from('tb_pemesanan as p');
        $this->db->join('tb_event e', 'p.id_event=e.id_event','left'); 
        $this->db->join('tb_user u', 'u.id_user=p.id_user','left'); 
        $this->db->join('tb_detail_event d', 'd.tiket_init=p.tiket_init','left'); 
        $this->db->join('tb_jenis_tiket j', 'j.id_jenis_tiket=p.id_jenis_tiket','left'); 
        $this->db->where('id_pemesanan',$id);
        return $this->db->get()->row_array();
    }
    public function getDataUser($id){
        $this->db->select('id_pemesanan,p.id_user,p.id_event,bukti_pembayaran,id_konfirmasi,tanggal_konfirmasi,total_harga,status_pemesanan,p.id_event,nama_event,nama_user,p.id_jenis_tiket,jenis_tiket,stok_tiket,status_tiket,jml_beli,harga_tiket');
        $this->db->from('tb_pemesanan as p');
        $this->db->join('tb_event e', 'p.id_event=e.id_event','left'); 
        $this->db->join('tb_user u', 'u.id_user=p.id_user','left'); 
        $this->db->join('tb_detail_event d', 'd.tiket_init=p.tiket_init','left'); 
        $this->db->join('tb_jenis_tiket j', 'j.id_jenis_tiket=p.id_jenis_tiket','left'); 
        $this->db->where('p.id_user',$id);
        $this->db->order_by('status_pemesanan','ASC');
        return $this->db->get()->result_array();
    }

    public function getLimit($id){
        $this->db->select('id_pemesanan,p.id_user,p.id_event,bukti_pembayaran,id_konfirmasi,tanggal_konfirmasi,total_harga,status_pemesanan,p.id_event,nama_event,nama_user,p.id_jenis_tiket,jenis_tiket,stok_tiket,status_tiket,jml_beli,harga_tiket');
        $this->db->from('tb_pemesanan as p');
        $this->db->join('tb_event e', 'p.id_event=e.id_event','left'); 
        $this->db->join('tb_user u', 'u.id_user=p.id_user','left'); 
        $this->db->join('tb_detail_event d', 'd.tiket_init=p.tiket_init','left'); 
        $this->db->join('tb_jenis_tiket j', 'j.id_jenis_tiket=p.id_jenis_tiket','left'); 
        $this->db->where('p.id_user',$id);
        $this->db->limit(4);
        $this->db->order_by('tanggal_pemesanan','DESC');
        return $this->db->get()->result_array();
    }
    public function maxTicketId($id_events){
        $this->db->select('SUBSTRING(id_tiket,12,4) AS id');
        $this->db->like('id_tiket',$id_events,'after');
        $id=$this->db->get('tb_detail_pemesanan')->result_array();
        if($id){
            $max=sprintf("%'.04d",(implode(",",max($id))+1));
        }else{
            $max=sprintf("%'.04d",1);
        }
        return $id_events.$max;
    }

    public function insertTicket($data){
        $this->db->insert('tb_detail_pemesanan',$data);
    }


    public function updateOrder($id,$data){
        $this->db->where('id_pemesanan',$id);
        $this->db->update('tb_pemesanan',$data);
    }
}