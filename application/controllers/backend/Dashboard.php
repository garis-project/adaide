<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
<<<<<<< .merge_file_a10384
    public function __construct()
    {
        parent::__construct();
        check_login();
    }
    public function index() {
        $data['title'] ="Admin Page";
        templates('admin/index',$data);
=======

    public function index() {
        $data['title'] ="Admin Page";
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/admin/index');
        $this->load->view('backend/templates/footer');
>>>>>>> .merge_file_a14048
    }
}