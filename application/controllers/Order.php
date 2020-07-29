<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Order extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    check_user();    
  }
  
  public function index()
  {
    $id=$this->session->userdata('id_login');
    $data['user']=$this->db->get_where('tb_user',['id_user'=>$id])->row_array();
    $data['order']=$this->order->getDataUser($id);
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/order/index');
    $this->load->view('frontend/templates/footer');
  }

  public function cekStatus(){
    $status_order=$this->input->post('status');
    if($status_order=="PENDING"){
      $url="confirm";
    }elseif($status_order=="AWAITING"){
      $url="awaiting";
    }elseif($status_order=="SUCCESS"){
      $url="detail";
    }elseif($status_order=="FAILED"){
      $url="failed";
    }
    echo json_encode($url);
  }

  public function confirm(){
    $id_order=$this->input->post('id_order');
    if($id_order){
      $data['order']= $this->order->getData($id_order);
      $this->load->view('frontend/templates/auth_header',$data);
      $this->load->view('frontend/order/confirm');
      $this->load->view('frontend/templates/footer');
    }else{
      redirect('order');
    }
    
  }

  public function process(){
    if($this->input->post('image-check')){
      $fileName=uploadProof();
    }else{
      $fileName=$this->input->post('image-default');
    }
    $id=$this->input->post('id_order');
    $data=[
      'bukti_pembayaran'=>$fileName,
      'status_pemesanan'=>'AWAITING'
    ];
    $this->order->updateOrder($id,$data);
    redirect('order');
  }

  public function detail(){
    $id_order=$this->input->post('id_order');
    if($id_order){
      $data['order']= $this->order->getData($id_order);
      $this->load->view('frontend/templates/auth_header',$data);
      $this->load->view('frontend/order/detail');
      $this->load->view('frontend/templates/footer');
    }else{
      redirect('order');
    }
   
  }
}