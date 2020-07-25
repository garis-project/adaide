<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Exchange extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        check_login();
    }

    public function Order(){
        $data['title'] ="Exchange Order";
        templates('exchange/index',$data);
    }

    public function getDataOrder(){
        $id=$this->input->post('id');
        $id="AI-ORD000003bAjFQ";
        $order_id=substr($id,0,12);
        $confirm_id=substr($id,12,5);
        $data=[
            'id_pemesanan'=>$order_id,
            'id_konfirmasi'=>$confirm_id,
            'status_pemesanan'=>'SUCCESS'
        ];
        $orderData=$this->db->get_where('tb_pemesanan',$data)->row_array();
        $ticketData=$this->db->get_where('tb_detail_pemesanan',['id_pemesanan'=>$order_id])->result_array();
        $id_ticket=array(null);
        foreach($ticketData as $ticket){
            array_push($id_ticket,$ticket['id_tiket']);
        }
        $mixData=[
            'id_pemesanan'=>$orderData['id_pemesanan'],
            'id_konfirmasi'=>$orderData['id_konfirmasi'],
            'id_tiket'=>$id_ticket
        ];
        echo json_encode($mixData);
    }
}