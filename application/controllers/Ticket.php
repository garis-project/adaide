<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ticket extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    check_user();    
  }
  
  public function index()
  {
    $id_event=$this->input->post('id_event');
    if($id_event){
      $data['events']=$this->events->getEventDetail($id_event);
      $data['title'] = "ADAIDE";
      $this->load->view('frontend/templates/auth_header',$data);
      $this->load->view('frontend/event/ticket');
      $this->load->view('frontend/templates/footer');
    }else{
      redirect('event');
    }
    
  }

  public function createOrder(){
    if($this->input->post('id_event')){
      $id_konfirmasi= random_string('alnum',5);
      while ($this->db->get_where('tb_pemesanan',['id_konfirmasi'=>$id_konfirmasi,'status_pemesanan'=>'PENDING'])->num_rows()) {
        $id_konfirmasi= random_string('alnum',5);
      }
      
      $this->db->select('SUBSTRING(id_pemesanan,7,6) AS id');
      $id=$this->db->get('tb_pemesanan')->result_array();
      $max=sprintf("%'.06d",(implode(",",max($id))+1));

      $now=date('Y-m-d');
      $limit=date ('Y-m-d', strtotime ("$now + 1 days"));
      $data=[
        'id_pemesanan'=>'AI-ORD'.$max,
        'tiket_init'=>$this->input->post('id_event').$this->input->post('ticket_type'),
        'id_event'=>$this->input->post('id_event'),
        'id_user'=>$this->session->userdata('id_login'),
        'total_harga'=>$this->input->post('total'),
        'jml_beli'=>$this->input->post('qty'),
        'id_jenis_tiket'=>$this->input->post('ticket_type'),
        'id_konfirmasi'=>$id_konfirmasi,
        'tanggal_pemesanan'=>$now,
        'tanggal_konfirmasi'=>$limit,
        'status_pemesanan'=>'PENDING'
      ];
      $this->db->insert('tb_pemesanan',$data);
      redirect('order');
    }else{
      redirect('event');
    }

    
  }

}
