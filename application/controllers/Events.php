<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Events extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Events_model','events');
    }
    public function index() {
        $data['title'] ="Events Page";
        $data['events']=$this->events->viewAll();
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/events/index');
        $this->load->view('backend/templates/footer');
    }

    public function add() {
        $data['title'] ="New Events";
        $this->form_validation-> set_rules('events_name','Events Name','required|trim');
        if($this->form_validation->run()==false){
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/navbar');
            $this->load->view('backend/templates/sidebar');
            $this->load->view('backend/events/add');
            $this->load->view('backend/templates/footer');
        }else{
            $fileName = time().$_FILES['banner-input']['name'];
            $config['upload_path'] = './assets/img/events/'; //path upload
            $config['file_name'] = $fileName;  // nama file
            $config['allowed_types'] = 'jpg|jpeg|png'; //tipe file yang diperbolehkan
            $config['max_size'] = 10000; // maksimal sizze
     
            $this->load->library('upload'); //meload librari upload
            $this->upload->initialize($config);    
            if(! $this->upload->do_upload('banner-input') ){
                echo $this->upload->display_errors();exit();
            }
            $data_events=[
                'nama_event'=>$this->input->post('events_name'),
                'tanggal_mulai'=>$this->input->post('startdate'),
                'tanggal_selesai'=>$this->input->post('enddate'),
                'lokasi'=>$this->input->post('location'),
                'status'=>$this->input->post('events_status'),
                'deskripsi'=>$this->input->post('description'),
                'banner'=>$fileName
            ];
            $this->db->insert('event',$data_events);
            redirect('events');
        }
    }

    public function view() {
        $id_event=$this->input->post('id_events');
        $data['event']=$this->events->getEvent($id_event);
        $data['title'] ="View Details Events";
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/events/view');
        $this->load->view('backend/templates/footer');
    }

    public function update() {
        $data['title'] ="Update Events";
        $id_event=$this->input->post('id_events');
        $data['event']=$this->events->getEvent($id_event);
        $this->form_validation-> set_rules('events_name','Events Name','required|trim');
        if($this->form_validation->run()==false){
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/navbar');
            $this->load->view('backend/templates/sidebar');
            $this->load->view('backend/events/update');
            $this->load->view('backend/templates/footer');
        }else{
            $fileName = time().$_FILES['banner-input']['name'];
            $config['upload_path'] = './assets/img/events/'; //path upload
            $config['file_name'] = $fileName;  // nama file
            $config['allowed_types'] = 'jpg|jpeg|png'; //tipe file yang diperbolehkan
            $config['max_size'] = 10000; // maksimal sizze
     
            $this->load->library('upload'); //meload librari upload
            $this->upload->initialize($config);    
            if(! $this->upload->do_upload('banner-input') ){
                echo $this->upload->display_errors();exit();
            }
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
            redirect('events');
        }
    }

    public function delete(){
        $id_event=$this->input->post('id_event');
        $this->db->delete("event",['id_event'=>$id_event]);
        redirect('events');
    }  
}