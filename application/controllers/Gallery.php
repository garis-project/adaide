<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Gallery extends CI_Controller
{

  public function index()
  {
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/header', $data);
    $this->load->view('frontend/home/gallery');
    $this->load->view('frontend/templates/footer');
  }
}
