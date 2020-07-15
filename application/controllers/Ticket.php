<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ticket extends CI_Controller
{

  public function index()
  {
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/event/ticket');
    $this->load->view('frontend/templates/footer');
  }
}
