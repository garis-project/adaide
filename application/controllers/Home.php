<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function index() {
        $data['title'] ="ADAIDE";
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/home/index');
        $this->load->view('frontend/templates/footer');
    }
}