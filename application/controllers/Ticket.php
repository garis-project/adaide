<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ticket extends CI_Controller
{
  public function index()
  {
    $id_event=$this->input->post('id_event');
    $data['events']=$this->events->getEventDetail($id_event);
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/auth_header',$data);
    $this->load->view('frontend/event/ticket');
    $this->load->view('frontend/templates/footer');
  }
}
