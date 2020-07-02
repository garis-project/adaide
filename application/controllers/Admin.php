<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    public function index() {
        $data['title'] ="Admin Page";
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/admin/index');
        $this->load->view('backend/templates/footer');
    }
}