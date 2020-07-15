<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Event extends CI_Controller
{

  public function index()
  {
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/event/event');
    $this->load->view('frontend/templates/footer');
  }
}
