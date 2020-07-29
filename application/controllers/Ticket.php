<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ticket extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    check_user();    
    $wa=$this->add->getWA();
    $this->user=$this->db->get_where('tb_user',['id_user'=>$this->session->userdata['id_login']]);
    $this->token=$wa['token'];
  }
  
  public function index()
  {
    
    $id_event=$this->input->post('id_event');
    if($id_event){
      $data['events']=$this->events->getEventDetail($id_event);
      $data['ticket']=$this->ticket->byIdEvent($id_event);
      $data['active']=$this->ticket->ticketActive($id_event);
      $data['payment']=$this->add->getPayment();
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
      $id_order='AI-ORD'.$max;
      $now=date('Y-m-d');
      $limit=date ('Y-m-d', strtotime ("$now + 2 days"));
      $total=$this->input->post('total');
      $data=[
        'id_pemesanan'=>$id_order,
        'tiket_init'=>$this->input->post('id_event').$this->input->post('id_type'),
        'id_event'=>$this->input->post('id_event'),
        'id_user'=>$this->session->userdata('id_login'),
        'total_harga'=>$total,
        'jml_beli'=>$this->input->post('qty'),
        'id_jenis_tiket'=>$this->input->post('id_type'),
        'id_konfirmasi'=>$id_konfirmasi,
        'tanggal_pemesanan'=>$now,
        'tanggal_konfirmasi'=>$limit,
        'status_pemesanan'=>'PENDING'
      ];
      $this->db->insert('tb_pemesanan',$data);

      // if($this->token){
      //   $message="ORDER ID : ".$id_order.". Silahkan lakukan transfer ke rekening : ".$this->payment['no_rek']." a/n "."$this->payment['an']"." Sejumlah Rp. ".number_format($total,0,".",",").",- . Dengan mencatumkan ID Konfirmasi : ".$id_konfirmasi." pada bagian keterangan transfer. Orderan akan otomatis digagalkan apabila stok tiket habis atau waktu pembayaran telah melibihi batas, yakni ".date('d M Y ',strtotime($limit));
      //   $this->notif->send_wa($this->token,$this->user['kontak'],$message);
      // }
      echo json_encode($data);
    }else{
      redirect('event');
    }
  }
}
