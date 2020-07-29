<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notification extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        check_login();
    }

    public function index(){
        $data['title'] ="WA Page";
        $data['wa']=$this->add->getWA();
        templates('notification/wa',$data);
    }

    public function updateWA(){
        $data=[
            'token'=>$this->input->post('token'),
            'valid'=>$this->input->post('date'),
            'phone'=>$this->input->post('phone'),
            'status'=>$this->input->post('status')
        ];
        $this->add->updateWA($data);
    }
}