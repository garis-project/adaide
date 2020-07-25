<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ticket extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        check_login();
    }
    public function index() {
        $data['title'] ="Ticket Type Page";
        $data['ticket']=$this->ticket->viewType();
        templates('ticket/index',$data);
    }

    public function edit(){
        $id=$this->input->post('id');
        $name=$this->input->post('name');
        $ticket_name=trim($name,'"');
        $data=[
            'jenis_tiket'=>$ticket_name
        ];
        $this->db->where('id_jenis_tiket',$id);
        $this->db->update('tb_jenis_tiket',$data);
    }

    public function insert(){
        $name=$this->input->post('name');
        $ticket_name=trim($name,'"');
        $data=[
            'jenis_tiket'=>$ticket_name
        ];
        $this->db->insert('tb_jenis_tiket',$data);
    }

    public function delete(){
        $id=$this->input->post('id');
        $this->db->delete("tb_jenis_tiket",['id_jenis_tiket'=>$id]);
    }
}