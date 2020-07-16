<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Events extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        check_login();
    }
    public function index() {
        $data['title'] ="Events Page";
        $data['events']=$this->events->viewAll();
        templates('events/index',$data);
    }

    public function add() {
        $data['title'] ="New Events";
        $data['stage']=$this->stage->viewAll();
        $data['ticket']=$this->ticket->viewType();
       
        $this->form_validation-> set_rules('events_name','Events Name','required|trim');
        if($this->form_validation->run()==false){
            $this->db->truncate('tb_tmp_detail_event');
            templates('events/add',$data);
        }else{
            $fileName=uploadBanner();
            $id_events=$this->input->post('id_events').$this->input->post('date_events');
            $data_events=[
                'id_event'=>$id_events,
                'nama_event'=>$this->input->post('events_name'),
                'tanggal_mulai'=>$this->input->post('startdate'),
                'tanggal_selesai'=>$this->input->post('enddate'),
                'id_stage'=>$this->input->post('id_stage'),
                'status_event'=>$this->input->post('events_status'),
                'deskripsi'=>$this->input->post('description'),
                'banner'=>$fileName
            ];
            $this->db->insert('tb_event',$data_events);
            $this->ticket->insertTicket($id_events);
            redirect('admin/events');
        }
    }

    public function view() {
        $id_event=$this->input->post('id_events');
        $data['event']=$this->events->getEventDetail($id_event);
        $data['title'] ="View Details Events";
        templates('events/view',$data);
    }

    public function update() {
        $data['title'] ="Update Events";
        $id_event=$this->input->post('id_events');
        $data['event']=$this->events->getEvent($id_event);
        $this->form_validation-> set_rules('events_name','Events Name','required|trim');
        if($this->form_validation->run()==false){
            templates('events/update',$data);
        }else{
            $fileName=uploadBanner();
            $data_events=[
                'nama_event'=>$this->input->post('events_name'),
                'tanggal_mulai'=>$this->input->post('startdate'),
                'tanggal_selesai'=>$this->input->post('enddate'),
                'lokasi'=>$this->input->post('location'),
                'status'=>$this->input->post('events_status'),
                'deskripsi'=>$this->input->post('description'),
                'banner'=>$fileName
            ];
            $this->events->updateEvents($data_events,$id_event);
            redirect('admin/events');
        }
    }

    public function delete(){
        $id_event=$this->input->post('id_events');
        $this->db->delete("tb_event",['id_event'=>$id_event]);
        $this->db->delete("tb_detail_event",['id_event'=>$id_event]);
        redirect('admin/events');
    }  

    public function insertTmpTicket(){
        $data_ticket=[
            'id_jenis_tiket'=>$this->input->post('id_type'),
            'harga_tiket'=>$this->input->post('price'),
            'stok_tiket'=>$this->input->post('stock'),
        ];
        if($this->db->insert('tb_tmp_detail_event',$data_ticket)){
            $res="y";
        }else{
            $res="n";
        }
        echo json_encode($res);
    }

    public function deleteTmpTicket(){
        $id= $this->input->post('id');
        $this->db->where('id_jenis_tiket',$id);
        $this->db->delete('tb_tmp_detail_event');
        echo json_encode("y");
    }

    public function getTmpTicket(){
        $id= $this->input->post('id');
        $data=$this->ticket->getTicket($id);
        echo json_encode($data);
    }

    public function ticket_tmp() {
        $list = $this->ticket->get_datatables(1);
        $data_ticket= array();
        $no = $_POST['start'];
        foreach ($list as $value) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $value->jenis_tiket;
            $row[] = "Rp.";
            $row[] = number_format($value->harga_tiket,0,",",".");
            $row[] = $value->stok_tiket;
            $row[] = "
            <button type='button' class='btn btn-outline-info btn-sm' onclick='editTicket("."\"".$value->id_jenis_tiket."\")'>
              <i class='nav-icon fas fa-edit fa-xs'></i>
            </button>
            <button type='button' class='btn btn-outline-danger btn-sm' onclick='deleteTicket("."\"".$value->id_jenis_tiket."\")' >
                <i class='nav-icon fas fa-trash fa-xs'></i>
            </button>";
            $data_ticket[] = $row;
        }
     
        $output = array(
                        "draw" => $_POST['draw'],
                        "data" => $data_ticket
                );
        echo json_encode($output);
    }
    
    public function ticket_list() {
        $list = $this->ticket->get_datatables(0);
        $data_ticket= array();
        $no = $_POST['start'];
        foreach ($list as $value) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $value->jenis_tiket;
            $row[] = "Rp.";
            $row[] = number_format($value->harga_tiket,0,",",".");
            $row[] = $value->stok_tiket;
            $row[] = "
            <button type='button' class='btn btn-outline-info btn-sm' onclick='editTmpTicket("."\"".$value->id_jenis_tiket."\")'>
              <i class='nav-icon fas fa-edit fa-xs'></i>
            </button>
            <button type='button' class='btn btn-outline-danger btn-sm' onclick='deleteTmpTicket("."\"".$value->id_jenis_tiket."\")' >
                <i class='nav-icon fas fa-trash fa-xs'></i>
            </button>";
            $data_ticket[] = $row;
        }
     
        $output = array(
                        "draw" => $_POST['draw'],
                        "data" => $data_ticket
                );
        echo json_encode($output);
    }
}