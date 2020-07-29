<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        check_login();
    }

    public function index() {
        $data['title'] ="Admin Page";
        $data['total']=[
            'user'=>$this->user->total(),
            'event'=>$this->events->total(),
            'stage'=>$this->stage->total(),
            'ticket'=>$this->stage->total(),
        ];
        templates('admin/index',$data);
    }

    public function profile(){
        $data['user']= $this->db->get_where('tb_user',['id_user'=>$this->session->userdata['id_login']])->row_array();
        $data['role']= $this->db->get_where('tb_role',['id_role'=>$this->session->userdata['id_role']])->row_array();
        $data['title'] ="Profile Page";
        templates('admin/profile',$data);
    }

    public function update(){
        $name=$this->input->post('fullname');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $id= $this->session->userdata('id_login');

        $data=[
            'nama_user'=>$name,
            'email_user'=>$email,
            'kontak'=>$phone
        ];
        $this->user->update($id,$data);
        $this->session->set_userdata(['nama_user'=>$name]);
        redirect('admin');
    }

    public function changePassword(){
        $id=$this->session->userdata('id_login');
        $password=md5($this->input->post('password'));
        $this->user->changePassword($id,$password);
    }

    public function getPayment(){
        echo json_encode($this->add->getPayment());
    }

    public function changePayment(){
        $data=[
            'bank'=>$this->input->post('bank'),
            'no_rek'=>$this->input->post('account'),
            'an'=>$this->input->post('name')
        ];
        $this->add->updatePayment($data);
        echo json_encode($data);
    }
}
