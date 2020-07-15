<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Wedo extends CI_Controller
{

  public function index()
  {
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/header', $data);
    $this->load->view('frontend/home/wedo');
    $this->load->view('frontend/templates/footer');
  }
}
