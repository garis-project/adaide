<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('id_role')!="1"){
            redirect("auth");
        }
    }
    public function index() {
        $data['title'] ="Admin Page";
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/admin/index');
        $this->load->view('backend/templates/footer');
    }
}