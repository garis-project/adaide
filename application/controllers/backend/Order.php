<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        check_login();
    }

    public function index(){
        $data['title'] ="Order Page";
        templates('order/index',$data);
    }

    
    public function order_list()
    {
        $list = $this->order->get_datatables();
        $data_order= array();
        $no = $_POST['start'];
        foreach ($list as $value) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $value->id_pemesanan;
            $row[] = $value->nama_user;
            $row[] = Date('d/m/Y',strtotime($value->tanggal_pemesanan));
            $row[] = Date('d/m/Y',strtotime($value->tanggal_konfirmasi));
            
            $row[] = $value->nama_event;
            $row[] ="Rp.".number_format($value->total_harga,0,",",".").",-";
            if($value->status_pemesanan=="SUCCESS"){ 
                $badge="<div class='badge badge-success'>".$value->status_pemesanan."</div>";
                $action="<button type='button' class='btn btn-outline-danger btn-sm' onclick='("."\"".$value->id_pemesanan."\")'>
                            <i class='nav-icon fas fa-stop-circle fa-xs'></i>
                        </button>";
            }elseif($value->status_pemesanan=="PENDING"){
                $badge="<div class='badge badge-warning'>".$value->status_pemesanan."</div>";
                $action="<button type='button' class='btn btn-outline-success btn-sm' data-toggle='modal' data-target='#detailOrderModal' onclick='confirmOrder("."\"".$value->id_pemesanan."\")'>
                            <i class='nav-icon fas fa-check-circle fa-xs'></i>
                        </button>";
            }elseif($value->status_pemesanan=="AWAITING"){
                $badge="<div class='badge badge-warning'>".$value->status_pemesanan."</div>";
                $action="<button type='button' class='btn btn-outline-success btn-sm' onclick=("."\"".$value->id_pemesanan."\")'>
                            <i class='nav-icon fas fa-check-circle fa-xs'></i>
                        </button>";
            }elseif($value->status_pemesanan=="FAILED"){
                $badge="<div class='badge badge-danger'>".$value->status_pemesanan."</div>";
                $action=" ";
            }
            $row[] = $badge;
            $row[] = $action;
            $row[] = "
            <button type='button' class='btn btn-outline-success btn-sm' onclick='Konfirmasi("."\"".$value->id_pemesanan."\")' >
                <i class='nav-icon fas fa-check-circle fa-xs'></i>
            </button>";
            $data_order[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->order->count_all(),
                        "recordsFiltered" => $this->order->count_filtered(),
                        "data" => $data_order,
                );
        echo json_encode($output);
    }

    public function getDataOrder(){
        $id=$this->input->post('id');
        $data=$this->order->getData($id);
       echo json_encode($data);
    }
}