<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Event extends CI_Controller
{
  var $token;
  function __construct(){
    parent::__construct();
  }

  public function index()
  {
    $data['events']=$this->events->viewPre();
    $data['title'] = "ADAIDE";
    $this->load->view('frontend/templates/header',$data);
    $this->load->view('frontend/event/event');
    $this->load->view('frontend/templates/footer');
  }
}
